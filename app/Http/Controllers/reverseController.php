<?php

namespace App\Http\Controllers;

use App\Models\Bells;
use Illuminate\Support\Facades\DB;
use App\Models\Cost;
use App\Models\deleteMedicines;
use App\Models\Enters;
use App\Models\Informations;
use App\Models\Pharmacy;
use App\Models\Revers;
use App\Models\Sells;
use Illuminate\Http\Request;

class reverseController extends Controller
{
    //
    public function reverse(Request $r)
    {
      
         $med=deleteMedicines::all()->toArray();
         return view('/reverse.add',compact('med'));
    }

    public function add(Request $r)
    {
        $to=now()->toDateString('y-m-d');
        $meds=deleteMedicines::where('id',request('id'))->get();
        $dname=request('dname');
          
       foreach($meds as $med)
       {
                $rev=new Revers();
                $rev->parcode=$med->parcode;
                $rev->name=$med->name;
                $rev->edate=$med->edate;
                $rev->dname=$dname;
                $rev->date=$to;
                 $rev->save();
               
                 $med->delete();
       }
      
        return redirect()->route('add_rev');
        
    }

    public function addDist(Request $r)
    {
        $id=request('id');
        return view('reverse.reverse')->with('id',$id);
    }

    public function show()
    {
        $med=Revers::all()->toArray();
        return view('/reverse.show',compact('med'));
    }

    public function confirm(Request $r)
    {
        $to=now()->toDateString('y-m-d');
        $sell=Bells::where('medname',request('medname'))->get();
        foreach($sell as $row)
        {
            if($row->date==request('date') && $row->quantity== request('quantity'))
            {
                $sell=Bells::where('date',$to)->first();
                $cost=Cost::where('medname',request('medname') )->first();
                return view('/reverse.addCust',compact('sell','cost'))->with('q',request('quantity'));
            }
        }
        return redirect('/reverse.customers')->with('not',"The informations are not correct ");

      
       
    }

    public function addCust(Request $r)
    {
        $data=new Enters();
        $bell=new Bells();
        $store=new Pharmacy();
        $q1=Pharmacy::where('parcode',request('parcode'));
        $q=Pharmacy::where('parcode',request('parcode'))->value('quantity');
        $mid=Informations::where('parcode',request('parcode'))->value('id');
        $medname=Informations::where('parcode',request('parcode'))->value('commerce_name');
        $to=now()->toDateString('y-m-d');
       
        if($q1 &&request('q')>= request('quantity')){
        $updating=DB::table('pharmacies')->where('parcode',request('parcode'))->update([ 'quantity'=> $q + request('quantity')]);
        $data->parcode= request('parcode');
        $data->quantity=request('quantity');
        $data->end_date=request('end_date');
        $data->cost=request('cost');
        $data->all=request('cost') * request('quantity');
        $data->date=$to;
        $data->medname=$medname;
        $data->mid=$mid;
       $created= $data->save();
       $bell->parcode= request('parcode');
       $bell->quantity=request('quantity');
      
       $bell->cost=request('cost');
       $bell->all=request('cost') * request('quantity');
       $bell->date=$to;
       $bell->medname=$medname;
       $bell->mid=$mid;
      $bell->save();
       if($created){
        
          return redirect()->route('buy');
       }
       else{
         return redirect('/reverse.customers')->with('not',"The informations are not correct ");  
       }
      }
        else{
        
          return redirect('/reverse.customers')->with('not',"The informations are not correct ");
           }
          
    }

    public function showCust()
    {
        $med=Enters::all()->toArray();
        return view('/buy.show',compact('med'));
    }
}

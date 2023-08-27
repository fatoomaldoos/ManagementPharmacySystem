<?php

namespace App\Http\Controllers;

use App\Models\Informations;
use App\Models\Medicine;
use App\Models\Pharmacy;
use Illuminate\Http\Request;

class PharmacyController extends Controller
{
    //
    public function store(Request $r)
    {
          $data=new Pharmacy();
          $mid=Informations::where('parcode',request('parcode'))->value('id');
          $medname=Informations::where('parcode',request('parcode'))->value('commerce_name');
         
          if($mid)
          {
          $data->parcode= request('parcode');
          $data->quantity=request('quantity');
          $data->counter=request('counter');
          $data->medname=$medname;
          $data->mid=$mid;
         $created= $data->save();
         if($created){
           // $display=array('cname'=> $username);
            $store=Pharmacy::all()->toArray();
          //  return view('/pharmacy.show',compact('store'));
            return redirect()->route('storage')->with( $store);
         }
         else{
           return redirect('/pharmacy.add')->with('msg','There is an Error , Please register again!');  
         }
        }
        else
        {
            return redirect('/pharmacy.add')->with('msg','There is an Error , Please register again!');  
        }
    }

    //show

    public function show(Request $r)
    {
      
         $store=Pharmacy::all()->toArray();
         return view('/pharmacy.show',compact('store'));
    }

    public function max(Request $r)
    {
     $count=Pharmacy::all();
      
         $store=Pharmacy::take(count($count))->orderBy('counter','DESC')->get();
         $sec=Informations::value('parcode');
        // $mid=Medicine::where('parcode',request('parcode'))->value('id');
         $sec1=Informations::value('section_name');
         return view('/pharmacy.max',compact('store','sec','sec1'));
    }

    public function min(Request $r)
    {
      
     $count=Pharmacy::all();
      
     $store=Pharmacy::take(count($count))->orderBy('counter')->get();
     $sec=Informations::all()->toArray();
     return view('/pharmacy.min',compact('store','sec'));
    }
}

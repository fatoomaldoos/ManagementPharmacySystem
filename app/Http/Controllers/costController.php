<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Cost;
use App\Models\Enters;
use App\Models\Medicine;
use Illuminate\Http\Request;

class costController extends Controller
{
    //
     //
     public function store(Request $r)
     {
           $data=new Cost();
           $med=Cost::all()->where('parcode',request('parcode'))->toArray();
           if($med)
           {
            $cost=Enters::where('parcode',request('parcode'))->value('cost');
            $ratio=(request('add')/100) * ($cost/100)*100;
            $to=now()->toDateString('y-m-d');
            $medname=Enters::where('parcode',request('parcode'))->value('medname');
          $updating=DB::table('cost_systems')->where('parcode',request('parcode'))->update([ 
        
         'medname'=>$medname,
         
         'parcode'=>request('parcode'),
       
         'add'=>request('add'),
        
         'date'=>$to,
         'cost'=>$ratio+$cost]);
         return redirect()->route('cost');
           }
           else{
          $mid=Enters::where('parcode',request('parcode'))->value('id');
           $medname=Enters::where('parcode',request('parcode'))->value('medname');
           $cost=Enters::where('parcode',request('parcode'))->value('cost');
           $ratio=(request('add')/100) * ($cost/100)*100;
           $to=now()->toDateString('y-m-d');
          
           $data->parcode= request('parcode');
           //$data->quantity=request('quantity');
           $data->cost=$ratio+$cost;
           $data->add=request('add');
           $data->date=$to;
           $data->medname=$medname;
           $data->mid=$mid;
          $created= $data->save();
          if($created){
           
             return redirect()->route('cost');
          }
          else{
            return redirect('/cost.add')->with('msg','There is an Error , Please register again!');  
          }
        }
         }

         public function parcode(Request $r)
    {
       $data=$r->parcode;
       
        $med=Enters::where('parcode',$data)->first();
        $mid=Enters::where('parcode',request('parcode'))->value('id');
           if($med)
           {
            return view('/cost.add',compact('med'));
          
           }
           
            else{
                return view('cost.parcode');
           }
        
    }
     
    public function edit(Request $r)
    {
       $data=$r->parcode;
       
        $med=Cost::where('parcode',$data)->first();
        
           if($med)
           {
            return view('/cost.edit',compact('med'));
          
           }
           
            else{
                return view('cost.parcodeEdit');
           }
        
    }


    public function update(Request $r, $id)
    {
        $cost=Enters::where('parcode',request('parcode'))->value('cost');
           $ratio=(request('add')/100) * ($cost/100)*100;
           $to=now()->toDateString('y-m-d');
          
         $updating=DB::table('costs')->where('id',$id)->update([ 
       
        'medname'=>request('medname'),
        
        'parcode'=>request('parcode'),
      
        'add'=>request('add'),
       
        'date'=>$to,
        'cost'=>$ratio+$cost]);

      if($updating)
      {
        return redirect('/cost.show');
      }
      else{
        return redirect('/cost.edit')->with('msg',"There is an error!");
      }
       
    }
     
     
 
     public function show(Request $r)
     {
       
          $med=Cost::all()->toArray();
          return view('/cost.show',compact('med'))->with('msg','There is an Error , Please register again!');
     }
}

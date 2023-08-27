<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Cost;
use App\Models\Enters;
use App\Models\Important;
use App\Models\Sells;
use Illuminate\Contracts\Validation\ImplicitRule;
use Illuminate\Http\Request;

class importantController extends Controller
{
    //store
    public function store(Request $r)
    {
        $data=new Important();
        $med=Important::all()->where('parcode',request('parcode'))->toArray();
        $cost=Enters::where('parcode',request('parcode'))->value('cost');
        $bid=Enters::where('parcode',request('parcode'))->value('id');
        $sale=Cost::where('parcode',request('parcode'))->value('cost');
        $sid=Cost::where('parcode',request('parcode'))->value('id');
        $medname=Enters::where('parcode',request('parcode'))->value('medname');
    
        if($med)
        {
         $updating=DB::table('importants')->where('parcode',request('parcode'))->update([ 
     
      'medname'=>$medname,
      'parcode'=>request('parcode'),
      'min'=>request('min'),
      'buy'=>$cost,
      'sale'=>$sale,
      'sid'=>$sid,
      'bid'=>$bid

      ]);
      return redirect()->route('show_imp');
        }
        else{
     
            $data->medname=$medname;
            $data->parcode=request('parcode');
            $data->min=request('min');
            $data->buy=$cost;
            $data->sale=$sale;
            $data->sid=$sid;
            $data->bid=$bid;
       $created= $data->save();
       if($created){
        
          return redirect()->route('show_imp');
       }
       else{
         return redirect('/important.add')->with('msg','There is an Error , Please register again!');  
       }
     }
    }

    
    public function show(Request $r)
    {
      
         $med=Important::all()->toArray();
         return view('/important.show',compact('med'))->with('msg','There is an Error , Please register again!');
    }
}

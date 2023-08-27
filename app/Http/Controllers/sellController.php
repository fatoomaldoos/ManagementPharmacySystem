<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Cost;
use App\Models\CustBells;
use App\Models\CustMedicines;
use App\Models\Customers;
use App\Models\deleteMedicines;
use App\Models\Enters;
use App\Models\Important;
use App\Models\Informations;
use App\Models\Medicine;
use App\Models\Pharmacy;
use App\Models\Sells;
use Illuminate\Http\Request;

class sellController extends Controller
{
    public function store(Request $r)
    {
          $data=new Sells();
          $store=new Pharmacy();
          $object=Cost::where('medname',request('medname'))->value('cost');
          $q=Pharmacy::where('medname',request('medname'))->value('parcode');
          $q1=Pharmacy::where('medname',request('medname'))->value('quantity');
          $med=Pharmacy::where('medname',request('medname'))->first();
          $quantity=$med->quantity;
          $qq=request('quantity');
         $medname=request('medname');
         $all=request('cost') * request('quantity');
         
          $mid=Enters::where('medname',request('medname'))->value('id');

         // $medname=Medicine::where('parcode',request('parcode'))->value('commerce_name');
          $to=now()->toDateString('y-m-d');
         
          if($med->quantity>=request('quantity')){
            $new=$med->quantity -request('quantity');
          $updating=DB::table('pharmacies')->where('medname',request('medname'))->update([ 'quantity'=>$new ,'counter'=>$med->counter+request('quantity')]);
          $data->parcode=$q;
          $data->quantity=request('quantity');
          
          $data->cost=request('cost');
          $data->all=request('cost') * request('quantity');
          $data->date=$to;
          $data->medname=request('medname');
          $data->mid=$mid;
         $created= $data->save();

         if($created){
          $min=Important::where('medname',request('medname'))->value('min');
          if($min>=$new)
          {
           
           
             $med=Informations::all()->where('parcode',$q)->toArray();
      
            return view('/sells.info',['qq'=>$qq,'all'=>$all,'to'=>$to,'medname'=>$medname],compact('med'))->with('msg',"The quantity of this medicine will be end!");
          }
          else{
            $med=Informations::all()->where('parcode',$q)->toArray();
            return view('/sells.info',['qq'=>$qq,'all'=>$all,'to'=>$to,'medname'=>$medname],compact('med'));
          }
         }
         else{
           return redirect('/sells.add')->with('msg','There is an Error , Please register again!');  
         }
        
        
    }
          else{
          

         $alt=Informations::all()->where('parcode',$q);
          if(count($alt)>0)
          {
            foreach($alt as $row){
                  
             $result=Informations::all()->where('physical_name',$row['physical_name'])->toArray();
             $store=Pharmacy::get();
              return view('/sells.showAlt',compact( 'result','store'));
             }

          }
        }
         
         
        
    }


    //
    public function parcode(Request $r)
    {
       $data=$r->parcode;
        $sell=Enters::where('parcode',$data)->orderBy('end_date')->first();
        $mid=Informations::where('parcode',$data)->get('need_a_prescription')->first();
       $cost=Cost::where('parcode',$data)->first();
      
       
           if($mid->need_a_prescription == false)
           {
            $msg='';
            return view('/sells.add',compact('sell','cost','mid'));
          
           }
           elseif($mid->need_a_prescription== true)
           {
               $msg='Need a Prescripation!';
            return view('/sells.add',compact('sell','cost','mid'))->with('msg',"The information not correct!");
           }
           
            else{
                return view('sells.parcode');
           }
        
        
    }


    
    public function show(Request $r)
    {
      
         $sell=Sells::all()->toArray();
       
          return view('/sells.show',compact('sell'))->with('msg','The quantity of this medicine will be ended');
        
    }

    public function alternative(Request $r,$parcode)
    {
        $sell=Enters::where('parcode',$parcode)->orderBy('end_date')->first();
       
        // $mid=Medicine::where('parcode',request('parcode'))->value('id');
        $cost=Cost::where('parcode',$parcode)->first();
            if($sell)
            {
             return view('/sells.add',compact('sell','cost'));
           
            }
            
             else{
                 return view('sells.showAlt');
            }
    }

    public function allCust()
    {
        $custs=CustMedicines::all()->toArray();
        return view('/sells.allCust',compact('custs'));
    }

    public function custSale(Request $r,$medname)
    {
      $data= CustMedicines::find($medname);
      $object=CustMedicines::where('medname',$medname)->first();
      $cname=CustMedicines::where('medname',$medname)->value('cname');
      $medname=CustMedicines::where('medname',$medname)->value('medname');
      $cost=Cost::where('medname',$medname)->first();
      $msg='';
      return view('/sells.addCust',compact('object','cost','msg'))->with($cname,$medname);
     
    }


    //stor for customer
    public function storeCust(Request $r)
    {
          $data=new CustBells();
          $store=new Pharmacy();
          $q=Pharmacy::where('medname',request('medname'))->value('parcode');
          $q1=Pharmacy::where('medname',request('medname'))->value('quantity');
          $med=Pharmacy::where('medname',request('medname'))->first();
          $quantity=$med->quantity;
         
          $mid=Enters::where('medname',request('medname'))->value('id');
          $cid=Customers::where('cname',request('cname'))->value('id');
         // $medname=Medicine::where('parcode',request('parcode'))->value('commerce_name');
          $to=now()->toDateString('y-m-d');
          if($med->quantity>=request('quantity')){
          $updating=DB::table('pharmacies')->where('medname',request('medname'))->update([ 'quantity'=> $med->quantity -request('quantity'),'counter'=>$med->counter+request('quantity')]);
          $data->parcode=$q;
          $data->quantity=request('quantity');
          $data->cost=request('cost');
          $data->all=request('cost') * request('quantity');
          $data->date=$to;
          $data->medname=request('medname');
          $data->cname=request('cname');
          $data->next=request('next');
          $data->mid=$mid;
          $data->cid=$cid;
         $created= $data->save();

         if($created){
          
            return redirect()->route('show_cust_bell');
         }
         else{
           return redirect('/sells.addCust')->with('msg','There is an Error , Please register again!');  
         }
        
        
    }
          else{
          $msg='There is no quantiyt for this medicine!';
            return view('/sells.addCust',compact('msg')); 
        }
         
         
        
    }

    public function bellCust()
    {
        $bell=CustBells::all()->toArray();
        return view('/sells.showCustBell',compact('bell'));
    }

    public function end()
    {
      $enDate=Enters::all()->toArray();
      $end="false";
      foreach($enDate as $row)
      {
           $time=strtotime($row['end_date']);
           $month=date('M',$time);
           $next=now()->addMonth()->format('M');
           $now=now()->format('M');
           if($month == $now || $month == $next)
           {
               $end="true"; 
      }
     }
     if($end=="true")
     {
       return redirect('/sells.main')->with('end',"The end of date medicine will be end in next month!");
     }
      return redirect('/sells.main');
    }

    public function info()
    {
      
      $med=Informations::all()->toArray();
      
      return view('/tt',compact('med'));
    }
    public function ret()
    {
      
    
      return view('/sells.main');
    }
     
}

<?php

namespace App\Http\Controllers;

use App\Models\Bells;
use Illuminate\Support\Facades\DB;
use App\Models\Buy;
use App\Models\Enters;
use App\Models\Informations;
use App\Models\Medicine;
use App\Models\Pharmacy;
use Illuminate\Http\Request;

class buyController extends Controller
{
    //
    public function store(Request $r)
    {
          $data=new Enters();
          $bell=new Bells();
          $store=new Pharmacy();
          $q1=Pharmacy::where('parcode',request('parcode'));
          $q=Pharmacy::where('parcode',request('parcode'))->value('quantity');
          $mid=Informations::where('parcode',request('parcode'))->value('id');
          $medname=Informations::where('parcode',request('parcode'))->value('commerce_name');
          $to=now()->toDateString('y-m-d');
         
          if($q1){
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
           // $display=array('cname'=> $username);
            $buy=Buy::all()->toArray();
          //  return view('/pharmacy.show',compact('store'));
            return redirect('buy.main')->with( $buy);
         }
         else{
           return redirect('/buy.add')->with('msg','There is an Error , Please register again!');  
         }
        }
          else{
          
            return redirect('/buy.add')->with('msg','There is an Error , Please Enter The information of medicine befor add it!');
             }
            
          }
         
        
        
    
    

    public function show(Request $r)
    {
      
         $buy=Enters::all()->toArray();
         return view('/buy.show',compact('buy'));
    }

    public function bell(Request $r)
    {
      $buy=Bells::all()->toArray();
         return view('/buy.bells',compact('buy'));
    }

    public function edit(Request $r,$id)
    {

        $data = Informations::find($id);
        $med=Informations::all()->where('id',$id)->toArray();
         return view('/buy.edit',compact('med'));

        
    }

        
public function update(Request $r,$parcode)
{
    $medicins=new Informations();
    $med=Informations::where('parcode',$parcode)->value('section_name');
    $med0=Informations::where('parcode',$parcode)->value('commerce_name');
    $med1=Informations::where('parcode',$parcode)->value('need_a_prescription');
    $med2=Informations::where('parcode',$parcode)->value('company_name');
    $med3=Informations::where('parcode',$parcode)->value('chemical_composition');
    $med4=Informations::where('parcode',$parcode)->value('diseases');
    $med5=Informations::where('parcode',$parcode)->value('type');
    $med6=Informations::where('parcode',$parcode)->value('sid');
    $med7=Informations::where('parcode',$parcode)->value('degree');
    $med8=Informations::where('parcode',$parcode)->value('physical_name');
   // $medicins->section_id=request('section_id');
    $medicins->section_name=$med;
    $medicins->parcode=request('parcode');
    $medicins->physical_name=$med8;
    $medicins->commerce_name=$med0;
    //$medicins->buy_date=request('buy_date');
    $medicins->end_date=request('end_date');
    $medicins->cost=request('cost');
    $medicins->type=$med5;
    $medicins->degree=$med7;
    //$medicins->quantity=request('quantity');
    $medicins->company_name=$med2;
    $medicins->need_a_prescription=$med1;
    //$medicins->forbiddin_to_exchange=request('forbiddin_to_exchange');
    $medicins->chemical_composition=$med3;
    $medicins->diseases=$med4;
    $medicins->sid=$med6;
    error_log($medicins);
    $medicins->save();
    return redirect('/medicine.show');


  
}


}

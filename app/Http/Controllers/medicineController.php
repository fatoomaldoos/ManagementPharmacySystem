<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\hasFile;
use App\Models\deleteMedicines;
use App\Models\EndDate;
use App\Models\Enters;
use App\Models\Informations;
use App\Models\Medicine;
use App\Models\Pharmacy;
use App\Models\Sections;
use Illuminate\Http\Request;

class medicineController extends Controller
{
    //
    
    public function store(Request $r)
    {
// image 
if($r->hasFile('image'))
{
    $filenamewithExt=$r->file('image')->getClientOriginalName();
    $filename=pathinfo( $filenamewithExt,PATHINFO_FILENAME);
    $extension=$r->file('image')->getClientOriginalExtension();
    $filenameToStore=$filename.'_'.time().'.'.$extension;
    $path=$r->file('image')->storeAs('public/image',$filenameToStore);
  // $filenamewithExt->move('/storage/image',$filenameToStore);
}
$medicins=new Informations();
$store=new Pharmacy();
$medicins->section_name=request('section_name');
$medicins->parcode=request('parcode');
$medicins->physical_name=request('physical_name');
$medicins->commerce_name=request('commerce_name');
$medicins->type=request('type');
$medicins->degree=request('degree');
$medicins->company_name=request('company_name');
$medicins->need_a_prescription=request('need_a_prescription');
$medicins->chemical_composition=request('chemical_composition');
$medicins->diseases=request('diseases');
$medicins->image=$filenameToStore;
$sid=Sections::where('sname',request('section_name'))->value('id');
$medicins->sid=$sid;
$medicins->save();
// error_log($medicins);
$store->parcode= request('parcode');
$store->quantity=0;
$store->counter=0;
$store->medname=request('commerce_name');
$mid=Informations::where('parcode',request('parcode'))->value('id');
$store->mid=$mid;
$created= $store->save();
if($created)
{
   $med=Informations::all()->toArray();

   return redirect('/medicine.show')->with('addCost','This medicine must be add to costing system');
     
}
 $med=Informations::all()->toArray();

return redirect('/medicine.show');
    }

    
public function remove(Request $r)
{
   $parcode=$r->parcode;
  
   $med=Enters::all()->where('parcode',$parcode)->toArray();
        if(count($med)>0)
        {
          foreach($med as $row){
           $delete=new deleteMedicines();
           $data= Enters::find($row['id']);
           $delete->parcode=$row['parcode'];
           $delete->name=$row['medname'];
           $delete->resone="order";
           $delete->edate=$row['end_date'];
           $delete->save();
           
           $store=Pharmacy::where('medname',$row['medname'])->first();
           $updating=DB::table('pharmacies')->where('parcode',$row['parcode'])->update([ 'quantity'=> $store->quantity -$row['quantity']]);
           if( $store->quantity <$row['quantity'])
           {
              $updating=DB::table('pharmacies')->where('parcode',$row['parcode'])->update([ 'quantity'=> 0]);
            
           }
       
            $data->delete();

          }
        return redirect('/mainPageA');
       }
        else{
           return redirect('/medicine.parcodeForDelete')->with('msg',"The information not correct!");
        }
       }
       public function infoRemove(Request $r)
{
   $parcode=$r->parcode;
  
   $med=Informations::all()->where('parcode',$parcode)->toArray();
        if(count($med)>0)
        {
          foreach($med as $row){
          
           $data= Informations::find($row['id']);
           $store=Pharmacy::where('medname',$row['commerce_name'])->first();
          
            $data->delete();

          }
        return redirect('/medicine.show');
       }
        else{
           return redirect('/medicine.infoDelete')->with('msg',"The information not correct!");
        }
       }

        //find the Alternative
     
     public function alternative(Request $r)
     {
        $data=$r->physical_name;
        // $session=Medicines::find($data); 
        // $data=request('commerce_name');

         $alt=Informations::all()->where('physical_name',$data);
            // if(count($med)>0)
            // {
                // foreach($med as $row){
                     
                // $alt=Medicine::all()->where('physical_name',$row['physical_name'])->toArray();
               
                 return view('/medicine.showAlt',compact( 'alt'));
                // }
            // }
             //else{
              //  return redirect('/medicine.findAlternative')->with('msg',"The information not correct!");
            // }
         
     }

     public function show(Request $r)
     {
       
          $med=Informations::all()->toArray();
          $sec=Informations::all()->toArray();
          return view('/medicine.show',compact('med','sec'));
     }

     public function showDeleted(Request $r)
     {
       
          $med=deleteMedicines::all()->toArray();
          return view('/medicine.medicineDeleted',compact('med'));
     }

     public function end(Request $r)
     {
       
          $med=EndDate::all()->toArray();
          return view('/medicine.showDate',compact('med'));
     }

     public function main(Request $r)
     {
        
          $sections=Sections::get();
          return view('/medicine.medicinesPage',compact('sections'));
     }

    
}

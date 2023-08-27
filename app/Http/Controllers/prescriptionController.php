<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Prescription;
use Illuminate\Http\Request;

class prescriptionController extends Controller
{
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

        $data=new Prescription();
       //save to database
        $data->pname=request('pname');
       
        $data->dname=request('dname');
       
        $data->image=$filenameToStore;
      

       $created= $data->save();
       if($created){
        return redirect()->route('image');
       // return redirect('/prescription.show');
       }
       else{
         return redirect('/prescription.add')->with('msg','There is an Error , Please register again!');  
       }
    }

    public function show()
    {
       
         $pre=Prescription::all()->toArray();
         return view('Prescription.show',compact('pre'));
    }

    public function delete(Request $r)
    {
        $username=$r->session()->get('uname');
        $emp=Employees::where('uname',$username)->get(['type']);
        if(count($emp)>0)
        {
            foreach($emp as $row)
            {
        if($row->type=="admin"){
         $pre=Prescription::all()->toArray();
         return view('Prescription.delete',compact('pre'));
        }  
           
        
    }

}
return redirect('/empty');
    }
    public function remove(Request $r,$id)
    {
        $data= Prescription::find($id);
      
       
       $deleted=$data->delete();
        
       if($deleted)
       {
           return redirect('/prescription.delete');
       }
       else{
        return redirect('/prescription.delete')->with('msg',"There is an error!");
       }
    }
  
    }


<?php

namespace App\Http\Controllers;

use App\Models\Informations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Sections;

class sectionController extends Controller
{
    //
     //store into database
     public function store(Request $r)
     {

         $data=new Sections();
         $username=$r->session()->get('uname');
         $id= $r->session()->get('id');
         
         $data->sname=request('sname');
         $data->place=request('Place');
        $created= $data->save();
        if($created){
         return redirect('/section.order');
        }
        else{
          return redirect('/section.addSection')->with('msg','There is an Error , Please register again!');  
        }
     }

     public function showAll(Request $r)
     {
         $username=$r->session()->get('uname');
         $display=array('uname'=> $username);
          $sec=Sections::all()->toArray();
          $med=Informations::all()->toArray();
          return view('/section.show',compact('sec','med'))->with($display);
     }
     public function showToEdit()
     {
        $sec=Sections::all()->toArray();
        return view('/section.showToEdit',compact('sec'));
     }

     
     public function edit(Request $r)
     {
 
         $username=$r->session()->get('uname');
         $data = Sections::where('id')->get();
        //$id=$r->session()->get('id');
        $id=Sections::where('id',request('id'))->value('id');
        
         // $display=array('uname'=> $username,'id'=>$id);
          $sec=Sections::all()->where('id',$id)->toArray();
          return view('/section.edit',compact('sec'));
 
     }
     public function update(Request $r, $id)
     {
         
         $updating=DB::table('sections')->where('id',$id)->update([ 'sname'=>request('sname'),
         
         'Place'=>request('Place')
         
        
     ]);
       if($updating)
       {
         return redirect('/section.show');
       }
       else{
         return redirect('/section.show')->with('msg',"There is an error!");
       }
        
     }

     public function showToDelete()
     {
        $sec=Sections::all()->toArray();
        return view('/section.delete',compact('sec'));
     }
     public function remove(Request $r,$id)
     {
         $data= Sections::find($id);
         $username=$r->session()->get('uname');
         
        $deleted=$data->delete();
         
        if($deleted)
        {
            return redirect('/section.show');
        }
        else{
         return redirect('/section.show')->with('msg',"There is an error!");
        }
     }

     
public function index()
{
    $section=Sections::all();
    return view('medicine.add', ['sections'=>$section]);
}



}

<?php

namespace App\Http\Controllers;

use App\Models\Companys;
use App\Models\Informations;
use App\Models\Sections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class settingController extends Controller
{

    public function index()
{
    $com=DB::table('informations')->distinct()->pluck('company_name');
    return view('company.place', ['com'=>$com]);
}
    //store company
    public function addCompany(Request $r)
    {
        
        $data=new Companys();
      
        $data->name=request('name');
        $data->place=request('place');
       $created= $data->save();
       if($created){
        return redirect('/company.show');
       }
       else{
         return redirect('/company.place')->with('msg','There is an Error , Please register again!');  
       }
    }

    public function showCompany()
    {
        $com=Companys::all()->toArray();
        $med=Informations::all()->toArray();
        return view('/company.show',compact('com','med'));
    }
    public function showSection()
    {
        $sec=Sections::all()->toArray();
        $med=Informations::all()->toArray();
        return view('/section.order',compact('sec','med'));
    }
}

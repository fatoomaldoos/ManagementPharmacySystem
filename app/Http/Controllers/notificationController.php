<?php

namespace App\Http\Controllers;

use App\Models\Alerts;
use App\Models\EndDate;
use App\Models\Enters;
use App\Models\Notes;
use App\Models\NotificationOrders;
use App\Models\Ones;
use App\Models\Pharmacy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class notificationController extends Controller
{
    //
    public function store()
    {
        $data=new NotificationOrders();

        $data->counter="null";



       $created= $data->save();
       if($created){

        $note=NotificationOrders::all()->toArray();
        return view('/distributors.welcomDist',compact('note'));
       }

    }
    public function distMain()
    {

         $note=NotificationOrders::all()->toArray();
         return view('/distributors.welcomDist',compact('note'));
    }
    public function custMain(Request $r)
    {
     $username=$r->session()->get('cname');

     $display=array('cname'=> $username);
     $note=DB::table('ones')->distinct()->get();
         return view('/customers.welcome',['username',$username],compact('note'));
    }
    public function empMain()
    {


         return view('/mainPageA');
    }

    public function noteDone(Request $r)
    {
     $username=$r->session()->get('uname');
     $updating=DB::table('alerts')->update([ 'ncounter'=>"0"

     ]);
     $display=array('uname'=> $username);
     $nots=Notes::all()->toArray();
     $note=Alerts::get()->first();
     return view('/employee.note&comment',compact('nots','note'))->with($display);
    }

}

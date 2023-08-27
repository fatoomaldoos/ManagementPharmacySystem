<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distributors;
use App\Models\Orders;
use App\Models\Employees;
use App\Models\NotificationOrders;
use Illuminate\Support\Facades\DB; 

class ordersController extends Controller
{
    //show dstributors to send orders
    public function showAllDist(Request $r)
    {
         $distributors=Distributors::all()->toArray();
         return view('/order.distAll',compact('distributors'));
    }

    public function send(Request $r)
    {
        
       
        $username=$r->session()->get('uname');
        
        $display=array('uname'=> $username);
        
       
        
        return view('/order.orderPage')->with($display);
        
       
       
    }

     //store into database
     public function store(Request $r)
     {

        $to=now()->toDateString('y-m-d');
         $data=new Orders();
         $username=$r->session()->get('uname');
         $id= $r->session()->get('id');
          $datau=Employees::where('uname', $username)->get();
         $data->uid=$id;
         $data->date=$to;
         $data->uname= $username;
         $data->quantity=request('quantity');
         $data->medname=request('medname');
         // $data->dname=$distname;
        $created= $data->save();
        if($created){
         return redirect('/order.showOrder');
        }
        else{
          return redirect('/order.orderPage')->with('msg','There is an Error , Please register again!');  
        }
     }

     public function showAll(Request $r)
     {
         $username=$r->session()->get('uname');
         $display=array('uname'=> $username);
          $orders=Orders::all()->toArray();
          return view('/order.showOrder',compact('orders'))->with($display);
     }

     public function messageDist(Request $r)
     {
         $username=$r->session()->get('uname');
         $display=array('uname'=> $username);
         $orders=Orders::all()->where('dname',$username)->toArray();

         $updating=DB::table('notifications')->update([ 'counter'=>"0"
     
         ]);
         $note=NotificationOrders::all()->toArray();
         return view('/order.orderSent',compact('orders','note'))->with($display);
           
     }
}

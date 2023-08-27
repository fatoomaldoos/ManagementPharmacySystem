<?php

namespace App\Http\Controllers;

use App\Models\Alerts;
use App\Models\Cost;
use App\Models\DChats;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Employees;
use App\Models\Distributors;
use App\Models\Enters;

class distributorsController extends Controller
{
    //confirm employee

    public function confirm(Request $r)
    {
    
        $password=$r->password;
      
        $session = Employees::where('password',  $password)->get();
        if(count($session)>0)
        {
         
            return view('/distributors.distCreateAccount');
        }
        else{
            return redirect('/distributors.confirmEmployee')->with('msg',"The password not correct!");
        }
    
    return redirect('/distributors.confirmEmployee')->with('msg',"The password not correct!");
    }

     //store into database
     public function store()
     {
         $data=new Distributors();
        
         $data->uname=request('uname');
        
         $data->number=request('number');
        
         $data->password=request('password');
       
 
        $created= $data->save();
        if($created){
       
         return redirect('/distributors.distSignIn');
        }
        else{
          return redirect('/distributors.distCreateAccount')->with('msg','There is an Error , Please register again!');  
        }
     }
     public function check_user(Request $r)
     {
         
         $username=$r->uname;
         $password=$r->password;
       
         $session = Distributors::where('uname', $username)->where('password',  $password)->get();
         if(count($session)>0)
         {
            
             $r->session()->put('uname',$session[0]->uname);
             $r->session()->put('id',$session[0]->type);
            // $r->session()->put('type',$session[0]->type);
            
             return redirect()->route('distributors')->with('suc','');
         }
         else{
            return redirect('/distributors.distSignIn')->with('msg',"The information not correct!");
         }
     }
     public function show(Request $r)
     {
         
         $username=$r->session()->get('uname');
      
        // $data=Employee::find()->where('uname',$username )->get();
         
       
         $display=array('uname'=> $username);
         $distributors=Distributors::all()->where('uname',$username)->toArray();
         return view('/distributors.distProfile',compact('distributors'))->with($display);
     }

     public function edit(Request $r)
     {
 
         $username=$r->session()->get('uname');
         $data = Distributors::find($username);
        $id=$r->session()->get('id');
         $number=$r->session()->get('number');
         $password=$r->session()->get('password');
        
          $display=array('uname'=> $username,'id'=>$id);
          $distributors=Distributors::all()->where('uname',$username)->toArray();
          return view('/distributors.distEdit',compact('distributors'))->with($display);
 
     }
     public function update(Request $r, $id)
     {
         
         $updating=DB::table('distributors')->where('id',$id)->update([ 'uname'=>request('uname'),
         
         'number'=>request('number'),
         
         'password'=>request('password')
     ]);
       if($updating)
       {
         return redirect('/distributors.distProfile');
       }
       else{
         return redirect('/distributors.distEdit')->with('msg',"There is an error!");
       }
        
     }


    public function showdel(Request $r)
    {
        
        $username=$r->session()->get('uname');
     
       // $data=Employee::find()->where('uname',$username )->get();
        
      
        $display=array('uname'=> $username);
        $distributors=Distributors::all()->where('uname',$username)->toArray();
        return view('/distributors.distDelete',compact('distributors'))->with($display);
    }
    public function remove(Request $r,$id)
    {
        $data= Distributors::find($id);
        $username=$r->session()->get('uname');
        
       $deleted=$data->delete();
        
       if($deleted)
       {
           return redirect('/distributors.startPageDist');
       }
       else{
        return redirect('/distributors.distDelete')->with('msg',"There is an error!");
       }
    }
    //show to delete
    public function showAlldel(Request $r)
    {
        
       // $username=$r->session()->get('uname');
     
       // $data=Employee::find()->where('uname',$username )->get();
        
      
       // $display=array('uname'=> $username);
        $distributors=Distributors::all()->toArray();
        return view('/all.eDeleteDist',compact('distributors'));
    }

    public function empDeleteDist(Request $r,$id)
    {
        $data= Distributors::find($id);
       // $username=$r->session()->get('uname');
        
       $deleted=$data->delete();
        
       if($deleted)
       {
           return redirect('/all.eDeleteDist');
       }
       else{
        return redirect('/all.eDeleteDist')->with('msg',"There is an error!");
       }
    }

    public function showDistMessage(Request $r)
    {
      $username=$r->session()->get('uname');
     // $data = DChats::find($username);
      $display=array('uname'=> $username);
      $on=$username;
      $distributors=DChats::all()->where('dname',$username)->toArray();
      $note=Alerts::get()->first();
      return view('/distributors.replayDist',['on'=>$on],compact('distributors','note'))->with($display);
    }

    public function distSend(Request $r)
    {
      $username=$r->session()->get('uname');
     // $data = DChats::find($username);
      $display=array('uname'=> $username);
      $on=$username;
     // $id=$r->session()->get('id');
      $data=new DChats();
      $uid=Employees::where('uname', request('uname'))->value('id');
      $did=Distributors::where('uname',$username)->value('id');
      if($uid)
      {
      $data->dname= $username;
      $data->uname=request('uname');
      $data->message=request('message');
      $data->uid=$uid;
      $data->did=$did;
     $created= $data->save();
     $updating=DB::table('alerts')->update([ 'dcounter'=>request('dcounter') ]);

     if($created){
     
       $display=array('uname'=> $username);
       $on=$username;
        $distributors=DChats::all()->where('dname',$username)->toArray();
        $note=Alerts::get()->first();
        return view('/distributors.replayDist',['on'=>$on],compact('distributors','note'))->with($display);
     }
     else{
     
       $display=array('uname'=> $username);
       $on=$username;
       $note=Alerts::get()->first();
       return view('/distributors.replayDist',['on'=>$on],compact('note'))->with('msg','There is an Error , Please register again!');  
     }
    }
    else
    {
        return redirect('/distributors.replayDist')->with('msg','There is an Error , Please register again!');  
    }
    }

    public function showFromDist(Request $r)
    {
      $distributors=DChats::all()->toArray();
      $updating=DB::table('alerts')->update([ 'dcounter'=>"0" ]);
      return view('/distributors.chatDist',compact('distributors'));
    }

    public function cost(Request $r)
    {
      $cost=Cost::where('medname',request('medname'))->value('cost');
      $parcode=Cost::where('medname',request('medname'))->value('parcode');
           $ratio=(request('add')/100) * ($cost/100)*100;
           $to=now()->toDateString('y-m-d');
          
         $updating=DB::table('cost_systems')->where('parcode',$parcode)->update([ 
       
        'medname'=>request('medname'),
        
        'parcode'=>$parcode,
      
        'add'=>request('add'),
       
        'date'=>$to,
        'cost'=>$ratio+$cost]);

      if($updating)
      {
        return redirect('/distributors.welcomDist')->with('suc',"the Cost was succesfully!");
      }
      else{
        return redirect('/distributors.update')->with('msg',"There is an error!");
      }
       
    }
}

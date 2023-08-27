<?php

namespace App\Http\Controllers;

use App\Models\Alerts;
use App\Models\CustMedicines;
use App\Models\CustMessage;
use App\Models\CustNodes;
use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\Employees;
use App\Models\Enters;
use App\Models\Informations;
use App\Models\Medicine;
use App\Models\Ones;
use App\Models\Remindes;
use Illuminate\Support\Facades\DB;

class customersController extends Controller
{
    //
      //store into database
      public function store()
      {
          $data=new Customers();
         
          $data->cname=request('cname');
         
          $data->number=request('number');
         
         
        
  
         $created= $data->save();
         if($created){
        
          return redirect('/customers.custAll')->with('suc','');
         }
         else{
           return redirect('/customers.add')->with('msg','There is an Error , Please register again!');  
         }
      }
      public function check_user(Request $r)
      {
          
        $username=$r->cname;
        $password=$r->password;
      
        $session = Customers::where('cname', $username)->where('password',  $password)->get();
        if(count($session)>0)
        {
           
            $r->session()->put('cname',$session[0]->cname);
            $r->session()->put('id',$session[0]->id);
           // $r->session()->put('type',$session[0]->type);
           
           return redirect()->route('customers');
        }
        else{
           return redirect('/customers.signIn')->with('msg',"The information not correct!");
        }
      }
      public function show(Request $r)
      {
          
           
        $username=$r->session()->get('cname');
      
        // $data=Employee::find()->where('uname',$username )->get();
         
       
         $display=array('cname'=> $username);
         $custs=Customers::all()->where('cname',$username)->toArray();
         return view('/customers.show',compact('custs'))->with($display);
      }
       //confirm employee

    public function confirm(Request $r)
    {
    
        $password=$r->password;
      
        $session = Employees::where('password',  $password)->get();
        if(count($session)>0)
        {
         
            return view('/customers.add');
        }
        else{
            return redirect('/customers.confirm')->with('msg',"The password not correct!");
        }
    
    return redirect('/customers.confirm')->with('msg',"The password not correct!");
    }

    
    public function edit(Request $r)
    {

       
         $custs=Customers::all()->where('id',request('id'))->toArray();
         return view('/customers.edit',compact('custs'));

    }
    public function update(Request $r, $id)
    {
        
        $updating=DB::table('customers')->where('id',$id)->update([ 'cname'=>request('cname'),
        
        'number'=>request('number')
    ]);
      if($updating)
      {
        return redirect('/customers.custAll');
      }
      else{
        return redirect('/customers.edit')->with('msg',"There is an error!");
      }
       
    }
    public function showdel(Request $r)
    {
        
        $username=$r->session()->get('cname');
     
       // $data=Employee::find()->where('uname',$username )->get();
        
      
        $display=array('cname'=> $username);
        $custs=Customers::all()->where('cname',$username)->toArray();
        return view('/customers.delete',compact('custs'))->with($display);
    }

    public function remove(Request $r,$id)
    {
        $data= Customers::find($id);
        $username=$r->session()->get('cname');
        
       $deleted=$data->delete();
        
       if($deleted)
       {
           return redirect('/customers.startPage');
       }
       else{
        return redirect('/customers.delete')->with('msg',"There is an error!");
       }
    }

    public function showCustMessage(Request $r)
    {
      $username=$r->session()->get('cname');
     // $data = DChats::find($username);
      $display=array('cname'=> $username);
      $custs=CustNodes::all()->where('cname',$username)->toArray();
      $note=Alerts::get()->first();
      return view('/customers.chat',compact('custs','note'))->with($display);
    }

    public function custSend(Request $r)
    {
      $username=$r->session()->get('cname');
    //  $id=$r->session()->get('id');
     // $id=$r->session()->get('id');
      $data=new CustNodes();
      $cid=Customers::where('cname',$username)->value('id');
      if($cid)
      {
      $data->cname= $username;
      $data->message=request('message');
      $data->cid=$cid;
     $created= $data->save();
     if($created){
        $display=array('cname'=> $username);
        $custs=CustNodes::all()->where('cname',$username)->toArray();
        $updating=DB::table('alerts')->update([ 'ucounter'=>request('ucounter')
     
        ]);
        $note=Alerts::get()->first();
        return view('/customers.chat',compact('custs','note'))->with($display);
     }
     else{
      $note=Alerts::get()->first();
       return redirect('/customers.chat',compact('note'))->with('msg','There is an Error , Please register again!');  
     }
    }
    else
    {
      $note=Alerts::get()->first();
        return redirect('/customers.chat',compact('note'))->with('msg','There is an Error , Please register again!');  
    }
    }

    public function addMed(Request $r)
    {
       // $username=$r->session()->get('cname');
        //  $id=$r->session()->get('id');
         // $id=$r->session()->get('id');
         $cust=new Ones();
          $data=new CustMedicines();

          $mid=Enters::where('medname',request('medname'))->value('id');
          $cid=Customers::where('cname',request('cname'))->value('id');
          
          $data->cname= request('cname');
          $data->medname=request('medname');
          $data->type=request('type');
          $data->period=request('period');
          
          $data->cid=$cid;
          $data->mid=$mid;
         $created= $data->save();
       
         
         if($created){
           // $display=array('cname'=> $username);
            $custs=CustMedicines::all()->toArray();
            return view('/customers.showAllMedicine',compact('custs'));
         }
         else{
           return redirect('/customers.addMedicine')->with('msg','There is an Error , Please register again!');  
         }
        
       
    }

    public function showMed(Request $r)
    {
        $username=$r->session()->get('cname');
        // $data = DChats::find($username);
         $display=array('cname'=> $username);
         $custs=CustMedicines::all()->where('cname',$username)->toArray();
         return view('/customers.showMedicine',compact('custs'))->with($display);
    }

    public function showAllCust()
    {
      $custs=Customers::all()->toArray();
      return view('/customers.custAll',compact('custs'));
    }

    public function empDeleteCust(Request $r,$id)
    {
      $data= Customers::find($id);
     // $username=$r->session()->get('cname');
      
     $deleted=$data->delete();
      
     if($deleted)
     {
         return redirect('/customers.custAll');
     }
     else{
      return redirect('/customers.custAll')->with('msg',"There is an error!");
     }
    }

    public function showAllMedicine()
    {
      $custs=CustMedicines::all()->toArray();
      return view('/customers.showAllMedicine',compact('custs'));
    }

    public function showAllMedToEdit()
    {
      $custs=CustMedicines::all()->toArray();
      return view('/customers.eEditmed',compact('custs'));
    }

    public function editMedicine(Request $r)
    {
     // $username=$r->session()->get('cname');
     $id=request(('id'));
      $data = CustMedicines::find($id);
    
     
       //$display=array('cname'=> $username,'id'=>$id);
       $custs=CustMedicines::all()->where('id',$id)->toArray();
       return view('/customers.editMedicine',compact('custs'));
    }

    public function updateMedicine(Request $r, $id)
    {
        
        $updating=DB::table('cust_medicines')->where('id',$id)->update([ 'cname'=>request('cname'),
        
        'medname'=>request('medname'),
        
        'type'=>request('type'),
        'period'=>request('period'),
        'cid'=>Customers::where('cname',request('cname'))->value('id'),
        'mid'=>Enters::where('medname',request('medname'))->value('id')
    ]);
      if($updating)
      {
        return redirect('/customers.showAllMedicine');
      }
      else{
        return redirect('/customers.showAllMedicine')->with('msg',"There is an error!");
      }
       
    }

    public function showMedDelete()
    {
      $custs=CustMedicines::all()->toArray();
      return view('/customers.empDeleteMed',compact('custs'));
    }

    public function removeMed(Request $r,$id)
    {
      $data= CustMedicines::find($id);
    //  $username=$r->session()->get('cname');
      
     $deleted=$data->delete();
      
     if($deleted)
     {
         return redirect('/customers.showAllMedicine');
     }
     else{
      return redirect('/customers.empDeleteMed')->with('msg',"There is an error!");
     }
    }

    public function custToemp()
    {
      $custs=CustNodes::all()->toArray();
      $updating=DB::table('alerts')->update([ 'ucounter'=>" 0"
     
      ]);
      $note=Alerts::all();
      return view('/customers.custToemp',compact('custs','note'));
    }

    public function remined()
    {
      $custs=Customers::all()->toArray();
      $note=Alerts::get()->first();
      return view('/customers.showToremined',compact('custs','note'));
    }

    public function goRemined(Request $r,$id)
    {
     
       $custs=Customers::all()->where('id',$id)->toArray();
       $display="this remined for your medicine..";
       $note=Alerts::get()->first();
       return view('/customers.remined',compact('custs','note'))->with($display);
    }

    public function storeRemined(Request $r)
    {
    
        $data=new Remindes();
        
        $cid=Customers::where('cname',request('cname'))->value('id');
        if($cid)
        {
        $data->cname= request('cname');
        $data->message=request('message');
        $data->cid=$cid;
       $created= $data->save();
       $cust=Ones::all();
       foreach($cust as $row)
       {
         if($row['cname']==request('cname')){
       $updating=DB::table('ones')->update([ 'counter'=>"new"
     
       ]);
         }
       }
       if($created){
         // $display=array('cname'=> $username);
         // $custs=CustNodes::all()->where('cname',$username)->toArray();
          return redirect('/customers.custAll');
       }
       else{
         return redirect('/customers.remined')->with('msg','There is an Error , Please register again!');  
       }
    }
  }

    public function allRemined()
    {
      $custs=Remindes::all()->toArray();
      return view('/customers.showRemined',compact('custs'));
    }

    public function inbox(Request $r)
    {
      $username=$r->session()->get('cname');
      
         $display=array('cname'=> $username);
         $custs=Remindes::all()->where('cname',$username)->toArray();
         $c=Ones::where('cname',$username)->get();
         foreach($c as $row)
         {
           if($row['cname']==$username)
           {
         $updating=DB::table('ones')->update([ 'counter'=>" "
     
       ]);}
         }
       $note=DB::table('ones')->distinct()->get;
         return view('/customers.inbox',['username',$username],compact('custs','note'))->with($display);
    }
  }


 


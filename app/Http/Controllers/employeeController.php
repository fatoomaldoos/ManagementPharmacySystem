<?php

namespace App\Http\Controllers;

use App\Models\Alerts;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Employees;
use App\Models\Notes;
class employeeController extends Controller
{
    public function store(Request $r)
    {
        $data=new Employees();
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

        $data->uname=request('uname');
        $data->number=request('number');
        $data->password=request('password');
        $data->ftime=request('ftime');
        $data->etime=request('etime');
        $data->type=request('type');
        $data->image=$filenameToStore;
       $created= $data->save();
       if($created){
       // $mail= array('uname'=>request('uname'), 'email'=>request('email'));
       // Mail::to(request('email'))->send(new SendEmails($mail));
       
        return redirect('/employee.signInPage')->with('suc','');
       }
       else{
         return redirect('/employee.createNewAccount')->with('msg','There is an Error , Please register again!');  
       }
    }

     //confirm admin
     public function confirm(Request $r)
     {
     
         $password=$r->password;
       
         $session = Employees::where('password',  $password)->get(['type']);
         if($password=="pink")
         {
            return view('/employee.createNewAccount');
         }
         else{
         if(count($session)>0)
         {
             foreach($session as $row)
             {
         if($row->type=="admin"  ){
             return view('/employee.createNewAccount');
         }
     }
     return redirect('/employee.confirm')->with('msg',"The password not correct!");
     }
       
             else{
                 return redirect('/employee.confirm')->with('msg',"The password not correct!");
             }
            }
     }

      //to sign in an check if informations are exist
    public function check_user(Request $r)
    {
        
        $username=$r->uname;
        $password=$r->password;
      
        $session = Employees::where('uname', $username)->where('password',  $password)->get();
        if(count($session)>0)
        {
           
            $r->session()->put('uname',$session[0]->uname);
            $r->session()->put('id',$session[0]->id);
            $r->session()->put('type',$session[0]->type);
           
            return redirect()->route('main');
            
        }
        else{
           return redirect('/employee.signInPage')->with('msg',"The information not correct!");
        }
    }

    public function show(Request $r)
    {
        
        $username=$r->session()->get('uname');
     
       // $data=Employee::find()->where('uname',$username )->get();
        
      
        $display=array('uname'=> $username);
        $employee=Employees::all()->where('uname',$username)->toArray();
        return view('/employee.profilePage',compact('employee'))->with($display);
    }


    public function showAll(Request $r)
    {
        $username=$r->session()->get('uname');
        $id=$r->session()->get('id');
        // $data=Employee::find()->where('uname',$username )->get();
         
       
         $display=array('uname'=> $username,'id'=>$id);

         $employee=Employees::all()->toArray();
         return view('/employee.allUser',compact('employee'))->with($display);
    }

    public function edit(Request $r,$id)
    {

       

        $username=$r->session()->get('uname');
        $data = Employees::find($id);
      // $id=$r->session()->get('id');
       
        $number=$r->session()->get('number');
        $password=$r->session()->get('password');
      
        $ftime=$r->session()->get('ftime');
        $etime=$r->session()->get('etime');
     
        
       
         $display=array('uname'=> $username,'id'=>$id);
         $emp=Employees::all()->where('id',$id)->toArray();
         return redirect('/employee.editUser',[$emp]);

    }

    public function toEdit(Request $r)
    {
        $username=$r->session()->get('uname');
       
        $data = Employees::find($username);
      
        $data = Employees::where('uname',  $username)->get(['type']);
        if(count($data)>0)
        {
            foreach($data as $row)
            {
        if($row->type=="admin"){
            $id=request('id');
            $display=array('uname'=> $username,'id'=>$id);
            $emp=Employees::where('id',$id)->first();
            return view('/employee.editUser',compact('emp'));
        }
    }
    return redirect('/employee.allUser')->with('msg',"There is an error!");
}
    }

    public function update(Request $r, $id)
    {
        if($r->hasFile('image'))
{
    $filenamewithExt=$r->file('image')->getClientOriginalName();
    $filename=pathinfo( $filenamewithExt,PATHINFO_FILENAME);
    $extension=$r->file('image')->getClientOriginalExtension();
    $filenameToStore=$filename.'_'.time().'.'.$extension;
    $path=$r->file('image')->storeAs('public/image',$filenameToStore);
  // $filenamewithExt->move('/storage/image',$filenameToStore);
}
else{
    $filenameToStore=Employees::where('id',$id)->value('image');
}
        $updating=DB::table('employees')->where('id',$id)->update([ 
       
        'uname'=>request('uname'),
        
        'number'=>request('number'),
      
        'password'=>request('password'),
       
        'ftime'=>request('ftime'),
        'etime'=>request('etime'),
    'image'=>$filenameToStore,
        'type'=>request('type')]);

      if($updating)
      {
        return redirect('/employee.allUser')->with('suc','The Update proccess eas successfuly');
      }
      else{
        return redirect('/employee.allUser')->with('msg',"There is an error!");
      }
       
    }

    public function check_deleteUser(Request $r,$id)
    {
        $username=$r->session()->get('uname');
       // $id=$r->session()->get('id');
        $data = Employees::find($username);
      
        $data = Employees::where('uname',  $username)->get(['type']);
        if(count($data)>0)
        {
            foreach($data as $row)
            {
        if($row->type=="admin"){
            $display=array('uname'=> $username,'id'=>$id);

            $employee=Employees::all()->where('id',$id)->toArray();
            return view('/employee.deleteUsers',compact('employee'))->with($display);
           // return view('/deleteUsers');
        }
    }
    return redirect('/employee.allUser')->with('msg',"This Page is allowed for admin only!");
    }
      
            else{
                return redirect('/employee.profilePage');
            }
       
    }

    public function remove(Request $r,$id)
    {
       // $data= Employees::find($id);
        $data=Employees::where('id',$id)->first();
        $username=$r->session()->get('uname');
        $emp= Employees::where('uname', $username)->get(['type']);
        if(count($emp)>0)
        {
            foreach($emp as $row)
            {
        if($row->type=="admin"){
            {
        if($data->id==$id)
        {
       $deleted=$data->delete();
        
       if($deleted)
       {
           return redirect('/employee.allUser');
       }
       else{
        return redirect('/employee.allUser')->with('msg',"There is an error!");
       }
    }
}
        }
  
    }
}
else{
    return redirect('/employee.allUser')->with('msg',"There is an error!");
}
    }

    //Note && Comment
    public function noteSend(Request $r)
    {
      $username=$r->session()->get('uname');
       $id= $r->session()->get('id');
       $to=now()->toDateString('y-m-d');
      $data=new Notes();
        
      $updating=DB::table('alerts')->update([ 'ncounter'=>request('ncounter')
     
        ]);
        $data->uname=$username;
     $data->uid=$id;
     $data->date=$to;
      $data->note=request('note');
     
     $created= $data->save();
     if($created){
        $note=Alerts::get()->first();
        $nots=Notes::all()->toArray();
      return view('/employee.note&comment',compact('note','nots'))->render();
     }
     else{
        $nots=Notes::all()->toArray();
        $note=Alerts::get()->first();
       return view('/employee.note&comment',compact('note','nots'))->with('msg','There is an Error , Please register again!')->render();  
     }
    }

    public function showNote(Request $r)
    {
      $username=$r->session()->get('uname');
    
      $display=array('uname'=> $username);
      $nots=Notes::all()->toArray();
      $note=Alerts::get()->first();
      return view('/employee.note&comment',compact('nots','note'))->with($display)->render();
     
    }

    public function first(Request $r)
    {
        $employee=Employees::all()->toArray();
        foreach($employee as $row)
        {
        if($row['type']=='admin')
        {
            return view('employee.startPage');
        }
    }
           return view('employee.first');

        
          
        }
        public function firstTime(Request $r)
        {
            if(request('confirm')=='pink')
            {
            return view('employee.startPage');
            }
            else{
                return view('employee.first');
            }
        }

        public function index($id)
        {
            $emp=Employees::where('id',$id)->first();
            return view('/index',compact('emp'));
        }
    
    

}

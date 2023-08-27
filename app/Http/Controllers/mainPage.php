<?php

namespace App\Http\Controllers;

use App\Models\CustBells;
use App\Models\CustMedicines;
use App\Models\Customers;
use App\Models\deleteMedicines;
use App\Models\Enters;
use App\Models\Informations;
use App\Models\Medicine;
use App\Models\Pharmacy;
use App\Models\Remindes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mainPage extends Controller
{
    //
    //Delete Medicine
    public function endMedicine()
    {
        $to=now()->toDateString('y-m-d');
        $med=Enters::where('end_date','=',$to)->get();
        $edate=Enters::where('end_date','=',$to)->value('end_date');
        $store=Pharmacy::all()->toArray();
        $count=count($med);
        if($count>0)
        {
            foreach($med as $row){
                $delete=new deleteMedicines();
                $data= Enters::find($row['id']);
                $delete->parcode=$row['parcode'];
                $delete->name=$row['medname'];
                $delete->resone="Date";
                $delete->edate=$edate;
                 $delete->save();
                 $med=Pharmacy::where('medname',$row['medname'])->first();
                 $updating=DB::table('pharmacies')->where('parcode',$row['parcode'])->update([ 'quantity'=> $med->quantity -$row['quantity']]);
                 if( $med->quantity <$row['quantity'])
                 {
                    $updating=DB::table('pharmacies')->where('parcode',$row['parcode'])->update([ 'quantity'=> 0]);
                  
                 }
                 $data->delete();
            }
            }

            //reminder
            $data1=new Remindes();
            
            $remined=CustBells::where('next','=',$to)->get();
            if($remined)
            {
                $custs=CustMedicines::all()->toArray();
                return  redirect('/sells.allCust')->with('msg',"Reverse medicine for a customers");
            }
        

        return redirect()->route('employee');
        
    }
    
}

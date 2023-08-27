<?php

namespace App\Http\Controllers;

use App\Models\Enters;
use App\Models\Informations;
use App\Models\Sells;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
class showController extends Controller
{
    //
     //confirm admin
     public function addDate(Request $r)
     {
     
         $date=$r->date;
       
         $sell=Sells::all()->where('date',$date)->toArray();
       
          return view('/show.showDate',['date'=>$date],compact('sell'))->with('date',$date);
        
       
       
     }

     public function showToday()
     {
        $date=now()->toDateString('y-m-d');
        $sell=Sells::all()->where('date',$date)->toArray();
       
        return view('/show.showToday',compact('sell'))->with('msg','The quantity of this medicine will be ended');
     }

     public function addDateB(Request $r)
     {
     
         $date=$r->date;
       
         $sell=Enters::all()->where('date',$date)->toArray();
       
          return view('/show.showDateB',['date'=>$date],compact('sell'))->with('msg','The quantity of this medicine will be ended');
        
       
       
     }

     public function showTodayB()
     {
        $date=now()->toDateString('y-m-d');
        $sell=Enters::all()->where('date',$date)->toArray();
       
        return view('/show.showTodayB',compact('sell'))->with('msg','The quantity of this medicine will be ended');
     }

     public function addYear(Request $r)
     {
     
         $now=$r->date;
         $date=now()->toDateString('y');
       
         $sell=Sells::all()->toArray();
       
          return view('/show.showYear',['now'=>$now],compact('sell'));
        
       
       
     }
     
     public function addYearB(Request $r)
     {
     
         $now=$r->date;
         
       
         $sell=Enters::all()->toArray();
       
          return view('/show.showYearB',['now'=>$now],compact('sell'));
        
       
       
     }

     public function addDateMin(Request $r)
     {
     
         $date=$r->date;
       
        
          $quantity=Sells::all()->where('date',$date)->toArray();
      
          $store=Sells::take(count($quantity))->where('date',$date)->orderBy('quantity')->get();
          $sec=Informations::all()->toArray();
          return view('/show.showDateMin',['date'=>$date],compact('store','sec'));
       
       
     }

     public function addDateMax(Request $r)
     {
     
         $date=$r->date;
       
        
          $quantity=Sells::all()->where('date',$date)->toArray();
      
          $store=Sells::take(count($quantity))->where('date',$date)->orderBy('quantity','DESC')->get();
          $sec=Informations::all()->toArray();
          return view('/show.showDateMax',['date'=>$date],compact('store','sec'));
       
       
     }

     public function addYearMin(Request $r)
     {
     
         $now=$r->date;
         
       
         $quantity=Sells::all()->toArray();
         $store=Sells::take(count($quantity))->orderBy('quantity')->get();
         $sec=Informations::all()->toArray();
       
          return view('/show.showYearMin',['now'=>$now],compact('store','sec'));
        
       
       
     }


     public function addYearMax(Request $r)
     {
     
         $now=$r->date;
         $quantity=Sells::all()->toArray();
         $store=Sells::take(count($quantity))->orderBy('quantity','DESC')->get();
         $sec=Informations::all()->toArray();
       
          return view('/show.showYearMax',['now'=>$now],compact('store','sec'));
        
     }

     public function showTodayMin()
     {
        $date=now()->toDateString('y-m-d');
        
          $quantity=Sells::all()->where('date',$date)->toArray();
          $store=Sells::take(count($quantity))->where('date',$date)->orderBy('quantity')->get();
          $sec=Informations::all()->toArray();
        
       
          return view('/show.showTodayMin',compact('store','sec'));
     }

     public function showTodayMax()
     {
        $date=now()->toDateString('y-m-d');
        
          $quantity=Sells::all()->where('date',$date)->toArray();
          $store=Sells::take(count($quantity))->where('date',$date)->orderBy('quantity','DESC')->get();
          $sec=Informations::all()->toArray();
        
       
          return view('/show.showTodayMax',compact('store','sec'));
     }
     public function exportTry()
     {
          $sell=Sells::get();
          return view('try',compact('sell'));
     }

    public  function dateSBDF(Request $r)
{
     
     $date=$r->date;
       
     $sell=Sells::all()->where('date',$date)->toArray();
   

$pdf=PDF::loadView('pdf.sDatePDF',compact('sell'))->setOptions(['defaultFont'=>'sans-serif']);


return $pdf->download('datePDF.pdf');

}


public  function dateMinPDF(Request $r)
{

     $date=$r->date;
       
        
          $quantity=Sells::all()->where('date',$date)->toArray();
      
          $store=Sells::take(count($quantity))->where('date',$date)->orderBy('quantity')->get();
          $sec=Informations::all()->toArray();
         

$pdf=PDF::loadView('pdf.minDatePDF',['date'=>$date],compact('store','sec'))->setOptions(['defaultFont'=>'sans-serif']);

return $pdf->download('bellPDF.pdf');

}

public  function dateMaxPDF(Request $r)
{
     
     $date=$r->date;
       
        
     $quantity=Sells::all()->where('date',$date)->toArray();
 
     $store=Sells::take(count($quantity))->where('date',$date)->orderBy('quantity','DESC')->get();
     $sec=Informations::all()->toArray();
 
$pdf=PDF::loadView('pdf.maxDatePDF',['date'=>$date],compact('store','sec'))->setOptions(['defaultFont'=>'sans-serif']);

return $pdf->download('bellPDF.pdf');

}
public  function datebPDF(Request $r)
{
     $date=$r->date;
       
     $sell=Enters::all()->where('date',$date)->toArray();
   

$pdf=PDF::loadView('pdf.bDatePDF',compact('sell'))->setOptions(['defaultFont'=>'sans-serif']);

return $pdf->download('bellPDF.pdf');




}





public  function todayminPDF(Request $r)
{
     $date=now()->toDateString('y-m-d');
        
     $quantity=Sells::all()->where('date',$date)->toArray();
     $store=Sells::take(count($quantity))->where('date',$date)->orderBy('quantity')->get();
     $sec=Informations::all()->toArray();

$pdf=PDF::loadView('pdf.minToday',compact('store','sec'))->setOptions(['defaultFont'=>'sans-serif']);


return $pdf->download('datePDF.pdf');




}
public  function todaymaxPDF(Request $r)
{

     $date=now()->toDateString('y-m-d');
        
     $quantity=Sells::all()->where('date',$date)->toArray();
     $store=Sells::take(count($quantity))->where('date',$date)->orderBy('quantity','DESC')->get();
     $sec=Informations::all()->toArray();
   

$pdf=PDF::loadView('pdf.maxToday',compact('store','sec'))->setOptions(['defaultFont'=>'sans-serif']);


return $pdf->download('datePDF.pdf');




}

public  function todaySBDF(Request $r)
{
     $date=now()->toDateString('y-m-d');
     $sell=Sells::all()->where('date',$date)->toArray();
    

$pdf=PDF::loadView('pdf.todaySBDF',compact('sell'))->setOptions(['defaultFont'=>'sans-serif']);


return $pdf->download('datePDF.pdf');




}
public  function todayBPDF(Request $r)
{
     $date=now()->toDateString('y-m-d');
     $sell=Enters::all()->where('date',$date)->toArray();
    
    

    

$pdf=PDF::loadView('pdf.todayBPDF',compact('sell'))->setOptions(['defaultFont'=>'sans-serif']);


return $pdf->download('datePDF.pdf');




}
public  function yearSBDF(Request $r)
{
     
   
     $now=$r->date;
     $date=now()->toDateString('y');
   
     $sell=Sells::all()->toArray();

$pdf=PDF::loadView('pdf.yearSPDF',['now'=>$now],compact('sell'))->setOptions(['defaultFont'=>'sans-serif']);


return $pdf->download('datePDF.pdf');




}

public  function yearbPDF(Request $r)
{
     $now=$r->date;  
     $sell=Enters::all()->toArray();
$pdf=PDF::loadView('pdf.yearSPDF',['now'=>$now],compact('sell'))->setOptions(['defaultFont'=>'sans-serif']);
return $pdf->download('datePDF.pdf');
}

public  function yearminPDF(Request $r)
{
     $now=$r->date;
         
       
     $quantity=Sells::all()->toArray();
     $store=Sells::take(count($quantity))->orderBy('quantity')->get();
     $sec=Informations::all()->toArray();
    

$pdf=PDF::loadView('pdf.minYear',['now'=>$now],compact('store','sec'))->setOptions(['defaultFont'=>'sans-serif']);


return $pdf->download('datePDF.pdf');




}

public  function yearmaxPDF(Request $r)
{
     $now=$r->date;
     $quantity=Sells::all()->toArray();
     $store=Sells::take(count($quantity))->orderBy('quantity','DESC')->get();
     $sec=Informations::all()->toArray();
   
   

$pdf=PDF::loadView('pdf.maxYear',['now'=>$now],compact('store','sec'))->setOptions(['defaultFont'=>'sans-serif']);


return $pdf->download('datePDF.pdf');




}


public function nav()
{
   $date=now()->toDateString('y-m-d');
   $sell=Sells::all()->toArray();
  
   return view('/nav',compact('sell'))->with('msg','The quantity of this medicine will be ended');
}

}

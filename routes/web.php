<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade as PDF;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('lang/{lang}',
 ['as' => 'lang.switch', 'uses' => 'LanguageContr@switchLang']);


Route::get('/', function () {
    return view('begin');

});
//Route::post('/language',array(
//    'befor'=>'csrf',
//    'as'=>'language-chooser',
//    'uses'=>'LanguageController@chooser'
//));
Route::get('/languageDemo', 'HomeController@languageDemo');
Route::get('/mainPage', 'mainPage@endMedicine')->name('main');

Route::get('/employee.createNewAccount',function () {
    return view('employee.createNewAccount');
});
Route::get('/employee.signInPage',function () {
    return view('employee.signInPage');
});

Route::get('/employee.deleteUser',function () {
    return view('employee.deleteUser');
});
Route::get('/employee.editUser',function () {
    return view('employee.editUser');
});
/*Route::get('/employee.note&comment',function () {
    return view('employee.note&comment');
});*/
Route::get('/employee.startPage','employeeController@first')->name('first');
Route::get('/employee.confirm',function () {
    return view('employee.confirm');
});
Route::get('/mainPageA','notificationController@empMain')->name('employee');
Route::get('/empty',function () {
    return view('/empty');
});
Route::get('/try',function () {
    return view('/try');
});
Route::get('/employee.editUser',function ($emp) {
    return view('/employee.editUser')->with('emp');
})->name('editEmp');

//employee

Route::post('/employee.first','employeeController@firstTime');
Route::post('/employee.createNewAccount','employeeController@store');
Route::post('/employee.confirm','employeeController@confirm');
Route::post('/employee.signInPage','employeeController@check_user');

Route::get('/employee.profilePage','employeeController@show');
Route::get('/employee.allUser','employeeController@showAll');
Route::get('/index/{id}','employeeController@index')->name('index');
Route::post('/employee.editUser','employeeController@toEdit');
Route::post('employee.toEditUser/{id}','employeeController@edit');
Route::post('employee.editUser/{id}','employeeController@update');

Route::get('employee.deleteUsers/{id}','employeeController@check_deleteUser');
Route::delete('employee.deleteUsers/{id}','employeeController@remove');

Route::get('/employee.note&comment','employeeController@showNote');
Route::post('/employee.note&comment','employeeController@noteSend');





//Distributors

Route::get('/distributors.welcomDist', 'distributorsController@show')->name('distributors');


Route::get('/distributors.startPageDist',function () {
    return view('/distributors.startPageDist');
});

Route::get('/distributors.confirmEmployee', function () {
    return view('distributors.confirmEmployee');
 });
 Route::get('/distributors.distSignIn', function () {
    return view('distributors.distSignIn');
 });

 Route::get('/distributors.update', function () {
    return view('distributors.update');
 });

 Route::post('/distributors.update','distributorsController@cost' );
 Route::get('/ distributors.distProfile', 'distributorsController@show');
Route::post('/distributors.confirmEmployee','distributorsController@confirm' );
Route::post('/distributors.distCreateAccount','distributorsController@store' );
Route::post('/distributors.distSignIn','distributorsController@check_user' );

Route::get('/distributors.distEdit','distributorsController@edit');
Route::post('/distributors.distEdit/{id}','distributorsController@update');

Route::get('/distributors.distDelete','distributorsController@showdel');
Route::delete('/distributors.distDelete/{id}','distributorsController@remove');

Route::get('all.eDeleteDist','distributorsController@showAlldel');

Route::delete('all.eDeleteDist/{id}','distributorsController@empDeleteDist');


//orders
Route::get('/order.orderPage', 'ordersController@send');
Route::get('order.distAll','ordersController@showAllDist');
Route::post('order.distAll/{id}','ordersController@send');
Route::post('order.orderPage','ordersController@store');
Route::get('order.showOrder','ordersController@showAll');
Route::get('order.orderSent','ordersController@messageDist');

// Distributors Chats
//Route::get('replayDist','chatController@showDistMessage');
Route::get('distributors.replayDist','distributorsController@showDistMessage');
Route::post('distributors.replayDist','distributorsController@distSend');

Route::get('distributors.chatDist','distributorsController@showFromDist');


//section
Route::get('/section.addSection',function () {
    return view('section.addSection');
});
Route::post('/section.addSection','sectionController@store');

Route::get('/section.show','sectionController@showAll');
Route::get('section.showToEdit','sectionController@showToEdit');
Route::post('section.showToEdit','sectionController@edit');
Route::post('section.edit/{id}','sectionController@update');

Route::get('section.delete','sectionController@showToDelete');
Route::delete('section.delete/{id}','sectionController@remove');


//Customers
Route::get('/customers.confirm',function () {
    return view('customers.confirm');
});
Route::get('/customers.signIn',function () {
    return view('customers.signIn');
});
Route::get('/customers.startPage',function () {
    return view('customers.startPage');
});
Route::get('/customers.welcome', 'notificationController@custMain')->name('customers');
Route::get('/customers.add',function () {
    return view('customers.add');
});
Route::get('/customers.show','customersController@show');

Route::post('/customers.confirm','customersController@confirm');

Route::post('customers.add','customersController@store');
Route::post('customers.signIn','customersController@check_user');

Route::post('/customers.editCust','customersController@edit');
Route::post('/customers.edit/{id}','customersController@update');

Route::get('/customers.delete','customersController@showdel');
Route::delete('/customers.delete/{id}','customersController@remove');

Route::get('customers.chat','customersController@showCustMessage');
Route::post('customers.chat','customersController@custSend');

Route::post('customers.addMedicine','customersController@addMed');
Route::get('customers.showMedicine','customersController@showMed');
Route::get('/customers.addMedicine',function () {
    return view('customers.addMedicine');
});
Route::get('/customers.addMedicine',function () {
    return view('customers.addMedicine');
});
Route::get('/customers.showAllMedicine','customersController@showAllMedicine');

Route::get('/customers.custAll','customersController@showAllCust');
Route::post('customers.custAll/{id}','customersController@empDeleteCust');

Route::get('/customers.eEditmed','customersController@showAllMedToEdit');
Route::post('/customers.eEditmed','customersController@editMedicine');

Route::post('/customers.editMedicine/{id}','customersController@updateMedicine');

Route::get('/customers.empDeleteMed','customersController@showMedDelete');
Route::delete('/customers.empDeleteMed/{id}','customersController@removeMed');
//Route::get('/customer.empDeleteMed','customersController@showMedDelete');

Route::get('/customers.custToemp','customersController@custToemp');

//Remined
Route::get('/customers.showToremined','customersController@remined');
Route::post('/customers.showToremined/{id}','customersController@goRemined');

Route::post('/customers.remined','customersController@storeRemined');

Route::get('/customers.showRemined','customersController@allRemined');
Route::get('/customers.inbox','customersController@inbox');

//Prescription
Route::get('/prescription.add',function () {
    return view('prescription.add');
});
Route::post('/prescription.add','prescriptionController@store');
Route::get('/prescription.show','prescriptionController@show')->name('image');
Route::get('/prescription.delete','prescriptionController@delete');
Route::delete('/prescription.delete/{id}','prescriptionController@remove');


//medicine
Route::get('/medicine.medicinesPage','medicineController@main');

Route::get('/medicine.parcodeForDelete',function () {
    return view('medicine.parcodeForDelete');
});
Route::get('/medicine.add','sectionController@index');
Route::post('/medicine.add','medicineController@store')->name('add_medicin');
Route::post('/medicine.parcodeForDelete','medicineController@remove');
Route::get('/medicine.show','medicineController@show')->name('show_medicine');
Route::get('/end','sellController@end');
Route::get('/medicine.showDate','medicineController@end');
Route::get('/medicine.findAlternative',function () {
    return view('/medicine.findAlternative');
 });
 Route::get('/medicine.infoDelete',function () {
    return view('/medicine.infoDelete');
 });
 Route::get('/medicine.medicineDeleted','medicineController@showDeleted');
 Route::post('/medicine.infoDelete','medicineController@infoRemove');
 Route::post('/medicine.findAlternative','medicineController@alternative');


//Pharmacy
Route::get('/pharmacy.add',function () {
    return view('pharmacy.add');
});
Route::post('/pharmacy.add','PharmacyController@store');
Route::get('/pharmacy.show','PharmacyController@show')->name('storage');
Route::get('/pharmacy.max','PharmacyController@max');
Route::get('/pharmacy.min','PharmacyController@min');

//buy
Route::get('/buy.add',function () {
    return view('buy.add');
});
Route::get('/buy.parcodeForBuy',function () {
    return view('buy..parcodeForBuy');
});
Route::post('/buy.add','buyController@store');

Route::get('/buy.show','buyController@show')->name('buy');
Route::get('/buy.bells','buyController@bell');

Route::get('/buy.main',function () {
    return view('buy.main');
});

//Cost

Route::get('/cost.add',function () {
    return view('cost.add');
});
Route::get('/cost.parcode',function () {
    return view('cost.parcode');
});
Route::get('/cost.parcodeEdit',function () {
    return view('cost..parcodeEdit');
});
Route::post('/cost.add','costController@store');
Route::get('/cost.show','costController@show')->name('cost');
Route::post('/cost.parcode','costController@parcode');
Route::post('/cost.parcodeEdit','costController@edit');
Route::post('/cost.edit/{id}','costController@update');


//sells
Route::get('/sells.main',function () {
    return view('sells.main');
});
Route::get('/sells.parcode',function () {
    return view('sells.parcode');
});
Route::get('/sells.add',function () {
    return view('sells.add');
});
Route::get('/sells.show','sellController@show')->name('show_sells');

Route::post('/sells.parcode','sellController@parcode');

Route::post('/sells.showAlt/{parcode}','sellController@alternative');
Route::post('/sells.add','sellController@store');

Route::get('/sells.allCust','sellController@allCust');
Route::post('/sells.allCust/{medname}','sellController@custSale');
Route::post('/sells.addCust','sellController@storeCust');

Route::get('/sells.showCustBell','sellController@bellCust')->name('show_cust_bell');
Route::get('/sells.info','sellController@info');
Route::post('/sells.info','sellController@ret');

//important
Route::get('/important.add',function () {
    return view('important.add');
});
Route::post('/important.add','importantController@store');
Route::get('/important.show','importantController@show')->name('show_imp');


//show
Route::get('/show.choose',function () {
    return view('show.choose');
});
Route::get('/show.addDate',function () {
    return view('show.addDate');
});
Route::get('/show.chooseSale',function () {
    return view('show.chooseSale');
});
Route::post('/show.addDate','showController@addDate');
Route::get('/show.showToday','showController@showToday');


Route::get('/show.addDateB',function () {
    return view('show.addDateB');
});
Route::get('/show.addDateMin',function () {
    return view('show.addDateMin');
});
Route::get('/show.addDateMax',function () {
    return view('show.addDateMax');
});
Route::get('/show.addYear',function () {
    return view('show.addYear');
});
Route::get('/show.addYearB',function () {
    return view('show.addYearB');
});
Route::get('/show.addYearMin',function () {
    return view('show.addYearMin');
});
Route::get('/show.addYearMax',function () {
    return view('show.addYearMax');
});
Route::get('/show.chooseBuy',function () {
    return view('show.chooseBuy');
});
Route::get('/show.chooseMin',function () {
    return view('show.chooseMin');
});
Route::get('/show.chooseMax',function () {
    return view('show.chooseMax');
});
Route::get('/try','showController@exportTry');
Route::post('/show.addDateB','showController@addDateB');
Route::post('/show.addDateMin','showController@addDateMin');
Route::post('/show.addDateMax','showController@addDateMax');
Route::get('/show.showTodayB','showController@showTodayB');
Route::post('/show.addYear','showController@addYear');
Route::post('/show.addYearB','showController@addYearB');
Route::post('/show.addYearMin','showController@addYearMin');
Route::post('/show.addYearMax','showController@addYearMax');
Route::get('/show.showTodayMin','showController@showTodayMin');
Route::get('/show.showTodayMax','showController@showTodayMax');

Route::get('/card','medicineController@show');



//pdf
Route::post('/pdf.sDatePDF','showController@dateSBDF');
Route::post('/pdf.yearSPDF','showController@yearSBDF');
Route::post('/pdf.todaySBDF','showController@todaySBDF');

Route::post('/pdf.bDatePDF','showController@datebPDF');
Route::post('/pdf.yearBPDF','showController@yearbPDF');
Route::post('/pdf.todayBPDF','showController@todayBPDF');
Route::post('/pdf.minToday','showController@todayminPDF');
Route::post('/pdf.maxToday','showController@todaymaxPDF');
Route::post('/pdf.minDatePDF','showController@dateMinPDF');
Route::post('/pdf.maxDatePDF','showController@dateMaxPDF');
Route::post('/pdf.minYear','showController@yearminPDF');
Route::post('/pdf.maxYear','showController@yearmaxPDF');


Route::get('/nav',function () {
    return view('nav');
});

//reverse
Route::get('/reverse.main',function () {
    return view('reverse.main');
});
Route::get('/reverse.add','reverseController@reverse');
Route::post('/reverse.add','reverseController@addDist');
Route::post('/reverse.reverse','reverseController@add');
Route::get('/reverse.show','reverseController@show')->name('add_rev');
Route::get('/reverse.showCust','reverseController@showCust')->name('cust_rev');

Route::get('/reverse.customers',function () {
    return view('reverse.customers');
});
Route::get('/reverse.addCust',function () {
    return view('reverse.addCust');
});
Route::post('/reverse.customers','reverseController@confirm');
Route::post('/reverse.addCust','reverseController@addCust');

//company
Route::get('/company.main',function () {
    return view('company.main');
});
Route::get('/company.place','settingController@index');
Route::post('/company.place','settingController@addCompany');

Route::get('/company.show','settingController@showCompany');
Route::get('/section.order','settingController@showSection');


//notification
Route::get('/noteDone','notificationController@noteDone');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

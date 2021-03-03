<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Mail\AppliSubmissionmail;
use Illuminate\Support\Facades\Mail; 

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/check', 'ApplicationFormController@Search');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
///////////////////////////////////////////////////////////////
//application form kiosk operator
Route::get('/Homepage', function () {
    return view('application_form/Homepage');
})->middleware('auth','check_CSC');

Route::get('/LIST', 'ApplicationFormController@show')->middleware('auth','check_CSC');
Route::get('/Homepage/ApplicationForm', 'ApplicationFormController@index')->middleware('auth','check_CSC');
Route::get('/ApplicationDetails/{id}', 'ApplicationFormController@display')->middleware('auth','check_CSC');
Route::get('/view', 'CheckController@show')->middleware('auth','check_CSC');
Route::post('/Homepage', 'ApplicationFormController@Store')->middleware('auth','check_CSC');

///////////////////////////////////////////////////////////////
//for forworder
Route::get('/Home_page', 'AfForwarderController@index')->middleware('auth','check_F');
Route::get('/Detail/{id}', 'AfForwarderController@show')->middleware('auth','check_F');
Route::get('/download1/{id}', 'AfForwarderController@download1');
Route::get('/download2/{id}', 'AfForwarderController@download2');
Route::post('/remarks/{id}', 'AfForwarderController@update')->middleware('auth','check_F');
Route::post('/Details/{id}', 'AfForwarderController@update1')->middleware('auth','check_F');

///////////////////////////////////////////////////////////////
//for ADC
Route::get('/List', 'AfOfficerController@index')->middleware('auth','check_ADC');
Route::get('/List/{id}', 'AfOfficerController@show')->middleware('auth','check_ADC');
Route::get('/download_1/{id}', 'AfOfficerController@download1')->middleware('auth','check_ADC');
Route::get('/download_2/{id}', 'AfOfficerController@download2')->middleware('auth','check_ADC');
Route::post('/remark/{id}', 'AfOfficerController@update')->middleware('auth','check_ADC');
Route::post('/Detail/{id}', 'AfOfficerController@update1')->middleware('auth','check_ADC');

//////////////////////////////////////////////////////////
//for check updates
Route::get('/search', 'CheckController@search')->middleware('auth','check_CSC');
Route::get('/check', 'CheckController@check');
///////////////////////////////////////////////////////////
//certificate
Route::get('/page/{id}','ApplicationFormController@mypdf' );
Route::get('/ilp/{id}', 'AfOfficerController@mypdf');
Route::get('/ilp1/{id}', 'AfOfficerController@mypdf1');
////////////////////////////////////////
//sms
route::get ('/sms','SMSController@Firstsms');


Route::get('/s', function () {
        return view('checkurStatus');
    });




/////////////////////////////////////////////
//for email

//Route::get('/email','ApplicationFormController@toMail' );
// Route::get('/email', function () {
//     Mail::to('email@email.com')->send(new AppliSubmissionmail());
//     return new AppliSubmissionmail();
// }); 

//////////////////////////////////////////////////////////
// Route::get('/form', function () {
//     return view('store');
// });
// Route::get('/test','fileController@show');
// Route::post('/test','fileController@store');

// Route::get('/show','filecontroller@show');
// Route::get('/show/{id}','filecontroller@download');
/////////////////////////////////////////////////////////

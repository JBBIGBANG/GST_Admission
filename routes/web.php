<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/loginform', function () {
    return view('login');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/studentdetails', function () {
    return view('studentdetails');
});
Route::get('/studentinformation', function () {
    return view('StudentInformation');
});
// Route::post('/subjectchoice', function () {
//     return view('subjectchoice');
// });
Route::post('/login','App\Http\Controllers\LoginController@checkdata');
Route::post('/subjectchoice/{appid}','App\Http\Controllers\LoginController@subjectchoice')->name('subjectchoice');
Route::post('/choice-list','App\Http\Controllers\SubjectChoiceListController@store');




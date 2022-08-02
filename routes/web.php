<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//profile route
Route::get('profile',function() { return view('profile');} );

//-----------------------------------------------------------------------------------------
//c/r/u/d

//application form menu
Route::get('/form/application', function () {
    return view('formview.applicationform');
});

//beneficiary
//c
Route::get('/form/beneficiary', function () {
    return view('formview.beneficiary');
});
Route::post('/form/beneficiary', [FormController::class, 'addBeneficiary']);
//r
Route::get('/form/beneficiary-v', function () {
    return view('formview-v.beneficiary');
});
//u
//d

//contributor
//c
Route::get('/form/contributor', function () {
    return view('formview.contributor');
});
Route::post('/form/contributor', [FormController::class, 'addContributor']);
//r
Route::get('/form/contributor-v', function () {
    return view('formview-v.contributor');
});
//u
//d

//volunteer
//c
Route::get('/form/volunteer', function () {
    return view('formview.volunteer');
});
Route::post('/form/volunteer', [FormController::class, 'addVolunteer']);
//r
Route::get('/form/volunteer-v', function () {
    return view('formview-v.volunteer');
});
//u
//d

//connector
//c
Route::get('/form/connector', function () {
    return view('formview.connector');
});
Route::post('/form/connector', [FormController::class, 'addConnector']);
//r
Route::get('/form/connector-v', function () {
    return view('formview-v.connector');
});
//u
//d

//-----------------------------------------------------------------------------------------
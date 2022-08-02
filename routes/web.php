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
Route::get('/form/beneficiary-view', [FormController::class, 'viewBeneficiary']);
//u
Route::get('/form/beneficiary-edit/{id}', [FormController::class, 'viewEditBeneficiary']);
Route::post('/form/beneficiary-edit/{id}', [FormController::class, 'editBeneficiary']);
//d
Route::get('/form/beneficiary-delete/{id}', [FormController::class, 'deleteBeneficiary']);

//contributor
//c
Route::get('/form/contributor', function () {
    return view('formview.contributor');
});
Route::post('/form/contributor', [FormController::class, 'addContributor']);
//r
Route::get('/form/contributor-view', [FormController::class, 'viewContributor']);
//u
Route::get('/form/contributor-edit/{id}', [FormController::class, 'viewEditContributor']);
Route::post('/form/contributor-edit/{id}', [FormController::class, 'editContributor']);
//d
Route::get('/form/contributor-delete/{id}', [FormController::class, 'deleteContributor']);

//volunteer
//c
Route::get('/form/volunteer', function () {
    return view('formview.volunteer');
});
Route::post('/form/volunteer', [FormController::class, 'addVolunteer']);
//r
Route::get('/form/volunteer-view', [FormController::class, 'viewVolunteer']);
//u
Route::get('/form/volunteer-edit/{id}', [FormController::class, 'viewEditVolunteer']);
Route::post('/form/volunteer-edit/{id}', [FormController::class, 'editVolunteer']);
//d
Route::get('/form/volunteer-delete/{id}', [FormController::class, 'deleteVolunteer']);

//connector
//c
Route::get('/form/connector', function () {
    return view('formview.connector');
});
Route::post('/form/connector', [FormController::class, 'addConnector']);
//r
Route::get('/form/connector-view', [FormController::class, 'viewConnector']);
//u
Route::get('/form/connector-edit/{id}', [FormController::class, 'viewEditConnector']);
Route::post('/form/connector-edit/{id}', [FormController::class, 'editConnector']);
//d
Route::get('/form/connector-delete/{id}', [FormController::class, 'deleteConnector']);


//-----------------------------------------------------------------------------------------
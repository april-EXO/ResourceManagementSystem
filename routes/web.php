<?php

use App\Http\Controllers\FormController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/form/application', function () {
    return view('formview.applicationform');
});

Route::get('/form/beneficiary', function () {
    return view('formview.beneficiary');
});

Route::post('/form/beneficiary', [FormController::class, 'addBeneficiary']);
Route::get('/form/beneficiary-v', function () {
    return view('formview-v.beneficiary');
});

Route::get('/form/contributor', function () {
    return view('formview.contributor');
});

Route::post('/form/contributor', [FormController::class, 'addContributor']);

Route::get('/form/volunteer', function () {
    return view('formview.volunteer');
});

Route::post('/form/volunteer', [FormController::class, 'addVolunteer']);

Route::get('/form/connector', function () {
    return view('formview.connector');
});

Route::post('/form/connector', [FormController::class, 'addConnector']);


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

Route::get('/form/beneficiary', function () {
    return view('formview.beneficiary');
});

Route::get('/form/contributor', function () {
    return view('formview.contributor');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/form/volunteer', function () {
    return view('formview.volunteer');
});

Route::get('/form/connector', function () {
    return view('formview.connector');
});


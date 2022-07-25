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
//aaabbb
Route::get('/', function () {
    return view('welcome');
});

Route::get('/form/benificiary', function () {
    return view('formview.benificiary');
});

Route::get('/form/contributor', function () {
    return view('formview.contributor');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\UserController;
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

//adminpage
// Route::get('/admin', function() {
// 	return view('adminpage');
// });

Route::get('/admin', [RequestController::class, 'viewApplicationAdmin']);

//profile route
Route::get('profile', [UserController::class, 'viewProfile']);

//donate
Route::get('donate', function () {
	return view('donate.main');
});

Route::get('donate/self', function () {
	return view('donate.self');
});

Route::get('donate/shop', function () {
	return view('donate.shop');
});


Route::get('/beneficiary-application', function () {
	return view('beneficiary-application');
});

Route::post('/beneficiary-application', [RequestController::class, 'addApplication']);


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

// Route::get('/', function () {
// 	return view('welcome');
// });
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

//beneficiary profile edit place
Route::get('/beneficiary-profile',[UserController::class, 'beneficiaryProfile']);
Route::post('/beneficiaryProfile/editBasicInfo', [UserController::class, 'editBasicInfo']);
Route::post('/beneficiaryProfile/editAddress', [UserController::class, 'editAddress']);
Route::post('/beneficiaryProfile/editVisitHour', [UserController::class, 'editVisitHour']);
Route::post('/beneficiaryProfile/editResource', [UserController::class, 'editResource']);

//adminpage
Route::get('/admin/pending', [RequestController::class, 'viewApplicationAdminPending'])->middleware('can:isAdmin');
Route::get('/admin/rejected', [RequestController::class, 'viewApplicationAdminRejected'])->middleware('can:isAdmin');
Route::get('/admin/success', [RequestController::class, 'viewApplicationAdminSuccess'])->middleware('can:isAdmin');
Route::post('/approveApplication', [RequestController::class, 'approveApplication'])->middleware('can:isAdmin');
Route::post('/rejectApplication', [RequestController::class, 'rejectApplication'])->middleware('can:isAdmin');

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
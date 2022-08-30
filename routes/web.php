<?php

use App\Http\Controllers\DonationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DonationRecordController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Approved;

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

//guest page
Route::get('/', function () {
	
	$beneficiaries = Approved::all();
	$count=count($beneficiaries);
	return view('welcome',['beneficiaries'=>$beneficiaries,'count'=>$count]);
});

//userpage
Route::get('/home', [HomeController::class, 'index']);
Route::get('/viewAllBeneficiaries', [HomeController::class, 'viewAllBeneficiaries']);
Auth::routes();

//beneficiary profile edit place
Route::get('/beneficiary-profile',[UserController::class, 'beneficiaryProfile']);
Route::get('/deleteResource/{id}',[UserController::class, 'deleteResource']);
Route::post('/addNewResource', [UserController::class, 'addNewResource']);
Route::post('/beneficiaryProfile/editBasicInfo', [UserController::class, 'editBasicInfo']);
Route::post('/beneficiaryProfile/editAddress', [UserController::class, 'editAddress']);
Route::post('/beneficiaryProfile/editVisitHour', [UserController::class, 'editVisitHour']);
Route::post('/beneficiaryProfile/editResource', [UserController::class, 'editResource']);
Route::get('/donation-received',[DonationRecordController::class,'loadDonationReceivedPage']);
Route::post('/donation/receivedFailed', [DonationRecordController::class, 'receivedFailed']);
Route::post('/donation/receivedSuccess', [DonationRecordController::class, 'receivedSuccess']);
Route::get('donation-history',[DonationRecordController::class,'loadDonationHistoryPage']);

//adminpage
Route::get('/admin/pending', [RequestController::class, 'viewApplicationAdminPending'])->middleware('can:isAdmin');
Route::get('/admin/rejected', [RequestController::class, 'viewApplicationAdminRejected'])->middleware('can:isAdmin');
Route::get('/admin/success', [RequestController::class, 'viewApplicationAdminSuccess'])->middleware('can:isAdmin');
Route::post('/approveApplication', [RequestController::class, 'approveApplication'])->middleware('can:isAdmin');
Route::post('/rejectApplication', [RequestController::class, 'rejectApplication'])->middleware('can:isAdmin');

//profile route
Route::get('profile', [UserController::class, 'viewProfile']);

//Dontation Tracking Page Route
Route::get('tracking/{id}', [DonationRecordController::class, 'loadTrackingPage']);

//donate
Route::get('/beneficiary/{id}/detail', [HomeController::class, 'loadBeneficiaryDetail']);

Route::get('/beneficiary/{id}/detail/self', [HomeController::class, 'loadBeneficiaryDetailSelf']);
Route::POST('/beneficiary/{id}/detail/self', [DonationController::class, 'submitDonationSelf']);

Route::get('/beneficiary/{id}/detail/shop', [HomeController::class, 'loadBeneficiaryDetailShop']);
Route::POST('/beneficiary/{id}/detail/shop', [DonationController::class, 'submitDonationShop']);


// Route::get('/beneficiary-application', function () {
// 	return view('beneficiary-application');
// });
Route::get('/applicationSubmittedVerify', [UserController::class, 'checkApplicantExistance']);
Route::get('/beneficiary-application', [UserController::class, 'showAppyForm']);
Route::post('/beneficiary-application', [RequestController::class, 'addApplication']);

Route::put('/update-profile', [UserController::class, 'update']);
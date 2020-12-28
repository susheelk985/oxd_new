<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerRegistrationController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\EpinController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PlanController;

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
    return view('auth/login');
});
Route::resource('inc/sidebar','SidebarController');
Auth::routes();
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
Route::get('/dashboard/plans/{id}', [DashboardController::class, 'plans']);
//Route::get('/customer_registration', 'CustomerRegistrationController@index');
Route::get('/customer_registration', [CustomerRegistrationController::class, 'index']);
Route::post('/customer/register',array('uses'=>'CustomerRegistrationController@Customer_reg'));
Route::get('/get_member_details',array('uses'=>'CustomerRegistrationController@get_member_details'));
Route::get('/get_member_data',array('uses'=>'CustomerRegistrationController@get_member_alldetails'));
Route::get('/member_net_sale_view', [App\Http\Controllers\MemberController::class, 'login_customer_view']);
Route::get('/member-net-sale-infinity', [App\Http\Controllers\MemberController::class, 'parent']);
Route::get('/genealogy', [App\Http\Controllers\MemberController::class, 'genealogy_view']);
Route::get('gen_invoice/down/{id}', [PDFController::class, 'gen_InvoicePDF']);
Route::get('/e-wallet',[WalletController::class,'waPOSTllet']);
Route::get('/e-pin',[EpinController::class,'epin']);
Route::post('/e-pin/pin-request',array('uses'=>'EpinController@epin_request'));
Route::get('/e-pin-requests',[AdminController::class,'e_pin_requests']);
Route::post('/e-pin-requests/approve',array('uses'=>'AdminController@epin_approve'));
Route::get('/dashboard/plans/{id}', [PlanController::class, 'change_plan']);
Route::get('/monthly_payment',[AdminController::class,'mothly_payment_export']);
Route::post('/monthly_payment/export',array('uses'=>'AdminController@get_monthly_payment'));
Route::get('/payment_details',[AdminController::class,'current_paymentDetails']);
Route::post('/payment_details/payment_upd',array('uses'=>'AdminController@update_payment'));

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContributionCategoryController;
// use GuestController;
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
Auth::routes();


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/Admin',function(){
    return view('Admin.Dashboard');
});

Route::get('/User',function(){
    return view('User.Dashboard');
});

Route::get('/Faqs',function(){
    return view('faqs');
});
// User routes
Route::prefix('User')->group(function ()
{
    //User Route
    // Route::post('test_route', [GuestController::class, 'test'])->name('user_register');
    // Route::get('All-Users', [AdminController::class, 'all_users'])->name('All-Users');
    // Route::get('user_deactivate/{user_id}', [AdminController::class, 'user_deactivate'])->name('user_deactivate');
    // Route::get('user_activate/{user_id}', [AdminController::class, 'user_activate'])->name('user_activate');

    Route::get('my-profile', [UserController::class, 'myProfile'])->name('my-profile');
    Route::get('select-category', [UserController::class, 'selectCategory'])->name('select-category');
    Route::get('chat', [UserController::class, 'chat'])->name('chat');
    Route::get('my-subscription', [UserController::class, 'mySubscription'])->name('my-subscription');
    Route::get('my-tickets', [UserController::class, 'myTickets'])->name('my-tickets');
    Route::get('apply-loan', [UserController::class, 'ApplyLoan'])->name('apply-loan');
    Route::get('loan-request', [UserController::class, 'LoanRequest'])->name('loan-request');
    Route::get('apply-loan', [UserController::class, 'ApplyLoan'])->name('apply-loan');
});



Route::get('/Register', [GuestController::class, 'register_view'])->name('Register');
Route::post('/user_register', [GuestController::class, 'user_register'])->name('user_register');


// Admin routes
Route::prefix('Admin')->group(function ()
{
    //User Route
    Route::post('test_route', [GuestController::class, 'test'])->name('user_register');
    Route::get('All-Users', [AdminController::class, 'all_users'])->name('All-Users');
    Route::get('user_deactivate/{user_id}', [AdminController::class, 'user_deactivate'])->name('user_deactivate');
    Route::get('user_activate/{user_id}', [AdminController::class, 'user_activate'])->name('user_activate');
    Route::get('user_delete/{user_id}', [AdminController::class, 'user_delete'])->name('user_delete');

    //Category
    Route::get('Categories', [AdminController::class, 'categories'])->name('Categories');
    Route::post('Add-Category', [AdminController::class, 'add_category'])->name('Add-Category');
    Route::get('category_active_deactive/{category_id}',[AdminController::class, 'category_active_deactive'])->name('category_active_deactive');
    Route::get('delete_category/{category_id}',[AdminController::class, 'delete_category'])->name('delete_category');
    Route::post('edit_category/{category_id}',[AdminController::class, 'edit_category'])->name('edit_category');


    //Currency
    Route::get('Currency', [AdminController::class, 'currency'])->name('currency');
    Route::post('add_currency', [AdminController::class, 'add_currency'])->name('add_currency');
    Route::get('active_deactive_curreny/{currency_id}', [AdminController::class, 'active_deactive_curreny'])->name('active_deactive_curreny');
    Route::get('delete_currency/{currency_id}',[AdminController::class, 'delete_currency'])->name('delete_currency');
    Route::post('edit_currency/{currency_id}',[AdminController::class, 'edit_currency'])->name('edit_currency');

    //Loan Types
    Route::get('Loan-Types', [AdminController::class, 'loan_types'])->name('loan_types');
    Route::post('add_loanType', [AdminController::class, 'add_loanType'])->name('add_loanType');
    Route::post('edit_loanType/{loan_id}', [AdminController::class, 'edit_loanType'])->name('edit_loanType');
    Route::get('loan_active_deactive/{loan_id}', [AdminController::class, 'loan_active_deactive'])->name('loan_active_deactive');
    Route::get('delete_type/{loan_id}', [AdminController::class, 'delete_type'])->name('delete_type');

    //Payment Mehtods
    Route::get('Payment-Methods', [AdminController::class, 'payment_methods'])->name('Payment-Methods');
    Route::post('add_payment_methods', [AdminController::class, 'add_payment_methods'])->name('add_payment_methods');
    Route::post('edit_payment_methods/{id}', [AdminController::class, 'edit_payment_methods'])->name('edit_payment_methods');
    Route::get('pay_method_active_deactive/{id}', [AdminController::class, 'pay_method_active_deactive'])->name('pay_method_active_deactive');
    Route::get('delete_payment_method/{id}', [AdminController::class, 'delete_payment_method'])->name('delete_payment_method');





});




Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/paystack',function(){
    return view('paystack');
});

Route::POST('/paystack_try', [ContributionCategoryController::class, 'redirectToGateway'])->name('pay');

Route::get('/payment/callback', [ContributionCategoryController::class, 'handleGatewayCallback'])->name('payment');

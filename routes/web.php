<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\loginAndRegisterController;
use App\Http\Controllers\sellerController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
})->Middleware('roleInLogin');

Route::post('/login', [loginAndRegisterController::class, 'check'])->name('login');
Route::get('/register', [loginAndRegisterController::class,'register'])->name('register');
Route::post('/sellerRegister', [loginAndRegisterController::class, 'sellerRegister'])->name('sellerRegister');
Route::post('/userRegister', [loginAndRegisterController::class, 'userRegister'])->name('userRegister')->Middleware('roleGuard');
Route::get('/home', [loginAndRegisterController::class, 'index'])->name('home');

Route::get('/adminPage', [adminController::class, 'index'])->name('admin')->middleware('admin');

Route::get('/sellerPage', [adminController::class, 'index'])->name('seller')->middleware('seller');

Route::get('/userPage', [dashboardController::class, 'index'])->name('userPage')->middleware('dashboard');



Route::prefix('admin')->middleware('admin')->group( function(){
    Route::get('/user', [adminController::class, 'index'])->name('admin.user');
    Route::get('/seller', [adminController::class, 'seller'])->name('admin.seller');
    Route::get('/products', [adminController::class, 'products'])->name('admin.products');
    Route::get('/role', [adminController::class, 'role'])->name('admin.role');
    Route::get('/category', [adminController::class, 'category'])->name('admin.category');
    Route::post('/category/add', [adminController::class, 'addCategory'])->name('admin.category.store');
    Route::post('/approve-seller/{id}', [adminController::class, 'approveSeller'])->name('admin.approveSeller');
    Route::post('/delete-seller/{id}', [adminController::class, 'deleteSeller'])->name('admin.deleteSeller');
});


Route::prefix('seller')->middleware(['seller', 'sellerStatus'])->group(function() {
    Route::get('/sellerHome', [sellerController::class, 'index'])->name('seller.sellerHome');
    Route::get('/addProduct', [sellerController::class, 'addPRoduct'])->name('seller.addProduct');
    Route::get('/storeProduct', [sellerController::class, 'storeProduct'])->name('seller.storeProduct');
    Route::get('/orders', [sellerController::class, 'orders'])->name('seller.orders');
});

Route::get('seller/approval', function(){
    return view('seller.notApproved');
})->name('seller.approval');





<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\loginAndRegisterController;
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

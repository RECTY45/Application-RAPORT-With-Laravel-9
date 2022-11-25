<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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
    // Login
Route::get('/', [LoginController::class, 'Login'])->name('AuthLogin');
Route::post('/', [LoginController::class, 'AuthLogin'])->name('authenticated');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

   // Page Dashboard 
Route::get('/pages/dashboard', [DashboardController::class, 'Dashboard'])->middleware('auth');
 

//PAGE ADMIN

//RECORD
Route::get('/pages/dashboard/user', [UserController::class, 'index'])->name('user.index')->middleware('admin');
//DELETE
Route::delete('/pages/dashboard/user/{user:id}', [UserController::class,'destroy'])->name('user.destroy');
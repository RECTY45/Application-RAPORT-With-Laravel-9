<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KelasController;
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
Route::get('/', [LoginController::class, 'Login'])->name('AuthLogin')->middleware('guest');
Route::post('/', [LoginController::class, 'AuthLogin'])->name('authenticated');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

   // Page Dashboard 
Route::get('/pages/dashboard', [DashboardController::class, 'Dashboard'])->middleware('auth');
 

//PAGE ADMIN USER

//RECORD
Route::get('/pages/dashboard/user', [UserController::class, 'index'])->name('user.index')->middleware('admin');
//DELETE
Route::delete('/pages/dashboard/user/{user:id}', [UserController::class,'destroy'])->name('user.destroy');
//CREATE
Route::get('/pages/dashboard/user/create',[UserController::class, 'create'])->name('user.create');
//STORE
Route::post('/pages/dashboard/user/create', [UserController::class, 'store'])->name('user.store');
//EDIT
Route::get('/page/dashboard/user/{user:id}/edit',[UserController::class,'edit'])->name('user.edit');
//UPDATE
Route::put('/pages/dashboard/user/update/{user:id}',[UserController::class,'update'])->name('user.update');


//PAGE ADMIN KELAS

//RECORD
Route::get('/pages/dashboard/kelas', [KelasController::class, 'index'])->name('kelas.index')->middleware('admin');
//DELETE
Route::delete('/pages/dashboard/kelas/{user:id}', [KelasController::class,'destroy'])->name('kelas.destroy');
//CREATE
Route::get('/pages/dashboard/kelas/create',[KelasController::class, 'create'])->name('kelas.create');
//STORE
Route::post('/pages/dashboard/kelas/create', [KelasController::class, 'store'])->name('kelas.store');
//EDIT
Route::get('/page/dashboard/kelas/{user:id}/edit',[KelasController::class,'edit'])->name('kelas.edit');
//UPDATE
Route::put('/pages/dashboard/kelas/update/{user:id}',[KelasController::class,'update'])->name('kelas.update');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MapelController;
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
Route::get('/pages/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.index')->middleware('auth');


//PAGE ADMIN USER

//RECORD
Route::get('/pages/dashboard/user', [UserController::class, 'index'])->name('user.index')->middleware('admin');
//DELETE
Route::delete('/pages/dashboard/user/{user:id}', [UserController::class,'destroy'])->name('user.destroy');
//CREATE
Route::get('/pages/dashboard/user/create',[UserController::class, 'create'])->name('user.create')->middleware('admin');
//STORE
Route::post('/pages/dashboard/user/create', [UserController::class, 'store'])->name('user.store')->middleware('admin');
//EDIT
Route::get('/pages/dashboard/user/{user:id}/edit',[UserController::class,'edit'])->name('user.edit')->middleware('admin');
//UPDATE
Route::put('/pages/dashboard/user/{user:id}',[UserController::class,'update'])->name('user.update')->middleware('admin');


//PAGE ADMIN KELAS

//RECORD KELAS
Route::get('/pages/dashboard/kelas', [KelasController::class, 'index'])->name('kelas.index')->middleware('admin');
//DELETE
Route::delete('/pages/dashboard/kelas/{user:id}', [KelasController::class,'destroy'])->name('kelas.destroy');
//CREATE
Route::get('/pages/dashboard/kelas/create',[KelasController::class, 'create'])->name('kelas.create');
//STORE
Route::post('/pages/dashboard/kelas/create', [KelasController::class, 'store'])->name('kelas.store');
//EDIT
Route::get('/page/dashboard/kelas/{kelas:id}/edit',[KelasController::class,'edit'])->name('kelas.edit');
//UPDATE
Route::put('/pages/dashboard/kelas/update/{kelas:id}',[KelasController::class,'update'])->name('kelas.update');

//RECORD GURU
Route::get('/pages/dashboard/guru', [GuruController::class, 'index'])->name('guru.index')->middleware('admin');
//DELETE
Route::delete('/pages/dashboard/guru/{guru:id}', [GuruController::class,'destroy'])->name('guru.destroy');
//CREATE
Route::get('/pages/dashboard/guru/create',[GuruController::class, 'create'])->name('guru.create');
//STORE
Route::post('/pages/dashboard/guru/create', [GuruController::class, 'store'])->name('guru.store');
//EDIT
Route::get('/page/dashboard/guru/{guru:id}/edit',[GuruController::class,'edit'])->name('guru.edit');
//UPDATE
Route::put('/pages/dashboard/guru/update/{guru:id}',[GuruController::class,'update'])->name('guru.update');

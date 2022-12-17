<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\WalasController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\TapelController;
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

Route::group(['middleware' => 'admin'],function(){
    //RECORD USER
    Route::get('/pages/dashboard/user', [UserController::class, 'index'])->name('user.index');
    //DELETE
    Route::delete('/pages/dashboard/user/{user:id}', [UserController::class,'destroy'])->name('user.destroy');
    //CREATE
    Route::get('/pages/dashboard/user/create',[UserController::class, 'create'])->name('user.create');
    //STORE
    Route::post('/pages/dashboard/user/create', [UserController::class, 'store'])->name('user.store');
    //EDIT
    Route::get('/pages/dashboard/user/{user:id}/edit',[UserController::class,'edit'])->name('user.edit');
    //UPDATE
    Route::put('/pages/dashboard/user/{user:id}',[UserController::class,'update'])->name('user.update');

    // PAGE KELAS

    //RECORD KELAS
    Route::get('/pages/dashboard/kelas', [KelasController::class, 'index'])->name('kelas.index');
    //DELETE
    Route::delete('/pages/dashboard/kelas/{kelas:id}', [KelasController::class,'destroy'])->name('kelas.destroy');
    //CREATE
    Route::get('/pages/dashboard/kelas/create',[KelasController::class, 'create'])->name('kelas.create');
    //STORE
    Route::post('/pages/dashboard/kelas/create', [KelasController::class, 'store'])->name('kelas.store');
    //EDIT
    Route::get('/page/dashboard/kelas/{kelas:id}/edit',[KelasController::class,'edit'])->name('kelas.edit');
    //UPDATE
    Route::put('/pages/dashboard/kelas/update/{kelas:id}',[KelasController::class,'update'])->name('kelas.update');

    // PAGE SISWA

    // RECORD SISWA
    Route::get('/pages/dashboard/siswa', [SiswaController::class, 'index'])->name('siswa.index');
    //DELETE
    Route::delete('/pages/dashboard/siswa/{siswa:id}', [SiswaController::class,'destroy'])->name('siswa.destroy');
    //CREATE
    Route::get('/pages/dashboard/siswa/create',[SiswaController::class, 'create'])->name('siswa.create');
    //STORE
    Route::post('/pages/dashboard/siswa/create', [SiswaController::class, 'store'])->name('siswa.store');
    //EDIT
    Route::get('/page/dashboard/siswa/{siswa:id}/edit',[SiswaController::class,'edit'])->name('siswa.edit');
    //UPDATE
    Route::put('/pages/dashboard/siswa/update/{siswa:id}',[SiswaController::class,'update'])->name('siswa.update');

    // PAGE GURU

    // RECORD GURU
    Route::get('/pages/dashboard/guru', [GuruController::class, 'index'])->name('guru.index');
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


    //  PAGE WALAS

    // RECORD WALAS
    Route::get('/pages/dashboard/walas', [WalasController::class, 'index'])->name('walas.index');
    //DELETE
    Route::delete('/pages/dashboard/walas/{walas:id}', [WalasController::class,'destroy'])->name('walas.destroy');
    //CREATE
    Route::get('/pages/dashboard/walas/create',[WalasController::class, 'create'])->name('walas.create');
    //STORE
    Route::post('/pages/dashboard/walas/create', [WalasController::class, 'store'])->name('walas.store');
    //EDIT
    Route::get('/page/dashboard/walas/{walas:id}/edit',[WalasController::class,'edit'])->name('walas.edit');
    //UPDATE
    Route::put('/pages/dashboard/walas/update/{walas:id}',[WalasController::class,'update'])->name('walas.update');

    //  PAGE MAPEL

    // RECORD MAPEL
    Route::get('/pages/dashboard/mapel', [MapelController::class, 'index'])->name('mapel.index');
    //DELETE
    Route::delete('/pages/dashboard/mapel/{mapel:id}', [MapelController::class,'destroy'])->name('mapel.destroy');
    //CREATE
    Route::get('/pages/dashboard/mapel/create',[MapelController::class, 'create'])->name('mapel.create');
    //STORE
    Route::post('/pages/dashboard/mapel/create', [MapelController::class, 'store'])->name('mapel.store');
    //EDIT
    Route::get('/page/dashboard/mapel/{mapel:id}/edit',[MapelController::class,'edit'])->name('mapel.edit');
    //UPDATE
    Route::put('/pages/dashboard/mapel/update/{mapel:id}',[MapelController::class,'update'])->name('mapel.update');

    //  PAGE JURUSAN

    // RECORD MAPEL
    Route::get('/pages/dashboard/jurusan', [JurusanController::class, 'index'])->name('jurusan.index');
    //DELETE
    Route::delete('/pages/dashboard/jurusan/{jurusan:id}', [JurusanController::class,'destroy'])->name('jurusan.destroy');
    //CREATE
    Route::get('/pages/dashboard/jurusan/create',[JurusanController::class, 'create'])->name('jurusan.create');
    //STORE
    Route::post('/pages/dashboard/jurusan/create', [JurusanController::class, 'store'])->name('jurusan.store');
    //EDIT
    Route::get('/page/dashboard/jurusan/{jurusan:id}/edit',[JurusanController::class,'edit'])->name('jurusan.edit');
    //UPDATE
    Route::put('/pages/dashboard/jurusan/update/{jurusan:id}',[JurusanController::class,'update'])->name('jurusan.update');

    //  PAGE TAPEL

    // RECORD TAPEL
    Route::get('/pages/dashboard/tapel', [TapelController::class, 'index'])->name('tapel.index');
    //DELETE
    Route::delete('/pages/dashboard/tapel/{tapel:id}', [TapelController::class,'destroy'])->name('tapel.destroy');
    //CREATE
    Route::get('/pages/dashboard/tapel/create',[TapelController::class, 'create'])->name('tapel.create');
    //STORE
    Route::post('/pages/dashboard/tapel/create', [TapelController::class, 'store'])->name('tapel.store');
    //EDIT
    Route::get('/page/dashboard/tapel/{tapel:id}/edit',[TapelController::class,'edit'])->name('tapel.edit');
    //UPDATE
    Route::put('/pages/dashboard/tapel/update/{tapel:id}',[TapelController::class,'update'])->name('tapel.update');
});

//PAGE ADMIN KELAS

Route::group(['middleware' => 'kelas'], function(){

});

//RECORD KELAS

Route::group(['middleware' => 'siswa'], function(){

});

//RECORD GURU

Route::group(['middleware' => 'guru'], function(){

});

Route::group(['middleware' => 'walas'], function(){

});




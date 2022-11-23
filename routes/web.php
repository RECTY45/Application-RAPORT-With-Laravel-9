<?php

use Illuminate\Support\Facades\Route;

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
    return view('page_admin.index',[
        'name' => 'Halaman'
    ]);
});

Route::get('/login', function () {
    return view('auth.login',[
        'name' => 'Halaman'
    ]);
});

Route::get('/pages/dashboard', function () {
    return view('page_admin.dashboard.index',[
        'name' => 'Halaman'
    ]);
});
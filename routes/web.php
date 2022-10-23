<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SubeventController;
use App\Http\Controllers\UserHomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MaineventController;
use App\Http\Controllers\PesertaLoginController;
use App\Http\Controllers\PesertaRegisterController;
use App\Http\Controllers\DashboardSubeventController;

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


Route::get('/', [HomeController::class, 'home']);



// Peserta
// Peserta
Route::get('/home', [UserHomeController::class, 'index']);

Route::get('/regis-lfls', [UserHomeController::class, 'form']);



// ADMIN
// ADMIN Login
    // Route::get('/administrator', function () {
    //     return view('admin/login');
    // });
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

// LOGOUT
Route::post('/logout', [LoginController::class, 'logout']);

// ADMIN Registration
    // Route::get('/regis', function () {
    //     return view('admin/regis');
    // });
Route::get('/regis', [RegisterController::class, 'index']);
Route::post('/regis', [RegisterController::class, 'store']);

Route::post('/peserta-login', [PesertaLoginController::class, 'authenticate']);
Route::post('/peserta-regis', [PesertaRegisterController::class, 'store']);

// ADMIN Dashboard
    // Route::get('/dashboard', function () {
    //     return view('admin/dashboard');
    // });
Route::get('/dashboard', [DashboardController::class, 'index']);

// Route::get('/subevent', function () {
//     return view('admin/sub_event');
// });

// Subevent
Route::resource('/subevents', DashboardSubeventController::class);

// Mainevent
Route::get('/mainevent', [MaineventController::class, 'index']);

// Route::get('/mainevent', function () {
//     return view('admin/main_event');
// });

Route::get('/mainevent_bayar', function () {
    return view('admin/pembayaran');
});

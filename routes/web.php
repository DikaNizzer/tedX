<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SubeventController;
use App\Http\Controllers\UserHomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MaineventController;
use App\Http\Controllers\PesertaLoginController;
use App\Http\Controllers\PesertaRegisterController;
use App\Http\Controllers\PembayaranExportController;
use App\Http\Controllers\DashboardSubeventController;
use App\Http\Controllers\DashboardPembayaranController;

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


Route::get('/', [HomeController::class, 'home'])->name('home');



// Peserta

Route::get('/home', [UserHomeController::class, 'index']); //Hanya Boleh setelah Login

Route::get('/regis-lfls', [UserHomeController::class, 'form']); //Hanya Boleh setelah Login
Route::post('/regis-lfls', [PesertaController::class, 'form']); //Hanya Boleh setelah Login

Route::get('/status', [UserHomeController::class, 'status']); //Hanya Boleh setelah Login

// REGISTRASI MAIN EVENT
Route::get('/regis-main', [UserHomeController::class, 'formMain']); //Hanya Boleh setelah Login
Route::post('/regis-main', [PesertaController::class, 'formMain']); //Hanya Boleh setelah Login

// LOGOUT
Route::post('/logout', [LoginController::class, 'logout']);
Route::post('/peserta-logout', [PesertaLoginController::class, 'logout']);

// PESERTA
Route::post('/peserta-login', [PesertaLoginController::class, 'authenticate']);
Route::post('/peserta-regis', [PesertaRegisterController::class, 'store']);

// Coba Tiket
Route::get('/tiket', function () {
    return view('peserta.tiket');
});
Route::get('/cetak-tiket/{id}/{nama}', [PesertaController::class, 'cetak_tiket']);



// ADMIN
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

// ADMIN Registration
Route::get('/regis', [RegisterController::class, 'index']);
Route::post('/regis', [RegisterController::class, 'store']);

// Authenticated user only
Route::group(['middleware' => 'auth'], function() {

    //User with admin type
    Route::group(['middleware' => 'cektipe:admin'], function() {
        Route::get('/dashboard', [DashboardController::class, 'index']);
        Route::resource('/subevents', DashboardSubeventController::class);
        Route::resource('/mainevent_bayar', DashboardPembayaranController::class);
        Route::get('image/{pembayaran:bukti_bayar}', [ImageController::class, 'index']);
        Route::get('/exportspembayaran', [PembayaranExportController::class, 'pembayaranExport']);
    });

    Route::group(['middleware' => 'cektipe:peserta'], function() {
        Route::get('/home', [UserHomeController::class, 'index']);
    });

});

// Route::get('/subevent', function () {
//     return view('admin/sub_event');
// });

// Subevent

// Mainevent
Route::get('/mainevent', [MaineventController::class, 'index']);
Route::put('/mainevent/{id}', [PesertaController::class, 'editstatus']);

// Route::get('/mainevent_bayar', [DashboardPembayaranController::class, 'index']);


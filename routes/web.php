<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

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

// Client
Route::get('/', function () {
    return view('home');
});

// ADMIN Login
    // Route::get('/administrator', function () {
    //     return view('admin/login');
    // });
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

// ADMIN Registration
    // Route::get('/regis', function () {
    //     return view('admin/regis');
    // });
Route::get('/regis', [RegisterController::class, 'index']);
Route::post('/regis', [RegisterController::class, 'store']);

// ADMIN Dashboard
    // Route::get('/dashboard', function () {
    //     return view('admin/dashboard');
    // });
Route::get('/dashboard', [DashboardController::class, 'index']);
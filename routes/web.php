<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard',[
    DashboardController::class, 
    'index'
])->name('dashboard');

Route::get('/devices', function () {
    return view('devices');
})->name('device');

Route::get('/', [
    AuthController::class, 
    'indexLogin'
])->name('show.login');

Route::get('/register',[
    AuthController::class,
    'indexRegister'
])->name('show.register');

Route::post('/logout', [
    AuthController::class, 
    'logout'
])->name('logout');

Route::post('/', [
    AuthController::class, 
    'login'
])->name('login');

Route::post('/register', [
    AuthController::class, 
    'register'
])->name('register');
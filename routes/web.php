<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [
    AuthController::class, 
    'indexLogin'
]);

Route::get('/register',[
    AuthController::class,
    'indexRegister'
]);

Route::post('/login', [
    AuthController::class, 
    'indexLogin'
]);

Route::post('/register', [
    AuthController::class, 
    'indexRegister'
]);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RiesgoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

// Login
Route::get('/', [LoginController::class, 'showLoginForm']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Registro
Route::get('/register', [RegisterController::class, 'showRegister'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);


Route::get('/home', function () {
    return view('home');
})->middleware('auth');


// ------------------------------------------------------ Rutas para Zona de Riesgo -------------------------------------------------

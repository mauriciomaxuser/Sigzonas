<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', [LoginController::class, 'showLogin']);
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', function () {
    return view('register');
});

Route::get('/home', function () {
    return view('home');
})->middleware('auth'); // protege la ruta home

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

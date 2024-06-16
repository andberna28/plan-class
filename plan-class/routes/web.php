<?php

use auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserRegisterController;

Route::get('/', [LoginController::class, 'index']);
Route::post('/', [LoginController::class, 'login'])
    ->name('login');

Route::middleware('auth')->group(function () {
    Route::get('logout', [LoginController::class, 'logout'])
        ->name('logout');
    Route::get('/dashboard', [LoginController::class, 'dashboard'])
        ->name('dashboard');
    Route::get('painel', function() {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('cadastro', function () {
    return view('register');
});

Route::post('cadastro', [UserRegisterController::class, 'store'])
    ->name('register');

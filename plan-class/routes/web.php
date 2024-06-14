<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserRegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'index']);
Route::post('/', [LoginController::class, 'login'])
    ->name('login');

Route::get('logout', [LoginController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');

Route::get('cadastro', function () {
    return view('register');
});

Route::post('cadastro', [UserRegisterController::class, 'store'])
    ->name('register');

Route::get('/dashboard', [LoginController::class, 'dashboard'])
    ->middleware('auth');

Route::get('painel', function() {
    return view('dashboard');
})->middleware('auth')
  ->name('dashboard');

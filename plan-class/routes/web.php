<?php

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

    Route::get('create', [LibraryController::class, 'create'])
        ->name('create');
    Route::get('edit', [LibraryController::class, 'edit'])
        ->name('edit');
});

Route::get('cadastro', function () {
    return view('register');
});

Route::post('cadastro', [UserRegisterController::class, 'store'])
    ->name('register');

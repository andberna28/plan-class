<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserRegisterController;
use App\Http\Controllers\LibraryController;

Route::get('/', [LoginController::class, 'index']);
Route::post('/', [LoginController::class, 'login'])
    ->name('login');

Route::middleware('auth')->group(function () {
    Route::get('logout', [LoginController::class, 'logout'])
        ->name('logout');
    Route::get('create', [LibraryController::class, 'create'])
        ->name('create');
    Route::get('edit', [LibraryController::class, 'edit'])
        ->name('edit');
    Route::get('show', [LibraryController::class, 'show'])
        ->name('show');
    Route::get('dashboard', [LibraryController::class, 'index'])
        ->name('dashboard');
    Route::get('livros', function(){
        return view('biblioteca.show');
    })->name('livros');
});

Route::get('cadastro', function () {
    return view('register');
});

Route::post('cadastro', [UserRegisterController::class, 'store'])
    ->name('register');

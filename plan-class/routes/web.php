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

    //! Rotas da Livraria
    Route::get('edit/book/{id}', [LibraryController::class, 'edit'])
        ->name('edit');
    Route::post('update/book/{id}', [LibraryController::class, 'update'])
        ->name('update');
    Route::get('show/book/{id}', [LibraryController::class, 'show'])
        ->name('show');
    Route::get('destroy/book/{id}', [LibraryController::class, 'destroy'])
        ->name('destroy');
    Route::get('dashboard', [LibraryController::class, 'index'])
        ->name('dashboard');

    Route::get('{{/dashboard/$books->id}}', function () {
        return view('dashboard');
    });

    Route::get('profile', function(){
        return view('profile');
    })->name('profile');

    Route::get('cadastro-livros', function(){
        return view('biblioteca.create');
    })->name('cadastro-livros');

    Route::post('cadastro-livros', [LibraryController::class, 'store'])
        ->name('register-books');
});

Route::get('cadastro', function () {
    return view('register');
});

Route::post('cadastro', [UserRegisterController::class, 'store'])
    ->name('register');

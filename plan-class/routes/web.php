<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'index']);
Route::post('/', [LoginController::class, 'login'])
    ->name('login');

Route::post('logout', [LoginController::class, 'logout'])
    ->name('logout');

Route::get('/cadastro', function () {
    return view('register');
});
<?php

use App\Http\Controllers\Auth\ClienteLoginController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ProductoController;

Route::get('/login', [ClienteLoginController::class, 'showLoginForm'])->name('cliente.login');
Route::post('/login', [ClienteLoginController::class, 'login'])->name('cliente.login.submit');
Route::post('/logout', [ClienteLoginController::class, 'logout'])->name('cliente.logout');

Route::middleware('auth:cliente')->group(function () {
    Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
});

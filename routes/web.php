<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/redirect',         [HomeController::class, 'redirect']);
    Route::get('/dashboard',        [UserController::class, 'index'])->name('dashboard');
    Route::get('/admin-dashboard',  [AdminController::class, 'index'])->name('admin.dashboard');
}); 


<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/redirect',         [HomeController::class, 'redirect']);
    Route::get('/dashboard',        [UserController::class, 'index'])->name('dashboard');
}); 

Route::group(['middleware' => ['auth','isAdmin']], function () {
    Route::get('/admin-dashboard',  [AdminController::class, 'index'])->name('admin.dashboard');
 });

Route::get('/send-mail', [MailController::class, 'maildetails']);

Route::get('/view', [HomeController::class, 'template']);


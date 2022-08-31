<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',             [UserController::class,'index'])->name('user.index.get');
Route::get('/about-us',     [UserController::class,'aboutUs'])->name('user.aboutus.get');
Route::get('/doctors',      [UserController::class,'doctors'])->name('user.doctors.get');
Route::get('/news',         [UserController::class,'news'])->name('user.news.get');
Route::get('/news-details', [UserController::class,'newsDetails'])->name('user.newsdetails.get');
Route::get('/contact',      [UserController::class,'contact'])->name('user.contact.get');
// Route::get('/login',        [UserController::class,'login'])->name('user.login.get');
// Route::get('/registration', [UserController::class,'registration'])->name('user.registration.get');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
    
    //Admin-Panel Routes
    Route::get('db', [AdminController::class, 'index'])->name('admin.index.get');
});

Route::get('/add-employee', [AdminController::class, 'addEmployee'])->name('addemployee');
Route::post('/add-employee', [AdminController::class, 'regEmployee'])->name('regemployee');

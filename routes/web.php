<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Middleware\AdminMiddleware;

Route::get('/', function () {
    return view('welcome');
});

// Login Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', fn () => view('dashboard.admin'))
        ->middleware(AdminMiddleware::class)
        ->name('admin.dashboard');

    // categories
    Route::resource('categories', CategoryController::class);




    Route::get('/user/dashboard', fn () => view('dashboard.user'))
        ->name('user.dashboard');
});

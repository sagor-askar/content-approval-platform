<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\PostController;
use App\Http\Middleware\AdminMiddleware;

Route::get('/', function () {
    return view('welcome');
});

// Login Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    // Admin Routes
    Route::get('/admin/dashboard', fn () => view('dashboard.admin'))
        ->middleware(AdminMiddleware::class)
        ->name('admin.dashboard');

    Route::resource('categories', CategoryController::class);
    Route::get('/approval', [ApprovalController::class, 'approvalStories'])->name('stories.approval');


    // User Routes
    Route::get('/user/dashboard', fn () => view('dashboard.user'))
        ->name('user.dashboard');
    Route::resource('posts', PostController::class);
});

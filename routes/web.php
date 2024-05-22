<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ItemController;

Route::prefix('admin')->group(function () {
    Route::middleware(['guest', 'login.redirect'])->group(function () {
        Route::get('/admin-login', [UserController::class, 'login'])->name('admin-login');
        Route::post('/admin-login', [UserController::class, 'loginUser']);

    });

    Route::middleware('auth')->group(function () {
        Route::get('/item-create', [ItemController::class, 'create']);
        Route::post('/item-create', [ItemController::class, 'store'])->name('item.store');
        Route::get('/admin-logout', [UserController::class, 'logout'])->name('admin-logout');
        Route::get('/dashboard', [UserController::class, 'index'])->name('admin.dashboard');
        Route::post('/item-edit/{id}', [UserController::class, 'edit']);
        Route::put('/item-edit/{id}', [UserController::class, 'create']);
    });
});

Route::get('/', function () {
    return view('welcome');
});

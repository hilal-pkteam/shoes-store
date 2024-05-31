<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Middleware\AdminAuth;
use App\Http\Middleware\AdminGuest;
use App\Models\Item;

Route::prefix('admin')->group(function () {

    Route::get('/admin-register', [UserController::class,'create'])->name('admin.register');
    Route::post('/admin-register', [UserController::class,'store'])->name('admin.store');

    Route::get('/admin-login', [UserController::class, 'login'])->middleware(AdminGuest::class)->name('admin.login');
    Route::post('/admin-login', [UserController::class, 'loginUser'])->middleware(AdminGuest::class);

    Route::get('/user-register', [UserController::class, 'register']);

    Route::get('/item-create', [ItemController::class, 'create']);
    Route::post('item-create', [ItemController::class, 'store'])->name('item.store');


    Route::get('/admin-logout', [UserController::class, 'logout'])->name('admin-logout');
    Route::get('/admins', [UserController::class, 'adminsList'])->name('adminsList');

    Route::get('/admin-edit/{id}', [ItemController::class, 'edit']);
    Route::put('/admin-update/{id}', [ItemController::class, 'store']);

    Route::get('/dashboard', [UserController::class, 'index'])->middleware(AdminAuth::class)->name('dashboard');

    Route::delete('/admin/item-delete', [ItemController::class, 'destroy'])->name('item.delete');
    // Admin routes ends
});

Route::get('/', function () {
    $items = Item::all();

    return view('welcome', ['items' => $items]);
});

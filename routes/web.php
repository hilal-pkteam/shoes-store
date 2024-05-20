<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ItemController;

Route::get('/admin/admin-create', [UserController::class, 'create']);
Route::post('/admin/admin-create', [UserController::class,'store']);

Route::prefix('admin')->group(function () {
    Route::group(['middleware' => 'guest'], function () {
        Route::get('/admin-login', [UserController::class, 'login'])->name('admin-login');
        Route::post('/admin-login', [UserController::class, 'loginUser']);

    });
    Route::get('/item-create', [ItemController::class, 'create']);
    Route::get('/admin-logout', [UserController::class, 'logout'])->name('admin-logout');

});


Route::get('/admin/dashboard', [UserController::class, 'dashboard'])->middleware('auth');
// Admin routes ends

Route::get('/', function () {
    return view('welcome');
});

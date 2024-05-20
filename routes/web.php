<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ItemController;
use App\Models\Item;

Route::prefix('admin')->group(function () {
    Route::group(['middleware' => 'guest'], function () {
        Route::get('/admin-login', [UserController::class, 'login'])->name('admin-login');
        Route::post('/admin-login', [UserController::class, 'loginUser']);

    });
    Route::get('/item-create', [ItemController::class, 'create']);
    Route::post('item-create', [ItemController::class,'store'])->name('item.store');

    Route::get('/admin-logout', [UserController::class, 'logout'])->name('admin-logout');

});


Route::get('/admin/dashboard', [UserController::class, 'index'])->middleware('auth');
// Admin routes ends

Route::get('/', function () {
    $items = Item::all();

    return view('welcome', ['items' => $items]);
});

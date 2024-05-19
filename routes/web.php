<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/admin/admin-create', [UserController::class, 'create']);
Route::post('/admin/admin-create', [UserController::class,'store']);

Route::group(['middleware' => 'guest'], function () {
    Route::get('/admin/admin-login', [UserController::class, 'login']);
    Route::post('/admin/admin-login', [UserController::class, 'loginUser']);
});

Route::get('/admin/dashboard', [UserController::class, 'dashboard'])->middleware('auth');
// Admin routes ends

Route::get('/', function () {
    return view('welcome');
});

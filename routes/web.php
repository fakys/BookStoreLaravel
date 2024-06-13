<?php

use App\Http\Controllers\admin\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin/', [AdminController::class, 'index'])->name('admin.home');
Route::get('admin/{table}', [AdminController::class, 'show_model'])->name('admin.show_model');
Route::get('admin/create/{table}', [AdminController::class, 'create_object'])->name('admin.create_object');
Route::post('admin/store/{table}', [AdminController::class, 'store_object'])->name('admin.store_object');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

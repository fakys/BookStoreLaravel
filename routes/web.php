<?php

use App\Http\Controllers\admin\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin/', [AdminController::class, 'index'])->name('admin.home');
Route::get('admin/{table}', [AdminController::class, 'show_model'])->name('admin.show_model');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

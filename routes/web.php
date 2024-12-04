<?php

use App\Http\Controllers\carController;
use Illuminate\Support\Facades\Route;

Route::get('/home',[CarController::class,'index'])->name('index');

Route::get('/Input-Data',[carController::class, 'create'])->name('create');
Route::post('/store-data',[carController::class,'store'])->name('store');
Route::get('/show-car/{id}',[carController::class,'show'])->name('show');
Route::get('/edit-car/{id}',[carController::class, 'edit'])->name('edit');
Route::patch('/update-car/{id}',[carController::class, 'update']);
Route::delete('delete-car/{id}',[carController::class,'delete']);

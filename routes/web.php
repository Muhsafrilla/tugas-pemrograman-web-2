<?php

use App\Http\Controllers\LaptopController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LaptopController::class, 'index']);

Route::get('/laptop', [LaptopController::class, 'index'])->name('laptop.index');
Route::get('/laptop/create', [LaptopController::class, 'create'])->name('laptop.create');
Route::post('/laptop/store', [LaptopController::class, 'store'])->name('laptop.store');

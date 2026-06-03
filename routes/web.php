<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LaptopController::class, 'index']);

Route::get('/laptop', [LaptopController::class, 'index'])->name('laptop.index');
Route::get('/laptop/create', [LaptopController::class, 'create'])->name('laptop.create');
Route::post('/laptop/store', [LaptopController::class, 'store'])->name('laptop.store');
Route::get('/laptop/{laptop}/edit', [LaptopController::class, 'edit'])->name('laptop.edit');
Route::put('/laptop/{laptop}', [LaptopController::class, 'update'])->name('laptop.update');
Route::delete('/laptop/{laptop}', [LaptopController::class, 'destroy'])->name('laptop.destroy');

Route::resource('brand', BrandController::class);
Route::resource('series', SeriesController::class);
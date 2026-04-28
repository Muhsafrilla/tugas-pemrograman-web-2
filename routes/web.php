<?php

use App\Http\Controllers\LaptopController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/laptop', [LaptopController::class, 'index']);
Route::get('/laptop/create', [LaptopController::class, 'create']);

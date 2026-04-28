<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/laptop', function () {
    return view('laptop.index', ['title' => 'Laptop']);
});

Route::get('/laptop/create', function () {
    return view('laptop.create', ['title' => 'Create Laptop']);
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ShowController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{id}', ShowController::class);

Route::resource('/category', CategoryController::class);

Route::get('/ali', function () {
    return redirect('category/index')->with('status', 'Enable');
});


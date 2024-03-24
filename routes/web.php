<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;

Route::get('/', function () {
    return view('index');
});

Route::get('/aboutus', [indexController::class,'about']);
Route::get('/contact', [indexController::class,'contact']);

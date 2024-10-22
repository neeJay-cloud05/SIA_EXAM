<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController; 
use App\Http\Controllers\InfoPersonalController; 

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [InfoController::class, 'get']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});
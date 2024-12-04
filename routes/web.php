<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\KoleksiController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', [KoleksiController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/login', [HomeController::class, 'login'])->name('login');

Route::get('/koleksi', [KoleksiController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/', [KoleksiController::class, 'index'])->name('index');
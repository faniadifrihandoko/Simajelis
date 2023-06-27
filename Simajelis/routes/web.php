<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengajianController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;


#home
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/galeri', [HomeController::class, 'galeri']);
Route::get('/pengajian', [HomeController::class, 'pengajian']);
Route::get('/team', [HomeController::class, 'team']);
Route::get('/testimonials', [HomeController::class, 'testimonials']);

//auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

//Dashboard
Route::get('/dashboard',[DashboardController::class, 'index'])->middleware('auth');

Route::resource('sliders', SliderController::class)->middleware('auth');
Route::resource('pengajians', PengajianController::class)->middleware('auth');
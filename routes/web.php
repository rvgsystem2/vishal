<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('front.index');
// });
// Route::get('index', [HomeController::class, 'index'])->name('index');
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blogdetail', [HomeController::class, 'blogdetail'])->name('blogdetail');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/servicero', [HomeController::class, 'servicero'])->name('servicero');
Route::get('/camservice', [HomeController::class, 'camservice'])->name('camservice');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/servicedetail', [HomeController::class, 'servicedetail'])->name('servicedetail');
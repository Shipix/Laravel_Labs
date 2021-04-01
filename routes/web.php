<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeMainController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeMainController::class, 'index'])->name('home');

Route::get('/Service', [ServiceController::class, 'index'])->name('service');

Route::get('/Contact', [ContactController::class, 'index'])->name('contact');


Route::get('/Blog', [BlogController::class, 'index'])->name('contact');


Route::get('/Blog-post', function () {
    return view('page.blog-post'); 
});

Auth::routes();

Route::get('/inscription', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

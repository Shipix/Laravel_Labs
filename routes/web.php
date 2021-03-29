<?php

use App\Http\Controllers\HomeMainController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeMainController::class, 'index'])->name('home');

Route::get('/Service', function () {
    return view('page.service'); 
});

Route::get('/Contact', function () {
    return view('page.contact'); 
});

Route::get('/Blog', function () {
    return view('page.blog'); 
});

Route::get('/Blog-post', function () {
    return view('page.blog-post'); 
});

Auth::routes();

Route::get('/inscription', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

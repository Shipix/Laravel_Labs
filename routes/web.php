<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('page.home'); 
});

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
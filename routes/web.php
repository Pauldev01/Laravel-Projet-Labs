<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeMainController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeMainController::class, 'index'])->name('home');

// Route::get('/Service', function () {
//     return view('page.service'); 
// });
Route::resource('/Service', ServiceController::class);

// Route::get('/Contact', function () {
//     return view('page.contact'); 
// });
Route::resource('/Contact', ContactController::class);

Route::get('/Blog', function () {
    return view('page.blog'); 
});

Route::get('/Blog-post', function () {
    return view('page.blog-post'); 
});

Auth::routes();

Route::get('/inscription', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
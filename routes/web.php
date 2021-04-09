<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeMainController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\NewsletterMailController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ValidateController;
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
Route::resource('/Post',PostController::class);

Route::get('/Blog', function () {
    return view('page.blog'); 
});

Route::get('/Blog-post', function () {
    return view('page.blog-post'); 
});

Auth::routes();

Route::get('/inscription', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//contact

Route::resource('/newsletterMail', NewsletterMailController::class);

//auth plus adminLTE
Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

//validate user
Route::get('/validate', [ValidateController::class,'index']);
Route::post('/validateUser/{id}', [ValidateController::class,'validateUser']);
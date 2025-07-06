<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', function () {
    return view('layouts.app');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/libraries', [LibraryController::class, 'index'])->name('libraries');

Route::get('/posts/{post_id}', [PostController::class, 'show'])->name('post.show');

Route::get('/auth', function () {
    return view('layouts.auth');
})->name('auth');

Route::get(('/user/{id}'), function () {
    return view('layouts.user');
})->name('user');


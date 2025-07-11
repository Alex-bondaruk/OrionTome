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

Route::get('/posts/{post}', [PostController::class, 'show'])->name('post.show');

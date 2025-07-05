<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;

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

Route::get('/auth', function () {
    return view('layouts.auth');
})->name('auth');

Route::get(('/user/{id}'), function () {
    return view('layouts.user');
})->name('user');


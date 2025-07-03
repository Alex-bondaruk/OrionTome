<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/libraries', function () {
    return view('libraries');
})->name('libraries');

Route::get('/auth', function () {
    return view('layouts.auth');
})->name('auth');

Route::get(('/user/{id}'), function () {
    return view('layouts.user');
})->name('user');


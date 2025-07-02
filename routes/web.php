<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
})->name('home');

Route::get('/libraries', function () {
    return view('layouts.libraries');
})->name('libraries');

Route::get('/auth', function () {
    return view('layouts.auth');
})->name('auth');

Route::get(('/user/{id}'), function () {
    return view('layouts.user');
})->name('user');


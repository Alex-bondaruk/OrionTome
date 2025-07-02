<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
})->name('home');

Route::get('/libraries', function () {
    return view('layouts.libraries');
})->name('libraries');



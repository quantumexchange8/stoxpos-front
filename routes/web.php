<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/PrivacyPolicy', function () {
    return view('privacyPolicy');
})->name('privacyPolicy');

Route::get('/T&C', function () {
    return view('tnc');
})->name('tnc');

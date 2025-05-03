<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['nama' => 'Riyan Wardhana']);
});

Route::get('/about', function () {
    return view('about');
});

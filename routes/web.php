<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['nama' => 'Riyan Wardhana']);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact', [
        'nama' => 'Riyan Wardhana',
        'nim' => '4233550008',
        'email' => 'riyanwardhana2@gmail.com'
    ]);
});

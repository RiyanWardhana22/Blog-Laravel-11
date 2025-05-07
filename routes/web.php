<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page', 'nama' => 'Riyan Wardhana']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => [
        [
            'title' => 'Sang Pemuja Rahasia',
            'author' => 'Riyan Wardhana',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
      Nobis, fugit unde? A, ullam ad. Quasi, cupiditate! Cumque incidunt tenetur voluptatem eius, 
      error earum blanditiis odit minima aspernatur, ducimus, nam consectetur?'
        ],
        [
            'title' => 'Sang Pengagum Rahasia',
            'author' => 'Riyan Wardhana',
            'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
      Repudiandae, repellendus? Ducimus ea expedita perferendis dicta inventore voluptates ipsum, 
      explicabo ex atque impedit obcaecati quasi! Ex architecto repellendus fugiat distinctio suscipit.'
        ]
    ]]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});

<?php
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

class Post{
    public static function all() {
        return [
            [
                'id' => 1,
                'slug' => 'Sang-Pemuja-Rahasia',
                'title' => 'Sang Pemuja Rahasia',
                'author' => 'Riyan Wardhana',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
          Nobis, fugit unde? A, ullam ad. Quasi, cupiditate! Cumque incidunt tenetur voluptatem eius, 
          error earum blanditiis odit minima aspernatur, ducimus, nam consectetur?'
            ],
            [
                'id' => 2,
                'slug' => 'Sang-Pengagum-Rahasia',
                'title' => 'Sang Pengagum Rahasia',
                'author' => 'Riyan Wardhana',
                'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
          Repudiandae, repellendus? Ducimus ea expedita perferendis dicta inventore voluptates ipsum, 
          explicabo ex atque impedit obcaecati quasi! Ex architecto repellendus fugiat distinctio suscipit.'
            ]
            ];
    }
}

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page', 'nama' => 'Riyan Wardhana']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => Post::all()]);
});

Route::get('/posts/{slug}', function($slug) {
    $post = Arr::first(Post::all(), function($post) use($slug) {
        return $post['slug'] == $slug;
    });
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});

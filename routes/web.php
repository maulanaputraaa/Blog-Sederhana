<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'About Page', 'posts' => [
        [
            'title' => 'Judul Artikel 1',
            'author' => 'Maulana Putra',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate molestias delectus blanditiis minima reprehenderit reiciendis adipisci repellat quibusdam aliquid perferendis, sed asperiores tempora culpa atque aspernatur nisi ut quae suscipit?'
        ],
        [
            'title' => 'Judul Artikel 2',
            'author' => 'Maulana Putra',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi quia dignissimos veritatis iusto quaerat quas autem eius obcaecati laboriosam, voluptates quo eaque saepe fugiat unde culpa natus odio voluptatem accusamus.'
        ]
    ]]);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog Page']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
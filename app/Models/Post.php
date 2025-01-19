<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all ()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Maulana Putra',
                'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate molestias delectus blanditiis minima reprehenderit reiciendis adipisci repellat quibusdam aliquid perferendis, sed asperiores tempora culpa atque aspernatur nisi ut quae suscipit?'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Maulana Putra',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi quia dignissimos veritatis iusto quaerat quas autem eius obcaecati laboriosam, voluptates quo eaque saepe fugiat unde culpa natus odio voluptatem accusamus.'
            ]
        ];
    }

    public static function find ($slug)
    {
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if (! $post) {
            abort(404);
        }

        return $post;
    }
}
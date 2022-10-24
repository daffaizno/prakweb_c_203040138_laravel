<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Daffaiz",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium necessitatibus natus, dolor ratione consequatur aspernatur aliquid voluptatibus ipsam blanditiis repudiandae provident non? Sunt, commodi saepe, voluptate ut atque nam ipsa velit voluptatum ipsum quaerat facilis recusandae qui, nulla neque aspernatur perspiciatis pariatur magni. Iste incidunt, veniam ad perferendis fugiat vero molestias similique fugit, repudiandae dicta, delectus aliquid. Hic similique facilis autem doloribus sequi nemo sint libero voluptas illum earum dicta, ad sed sit architecto soluta debitis expedita dignissimos illo praesentium eum et harum quas ullam nulla? Temporibus nihil quo, delectus eius omnis consequuntur hic dolor necessitatibus non ratione sapiente. Eligendi!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Naufal",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium necessitatibus natus, dolor ratione consequatur aspernatur aliquid voluptatibus ipsam blanditiis repudiandae provident non? Sunt, commodi saepe, voluptate ut atque nam ipsa velit voluptatum ipsum quaerat facilis recusandae qui, nulla neque aspernatur perspiciatis pariatur magni. Iste incidunt, veniam ad perferendis fugiat vero molestias similique fugit, repudiandae dicta, delectus aliquid. "
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}

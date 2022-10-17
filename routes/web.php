<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Daffaiz Naufal",
        "email" => "email@mail.com",
        "image" => "DSC00239.JPG"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
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
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman single posts

Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
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
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"] === $slug) {
            $new_post = $post;
        } 
    }
    return view('post',[
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
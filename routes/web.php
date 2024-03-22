<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title"=> "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Raden Indra Prawirajaya",
        "email"=> "radenprawirajaya@gmail.com",
        "image"=> "img/pasfoto.jpg",
        ]);
});

$blog_posts = [
    "title" => "Judul Post Pertama",
    "author" => "Raden Indra Prawirajaya",
    "Body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque earum doloremque commodi vel cupiditate, veniam blanditiis harum ea? Sunt adipisci ipsum aperiam quae debitis eveniet, ut quam eius eos amet, nulla delectus. Iste similique, qui vel facilis eum incidunt. Nesciunt, inventore molestiae dolor beatae aliquid quo blanditiis quidem iusto fuga!",
];
$blog_posts = [
    "title" => "Judul Post Kedua",
    "author" => "Ananda Rizki Maulana",
    "Body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque earum doloremque commodi vel cupiditate, veniam blanditiis harum ea? Sunt adipisci ipsum aperiam quae debitis eveniet, ut quam eius eos amet, nulla delectus. Iste similique, qui vel facilis eum incidunt. Nesciunt, inventore molestiae dolor beatae aliquid quo blanditiis quidem iusto fuga!",
];

Route::get('/posts', function () {
    $blog_posts = [[
        "title" => "Judul Post Pertama",
        "slug" => "Judul-Post-Pertama",
        "author" => "Raden Indra Prawirajaya",
        "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque earum doloremque commodi vel cupiditate, veniam blanditiis harum ea? Sunt adipisci ipsum aperiam quae debitis eveniet, ut quam eius eos amet, nulla delectus. Iste similique, qui vel facilis eum incidunt. Nesciunt, inventore molestiae dolor beatae aliquid quo blanditiis quidem iusto fuga!",
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "Judul-Post-Kedua",
        "author" => "Ananda Rizki Maulana",
        "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque earum doloremque commodi vel cupiditate, veniam blanditiis harum ea? Sunt adipisci ipsum aperiam quae debitis eveniet, ut quam eius eos amet, nulla delectus. Iste similique, qui vel facilis eum incidunt. Nesciunt, inventore molestiae dolor beatae aliquid quo blanditiis quidem iusto fuga!",
    ]
    ];
    
    return view('posts', [
        "title"=> "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman single post
Route::get('posts/{slug}', function($slug){

    $blog_posts = [[
        "title" => "Judul Post Pertama",
        "slug" => "Judul-Post-Pertama",
        "author" => "Raden Indra Prawirajaya",
        "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque earum doloremque commodi vel cupiditate, veniam blanditiis harum ea? Sunt adipisci ipsum aperiam quae debitis eveniet, ut quam eius eos amet, nulla delectus. Iste similique, qui vel facilis eum incidunt. Nesciunt, inventore molestiae dolor beatae aliquid quo blanditiis quidem iusto fuga!",
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "Judul-Post-Kedua",
        "author" => "Ananda Rizki Maulana",
        "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque earum doloremque commodi vel cupiditate, veniam blanditiis harum ea? Sunt adipisci ipsum aperiam quae debitis eveniet, ut quam eius eos amet, nulla delectus. Iste similique, qui vel facilis eum incidunt. Nesciunt, inventore molestiae dolor beatae aliquid quo blanditiis quidem iusto fuga!",
    ]
    ];

    $new_post= [];
    foreach($blog_posts as $post){
        if($post["slug"] === $slug){
            $new_post =$post;
        }
    }

    if($new_post === []){
        abort(404);
    }


    return view('post', [
        'title'=> 'single post',
        'post'=> $new_post
    ]);
});

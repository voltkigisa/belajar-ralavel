<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [[
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}

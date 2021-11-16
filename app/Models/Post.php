<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Satu",
            "slug" => "judul-satu",
            "author" => "Hamzah Saiful Madjid",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel vitae labore, nemo velit eaque, quis architecto omnis dolorum illum eveniet aliquid dolores amet ipsum saepe? Eligendi ducimus nobis, voluptate delectus enim unde temporibus cum, repellat praesentium, ab aliquid? Eligendi natus sed tempore, ipsam nostrum illum dolorum alias possimus eaque ex blanditiis quos rem odit et esse voluptatum recusandae animi maxime quaerat facilis qui impedit unde adipisci! Consequuntur sint laboriosam quas, repellat commodi, iure recusandae aspernatur aliquid neque eius assumenda praesentium?"
        ],
        [
            "title" => "Judul Dua Terbaru",
            "slug" => "judul-dua",
            "author" => "Rika Anggraeni",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex alias, nemo nisi perferendis ab tenetur atque consequuntur cum odio veritatis, voluptatibus at soluta modi ipsam quia dicta laborum autem delectus, dignissimos impedit ad pariatur! Laboriosam animi, velit eos quaerat placeat illo ab accusamus repellat quis similique. Suscipit enim voluptatum obcaecati consequatur omnis atque cumque illum! Ipsam, at facere odit porro magni exercitationem suscipit sit voluptate ut quam accusamus, doloremque ipsa amet nisi vel! Corrupti nam perspiciatis officia adipisci, enim omnis doloremque repudiandae nobis in libero delectus magni vel a praesentium sapiente harum nihil aperiam? Est quibusdam vero dolorum enim quam."
        ]
    ];

    //methode untuk memanggil semua isis post 

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    //methode untuk memanggil single post 

    public static function find($slug)
    {
        // $posts = self::$blog_posts;
        $posts = static::all();
        // $post = [];

        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}

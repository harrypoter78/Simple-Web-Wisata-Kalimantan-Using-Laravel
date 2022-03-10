<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Dwiki Reza",
            "body" =>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, iure sit beatae exercitationem est quas! Exercitationem perspiciatis saepe ipsa. Laboriosam provident ipsum amet ea! Non quibusdam quis nesciunt, a nam natus? Illo pariatur perferendis rem natus 
            magni aut minus sed sapiente accusantium nam iure eligendi, nobis labore sit nostrum dicta laborum ullam necessitatibus ipsam aperiam corporis! Doloribus, aspernatur animi. Aperiam harum, expedita nostrum earum odio distinctio sunt minima sed. Saepe cupiditate nostrum atque. Ad, perferendis qui similique quia dolorem quo, blanditiis adipisci totam debitis beatae quasi fuga eum earum harum."
        ],
        [
            "title" => "Judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Hazkia Kaikiba Reza",
            "body" =>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, iure sit beatae exercitationem est quas! Exercitationem perspiciatis saepe ipsa. Laboriosam provident ipsum amet ea! Non quibusdam quis nesciunt, a nam natus? Illo pariatur perferendis rem natus 
            magni aut minus sed sapiente accusantium nam iure eligendi, nobis labore sit nostrum dicta laborum ullam necessitatibus ipsam aperiam corporis! Doloribus, aspernatur animi. Aperiam harum, expedita nostrum earum odio distinctio sunt minima sed. Saepe cupiditate nostrum atque. Ad, perferendis qui similique quia dolorem quo, blanditiis adipisci totam debitis beatae quasi fuga eum earum harum."
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

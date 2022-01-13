<?php

namespace App\Models;

class post 
{
    private static $blog_posts =[
        [
            "title" => "Judul Post Pertama",
            "author" => "Ridwan Zae",
            "body" => "
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti laborum dolores 
            enim similique ut sint id? Eveniet quis rem quas, id eius iure quae, fuga alias temporibus, 
            illum perspiciatis impedit!"
        ],
        [
            "title" => "Judul Post Pertama",
            "author" => "Ridwan Zaenudin",
            "body" => "
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti laborum dolores 
            enim similique ut sint id? Eveniet quis rem quas, id eius iure quae, fuga alias temporibus, 
            illum perspiciatis impedit! Ridwan Zae"
        ]
        ];

        public static function all()
        {
            return self::$blog_posts;
        }
}

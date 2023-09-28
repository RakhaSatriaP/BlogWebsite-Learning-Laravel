<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    // private static $blog_posts =[
    //     [
    //         "title" => "Judul Post Pertama",
    //         "slug" => "judul-post-pertama",
    //         "author" => "Rakha Satria",
    //         "body" => " Maiores, dicta! Consequuntur ex aliquam magnam facilis vero fuga culpa............",
    //     ],
    //     [
    //         "title" => "Judul Post Keuda",
    //         "slug" => "judul-post-kedua",
    //         "author" => "Rillo Raiham",
    //         "body" => " Lorem ipsum dolor sit amet consectetur adipisicing elit............",
    //     ],
    
    // ];

    private static $blog_posts =[
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rakha Satria",
            "body" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, dicta! Consequuntur ex aliquam magnam facilis vero fuga culpa. Voluptas reprehenderit ducimus, nisi numquam possimus est eius doloribus amet. Blanditiis, distinctio earum. Minus reprehenderit, laudantium pariatur assumenda possimus commodi ducimus molestias veniam vitae ratione accusamus eaque nulla sint numquam asperiores perspiciatis. Aspernatur quas reprehenderit odit adipisci corporis neque veniam necessitatibus saepe culpa, illo iure eligendi maxime at quia sequi officia quisquam eaque facere unde! Quae delectus optio maiores nihil, repudiandae enim.",
        ],
        [
            "title" => "Judul Post Keuda",
            "slug" => "judul-post-kedua",
            "author" => "Rillo Raiham",
            "body" => " Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro eius nesciunt ex qui reprehenderit sit ea aut necessitatibus? Impedit, nobis consectetur aliquid architecto porro reiciendis placeat non ut praesentium quis nam, veritatis hic consequatur fuga vero earum. Animi nemo assumenda molestias officia quibusdam amet sit. Obcaecati ad dolore itaque pariatur assumenda veritatis non maxime et quia fugiat saepe labore natus fugit similique soluta ut laudantium eum ea, commodi delectus iusto. Recusandae iusto, sapiente obcaecati non vel quos velit sunt aliquam voluptatem nulla earum doloribus ipsa cupiditate, debitis ab sint vitae exercitationem temporibus nobis ipsam quae quasi at blanditiis. Ducimus, totam.",
        ],
    
    ];

    public static function find($slug){
        // $post = [];
        $posts = static::all();
        // foreach(static::all() as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }
        // return $post;
        // return collect(self::$blog_posts2)->firstWhere('slug', $slug);
        return $posts->firstWhere('slug', $slug);
    }

    public static function all(){
        return collect(self::$blog_posts);
    }
}

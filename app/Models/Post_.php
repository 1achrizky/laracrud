<?php

namespace App\Models;

class Post
{
  private static $blog_posts = [
    [
      "title" => "Judul Tulisan Pertama",
      "slug" => "judul-tulisan-pertama",
      "author" => "Achmad Rizky",
      "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, in excepturi nobis iure beatae temporibus harum omnis aut nihil eum quae assumenda, nemo incidunt expedita aliquam. ",
      "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, in excepturi nobis iure beatae temporibus harum omnis aut nihil eum quae assumenda, nemo incidunt expedita aliquam. Consectetur saepe eaque placeat quo corporis esse velit accusamus nisi, consequatur dicta sint porro animi commodi deserunt, et doloremque voluptatum dolorem optio sunt enim, pariatur repellat debitis! Distinctio iusto veritatis, sequi atque fugiat perspiciatis officiis et amet maxime at molestias cum illo similique tenetur, illum tempore quo earum libero enim quia, architecto maiores consequatur.",
    ],
    [
      "title" => "Judul Tulisan Kedua",
      "slug" => "judul-tulisan-kedua",
      "author" => "Rizky Achmad",
      "excerpt" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, odit vitae. Labore aliquid doloribus dolorem voluptatem eos magnam ducimus nesciunt officiis excepturi laboriosam asperiores, quis quia omnis temporibus ad explicabo non.",
      "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, odit vitae. Labore aliquid doloribus dolorem voluptatem eos magnam ducimus nesciunt officiis excepturi laboriosam asperiores, quis quia omnis temporibus ad explicabo non. Vel dolor voluptates, quis, deserunt doloribus nobis iure qui numquam ex itaque enim sapiente dignissimos ipsa molestiae consectetur beatae. Tenetur, consequatur, earum porro fugit neque, est minus deleniti sunt eius exercitationem provident? Dolorem exercitationem fuga at earum pariatur quasi sapiente dicta saepe nam? Corrupti ullam, enim obcaecati optio officia ad qui quasi ipsum corporis in doloremque accusantium ea sed excepturi distinctio repudiandae, dicta omnis earum veritatis est eius consectetur?",
    ],
  ];

  public static function all(){
    // return self::$blog_posts;
    return collect(self::$blog_posts);
  }
  
  public static function find($slug){
    // $blog_post = self::$blog_posts;
    // $single_post = [];
    // foreach($blog_post as $post){
    //   if($post["slug"] === $slug) $single_post = $post;
    // }
    // return $single_post;

    $blog_post = static::all();
    return $blog_post->firstWhere('slug', $slug);
  }
}

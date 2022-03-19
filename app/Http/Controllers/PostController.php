<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
      return view('posts', [
        "title" => "Posts",        
        "posts" => Post::latest()->get(), // Post::all(),
      ]);
    }
    
    // public function show($slug){
    //   return view('post', [
    //     "title" => "Post",
    //     "post" => Post::find($slug), // $single_post,
    //   ]);
    // }
    
    public function show(Post $post){
      return view('post', [
        "title" => "Single Post",
        "post" => $post, // $single_post,
      ]);
    }
}

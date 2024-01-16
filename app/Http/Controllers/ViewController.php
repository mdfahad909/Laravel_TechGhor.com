<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class ViewController extends Controller
{
   public function index()
   {
      return view('index');
   }


   public function about()
   {
      return view('about');
   }

   public function blog(Post $post, Category $category)
   {
      $post = $post->get();
      $post_limit = Post::orderBy('id', 'DESC')->get()->take(3);
      $category = $category->get();
      return view('blog', compact('post', 'category', 'post_limit'));
   }

   public function blogDetails(Post $post, Category $category)
   {
      $post = $post->get();
      $post_limit = Post::orderBy('id', 'DESC')->get()->take(3);
      $category = $category->get();
      return view('blog-details', compact('post', 'category', 'post_limit'));
   }

   public function blog_show_div(Post $post, Category $category)
   {
      $post = $post->get();
      $post_limit = Post::orderBy('id', 'DESC')->get()->take(3);
      $category = $category->get();
      return view('blog_show_div', compact('post', 'category', 'post_limit'));
   }
}

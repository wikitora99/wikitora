<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article as Posts;

class ArticleController extends Controller
{
  
  public function index()
  {
    return view('pages.posts', [
      'title' => 'Blog Posts',
      'posts' => Posts::getAll()
    ]);
  }

  public function post($slug)
  {
    $post = Posts::getPost($slug);

    return view('pages.post', [
      'title' => $post['title'],
      'post' => $post
    ]);
  }

}

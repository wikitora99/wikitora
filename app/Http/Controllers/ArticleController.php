<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
  
  public function index()
  {
    return view('pages.posts', [
      'title' => 'Blog Posts',
      'posts' => Article::all()
    ]);
  }

  public function single($slug)
  {
    $post = Article::firstWhere('slug', $slug);

    return view('pages.post', [
      'title' => $post->title,
      'post' => $post
    ]);
  }

}

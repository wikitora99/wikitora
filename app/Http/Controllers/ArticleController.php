<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Article;


class ArticleController extends Controller
{
  
  public function index()
  {
    return view('pages.posts', [
      'title' => 'Blog Area',
      'posts' => Article::all()
    ]);
  }

  public function post(Article $post)
  {
    return view('pages.post', [
      'title' => $post->title,
      'post' => $post
    ]);
  }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Article;
use App\Models\Category;


class ArticleController extends Controller
{
  
  public function index()
  {
    return view('pages.posts', [
      'title' => 'Blog Area',
      'posts' => Article::newest()
                  ->filter(request(['search', 'category', 'author']))
                  ->paginate(5)->withQueryString(),
      'popular' => Article::popular()->get(),
      'categories' => Category::all()
    ]);
  }

  public function post(Article $post)
  {
    return view('pages.post', [
      'title' => $post->title,
      'post' => $post,
      'popular' => Article::popular()->get(),
      'categories' => Category::all()
    ]);
  }

}

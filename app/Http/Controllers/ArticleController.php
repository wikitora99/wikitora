<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ {
  Article, 
  Category,
  Tag
};


class ArticleController extends Controller
{
  
  public function index()
  {
    $posts = Article::newest()
              ->filter(request([
                'search', 'category', 'author']))
              ->paginate(5)->withQueryString();

    return view('pages.posts', [
      'title' => 'Blog Area',
      'posts' => $posts,
      'popular' => Article::popular()->get(),
      'categories' => Category::reorder()->get(),
      'tags' => Tag::all()
    ]);
  }

  public function post(Article $post)
  {
    return view('pages.post', [
      'title' => $post->title,
      'post' => $post,
      'popular' => Article::popular()->get(),
      'categories' => Category::reorder()->get(),
      'tags' => Tag::all()
    ]);
  }

}

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

    $title = '';

    if (request('search')){
      $title = " with '".request('search')."'";
    }else if (request('category')){
      $title = " in '".request('category')."'";
    }else if (request('author')){
      $title = " by '".request('author')."'";
    }

    $posts = Article::newest()
              ->filter(request([
                'search', 'category', 'author']))
              ->paginate(5)->withQueryString();

    return view('pages.posts', [
      'title' => 'All Post'.$title,
      'posts' => $posts,
      'popular' => Article::popular()->get(),
      'categories' => Category::reorder()->get(),
      'tags' => Tag::all()
    ]);
  }

  public function show(Article $post)
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

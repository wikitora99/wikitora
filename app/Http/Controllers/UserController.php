<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ { User, Article };

class UserController extends Controller
{

  public function index(User $author)
  {
    return view('pages.posts', [
      'title' => 'Posted by '.$author->name,
      'posts' => $author->posts
                  ->load('category', 'author')
      'popular' => Article::popular()->get(),
      'categories' => Category::all()
    ]);
  }

}

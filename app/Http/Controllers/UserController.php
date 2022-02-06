<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

  public function index(User $author)
  {
    return view('pages.posts', [
      'title' => 'Posted by '.$author->name,
      'posts' => $author->posts
                  ->load('category', 'author')
    ]);
  }

}

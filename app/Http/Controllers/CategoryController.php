<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

  public function index(Category $category)
  {
    return view('pages.posts', [
      'title' => $category->name.' Posts',
      'posts' => $category->posts
                  ->load('category', 'author')
    ]);
  }

}

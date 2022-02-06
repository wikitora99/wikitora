<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

  public function index(Category $category)
  {
    return view('pages.category', [
      'title' => 'Blog Category: '.$category->name,
      'posts' => $category->posts
    ]);
  }

}

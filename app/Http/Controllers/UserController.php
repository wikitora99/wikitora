<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

  public function index(User $author)
  {
    //
  }



  public function works()
  {
    return view('pages.works', ['title' => 'My Works']);
  }

}

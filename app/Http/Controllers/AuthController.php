<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
  
  public function index()
  {
    return view('admin.auth.login', [
      'title' => 'Login'
    ]);
  }

  public function login(Request $request)
  {

  }

}

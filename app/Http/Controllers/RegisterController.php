<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
  
  public function index()
  {
    return view('dashboard.auth.register', [
      'title' => 'Register'
    ]);
  }

  public function store(Request $request)
  {
    
  }

}

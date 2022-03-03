<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
  
  public function index()
  {
    return view('panel.auth.register', [
      'title' => 'Register'
    ]);
  }

  public function store(Request $request)
  {
    $validated = $request->validate([
      'name' => 'required|min:5|max:50',
      'username' => 'required|min:5|max:50|alpha_dash|unique:users,username',
      'email' => 'required|email:dns|unique:users,email',
      'password' => 'required|min:8'
    ]);

    $validated['password'] = Hash::make($validated['password']);

    User::create($validated);

    return redirect()->route('dashboard.login')
            ->with('success', 'Your account has been created.');
  }

}

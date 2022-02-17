<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
  
  public function index()
  {
    return view('panel.auth.login', [
      'title' => 'Login'
    ]);
  }

  public function login(Request $request)
  {
    $credentials = $request->validate([
      'username' => 'required',
      'password' => 'required'
    ]);

    if (Auth::attempt($credentials)){
      $request->session()->regenerate();
      return redirect()->intended('/dashboard')->with('success', auth()->user()->name);
    }

    return back()->with('failed', 'The provided credentials do not match our records.');
  }

  public function logout()
  {
    Auth::logout();

    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect()->route('dashboard.login')
            ->with('success', 'You have been logout.');
  }

}

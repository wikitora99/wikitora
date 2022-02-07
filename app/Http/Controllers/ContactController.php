<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ContactController extends Controller
{
  
  public function send(Request $request)
  {

    $validateData = $request->validate([
      'message' => ['required', 'min:5'],
      'name' => ['required', 'min:3', 'max:255'],
      'email' => ['required', 'email:dns'],
      'subject' => ['required', 'min:5', 'max:255']
    ]);

    dd('Your message has been sent!');
  }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  use HasFactory;  

  private static $blog_posts = [
    [
      "title" => "Wakanda Declared War to Suriname, Will World War 3 Happen?",
      "slug" => "wakanda-war-declaration",
      "date" => ['05', "Feb"],
      "thumb" => "single_blog_2.png",
      "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rhoncus non nisi nec iaculis. Vestibulum elementum risus ut neque vulputate, id ullamcorper lacus vestibulum.",
      "category" => ["Politic", "Economy"],
      "author" => "John Doe"      
    ],
    [
      "title" => "Is Math Important To Be a Software Engineer?",
      "slug" => "math-in-programming",
      "date" => ['02', "Feb"],
      "thumb" => "single_blog_3.png",
      "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rhoncus non nisi nec iaculis. Vestibulum elementum risus ut neque vulputate, id ullamcorper lacus vestibulum.",
      "category" => ["Technology", "Career"],
      "author" => "Okitora Winnetou"
    ],
    [
      "title" => "Google inks pact for new 35-storey office",
      "slug" => "google-inks",
      "date" => ['15', "Jan"],
      "thumb" => "single_blog_1.png",
      "text" => "That dominion stars lights dominion divide years for fourth have don't stars is that he earth it first without heaven in place seed it second morning saying.",
      "category" => ["Travel", "Lifestyle"],
      "author" => "Fulan bin Fulan"
    ]
  ];

  public static function getAll()
  {
    return self::$blog_posts;
  }

  public static function getPost($slug)
  {
    $posts = self::$blog_posts;
    $post = [];

    foreach ($posts as $p) {
      if ($p['slug'] === $slug){
        $post = $p;
      }
    }

    return $p;
  }
}

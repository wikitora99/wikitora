<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', function () {
//   return view('welcome');
// });


Route::get('/', function (){
  return view('pages.home', [
    'title' => 'A Living Robot'
  ]);
});

Route::get('/blog', function (){
  return view('pages.blog', [
    'title' => 'Blog',
    'posts' => Article::getAll()
  ]);
});

Route::get('/blog/{slug}', function ($slug){
  $post = Article::getPost($slug);

  return view('pages.post', [
    'title' => $post['title'],
    'post' => $post
  ]);
});



<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ {
  ArticleController as Article,
  CategoryController as Category,
  CommentController as Comment,
  TagController as Tag
};

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



Route::controller(Article::class)->group(function (){
  Route::get('/blog', 'index');
  Route::get('/blog/{post:slug}', 'post');
});


Route::get('/category/{category:slug}', [Category::class, 'index']);


Route::get('/', function(){
  return view('pages.home', [
    'title' => 'A Living Robot'
  ]);
});

Route::get('/about', function(){ 
  return view('pages.about', [
    'title' => 'About Me'
  ]); 
});

Route::get('/services', function(){ 
  return view('pages.services', [
    'title' => 'My Services'
  ]); 
});

Route::get('/works', function(){ 
  return view('pages.works', [
    'title' => 'My Works'
  ]);
});

Route::get('/contact', function(){ 
  return view('pages.contact', [
    'title' => 'Contact Me'
  ]);
});




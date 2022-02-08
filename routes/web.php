<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ {
  ArticleController as Article,
  CategoryController as Category,
  UserController as Author,
  ContactController as Contact
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



Route::get('/', function(){
  return view('pages.home', [
    'title' => 'A Living Robot'
  ]);
});


Route::prefix('/')->group(function(){

  Route::controller(Article::class)->group(function (){
    Route::get('blog', 'index');
    Route::get('blog/{post:slug}', 'post');
  });

  Route::get('works', function(){ 
    return view('pages.works', ['title' => 'My Works']);
  });

  Route::post('/sendmail', [Contact::class, 'send']);

});



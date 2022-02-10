<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ {
  ArticleController as Article,
  AuthController as Auth,
  RegisterController as Regist
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



Route::get('/', function() {
  return view('pages.home', [
    'title' => 'A Living Robot'
  ]);
});

Route::controller(Article::class)->group(function() {
  Route::get('/blog', 'index');
  Route::get('/blog/{post:slug}', 'post');
});

Route::get('/works', function() { 
  return view('pages.works', [
    'title' => 'My Works'
  ]);
});


Route::name('dashboard.')->group(function() {

  Route::controller(Auth::class)->group(function() {
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'login')->name('postLogin');
  });  

  Route::controller(Regist::class)->group(function() {
    Route::get('/register', 'index')->name('register');
    Route::post('/register', 'store')->name('postRegister');
  });  

  Route::get('/dashboard', function(){
    return view('admin.dashboard', [
      'title' => 'Dashboard'
    ]);
  })->name('home');

});






<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ {
  ArticleController as Article,
  AuthController as Auth,
  RegisterController as Regist,
  DashboardController as Dashboard
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

Route::resource('post', Article::class);

Route::get('works', function() { 
  return view('pages.works', [
    'title' => 'My Works'
  ]);
});

Route::group(['name' => 'dashboard.'], function() {

  Route::controller(Auth::class)->group(function() {
    Route::get('login', 'index')->middleware('guest')->name('login');
    Route::post('login', 'login')->name('postLogin');
    Route::post('logout', 'logout')->middleware('auth')->name('logout');
  });  

  Route::controller(Regist::class)->group(function() {
    Route::get('register', 'index')->middleware('guest')->name('register');
    Route::post('register', 'store')->name('postRegister');
  });  

  Route::controller(Dashboard::class)->group(function() {
    Route::get('dashboard', 'index')->middleware('auth')->name('home');
  });

});






<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ {
  ArticleController as Article,
  AuthController as Auth,
  RegisterController as Regist,
  DashboardController as Dashboard,
  UserController as User
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


Route::group(['prefix' => '/'], function() {
  Route::get('/', function() { return view('pages.home', ['title' => 'A Living Robot']); });
  Route::get('works', [User::class, 'works']);

  Route::resource('post', Article::class);
});


Route::name('dashboard.')->group(function() {

  Route::controller(Auth::class)->group(function() {
    Route::get('login', 'index')->name('login');
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






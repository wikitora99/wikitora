<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController as Posts;

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

Route::get('/blog', [Posts::class, 'index']);
Route::get('/blog/{slug}', [Posts::class, 'post']);



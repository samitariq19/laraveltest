<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/test', function () {
//     // return view('test');
//     $name = request('name');
//     return view('test', ['name' => $name]);
// });

Route::get('/', function() {
    // return view('welcome');
    return view('newwelcome');
});

Route::get('/about', function() {
    $article = App\Article::take(3)->latest()->get();

    return view('about', [
        'articles' => $article
    ]);
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/test', 'PostsController@show');

Route::get('/articles', 'ArticlesController@index');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{article}', 'ArticlesController@show');


Route::get('posts/{post}', 'PostsController@show');
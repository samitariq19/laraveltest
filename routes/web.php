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

Route::get('/test', 'PostsController@show');

Route::get('posts/{post}', function ($post) {
    $posts = [
        'first' => 'This is the first one',
        'second' => 'this is the second one'
    ];

    if (! array_key_exists($post, $posts)) {
        abort(404);
    }

    return view('post', [ 'post' => $posts[$post]]);
});
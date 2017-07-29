<?php

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

Route::get('/', function () {
    return view('front.home.home');
});
Route::get('logout', 'views\front\AuthController@logout')->name('logout');
Route::group(['prefix' => 'blog'], function () {
    Route::get('/', 'views\front\BlogController@index')->name('blog');
    Route::get('{slug}', 'views\front\BlogController@show')->name('blog.post');
    Route::get('category/{category_id}', 'views\front\BlogController@getPostByCat')->name('blog');
});

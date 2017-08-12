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

Route::get('qui-sommes-nous', 'views\front\PageController@about')->name('qui-sommes-nous');
Route::get('offres', 'views\front\PageController@offer')->name('offer');

Route::get('page/{slug}', 'views\front\PageController@loadPage');

Route::group(['prefix' => 'projets'], function () {
    Route::get('/', 'views\front\ProjetController@index')->name('projets');
    Route::get('{slug}', 'views\front\ProjetController@show')->name('projet');
});

Route::group(['prefix' => 'blog'], function () {
    Route::get('/', 'views\front\BlogController@index')->name('blog');
    Route::get('{slug}', 'views\front\BlogController@show')->name('blog.post');
    Route::get('category/{category_id}', 'views\front\BlogController@getPostByCat')->name('blog');
});

Route::group(['prefix' => 'events'], function () {
    Route::get('/', 'views\front\EventController@index')->name('events');
    Route::get('{slug}', 'views\front\EventController@show')->name('events.post');
});

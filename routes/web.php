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
Route::group(['middleware' => 'auth'], function () {

Route::get('/posts/create', 'PostController@showCreateForm')->name('posts.create');
Route::post('/posts/create', 'PostController@create');
Route::get('/posts/{id}/edit', 'PostController@showEditform')->name('posts.edit');
Route::post('/posts/{id}/edit', 'PostController@edit');
});
Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/posts/{id}','PostController@show')->name('posts.show');
Route::get('/', 'PostController@index')->name('posts.index');
Route::get('/users/{id}', 'UserController@show')->name('users.show');
Auth::routes();

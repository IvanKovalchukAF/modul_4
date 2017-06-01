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

Route::get('/', 'CategoriesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/category/{id}', 'CategoriesController@show');

Route::get('/post/{id}', 'PostsController@show');

Route::get('/post/{post}/comments/{id}', 'CommentsController@store');

Route::get('post/{id}/islikedbyme', 'PostController@isLikedByMe');

Route::post('post/like', 'PostController@like');

Route::get('/home/crud', 'CrudController@index');

Route::post('/home/crud', 'CrudController@store');

Route::get('/crud/create', 'CrudController@create');

Route::get('/crud/edit/{id}', 'CrudController@edit');

Route::patch('/crud/{post}', 'CrudController@update');

Route::get('/crud/delete/{post}', 'CrudController@destroy');

Route::get('/crud/delete/image', 'CrudController@destroyImg');

Route::get('/crud/categories', function () {
    return view('admin-lte.category.categories');
});

Route::get('/crud/category/{id}', 'CrudController@showPostsById');

Route::get('/crud/create/category', function () {
    return view('admin-lte.category.createCategory');
});

Route::post('/crud/create/category', 'CrudController@createCategory');

Route::get('/crud/edit/category/{category}', 'CrudController@editCategory');

Route::patch('/crud/edit/category/{category}', 'CrudController@updateCategory');

Route::get('/crud/delete/category/{category}', 'CrudController@destroyCategory');

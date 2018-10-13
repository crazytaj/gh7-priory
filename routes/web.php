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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/php', function () {
    return redirect('http://localhost/phpmyadmin');
});
Route::get('/laravel', function() {
    return view('welcome');
});
Route::get('/mail', function () {
    return view('mail');
});
Route::resource('comment', 'CommentsController');
Route::resource('email', 'EmailController');

Route::resource('posts', 'PostsController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

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
Use Illuminate\Mail\Mailable;

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/php', function () {
    return redirect('http://localhost/phpmyadmin');
});
Route::get('/laravel', function() {
    return view('welcome');
});
Route::resource('comment', 'CommentsController');

Route::resource('posts', 'PostsController');

Auth::routes();

Route::get('sendbasicemail','EmailController@basic_email');
Route::get('sendhtmlemail','EmailController@html_email');
Route::get('sendattachmentemail','EmailController@attachment_email');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

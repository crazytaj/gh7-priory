<?php
use Stichoza\GoogleTranslate\TranslateClient;
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
Route::get('/services', 'EntrysController@index');
Route::get('/php', function () {
    return redirect('http://localhost/phpmyadmin');
});
Route::get('mail/send/{post}', 'MailController@send');
Route::get('/mail', 'MailController@create');
Route::post('/mail', 'MailController@store');
Route::get('/laravel', function() {
    return view('welcome');
});
Route::resource('comment', 'CommentsController');

Route::resource('entry', 'EntrysController');
Route::resource('posts', 'PostsController');
Route::get('test', function () {
    return view('test');
});


Auth::routes();


Route::get('/english', function() {
    $tr = new TranslateClient(null, 'en');
    return redirect('index');
});
Route::get('/french', function() {
    $tr = new TranslateClient(null, 'fr');
    return redirect('/')->with('tr', $tr);
});
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

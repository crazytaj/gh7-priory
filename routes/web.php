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
Route::get('/services', 'PagesController@services');
Route::get('/php', function () {
    return redirect('http://localhost/phpmyadmin');
});
Route::get('mail/send', 'MailController@send');
Route::get('/laravel', function() {
    return view('welcome');
});
Route::resource('comment', 'CommentsController');

Route::resource('sidenav', 'PostsController');


Auth::routes();

Route::get('sendbasicemail','EmailController@basic_email');
Route::get('/english', function() {
    $tr = new TranslateClient(null, 'en');
    return redirect('index');
});
Route::get('/french', function() {
    $tr = new TranslateClient(null, 'fr');
    return redirect('/')->with('tr', $tr);
});
Route::get('/test', function() {
    echo 'hi';
});
Route::get('sendhtmlemail','EmailController@html_email');
Route::get('sendattachmentemail','EmailController@attachment_email');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

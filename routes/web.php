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
    return view('welcome');
});


//routes for post controlelr




Route::get('/posts/create','PostsController@create');

Route::get('/posts/{post}','PostsController@show');

Route::post('/posts','PostsController@store');



//routes for comments controller...

Route::post('/posts/{post}/comments','CommentsController@store');


Auth::routes();
Route::get('/posts','PostsController@index')->name('home');
//Route::get('/home', 'HomeController@index')->name('home');



// Route::get('/register','RegistrationController@create');

// Route::post('/register','RegistrationController@store');

// Route::get('/login','SessionsController@create');
// //Route::post('/login','SessionsController@create');



// Route::post('/logout','SessionsController@destroy');
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
    return view('frontend/index');
});

Route::get('about', function () {
  return view('frontend/about');
});

Route::get('0/about', 'ContextController@about');

Route::get('context/blog', 'ContextController@blog');
    
Route::get('context/contact', 'ContextController@contact');


Auth::routes(['verify' => true]);

Route::group([        
    'middleware' => ['auth', 'verified'],    
  ], function () {
    
    Route::get('testing', 'HomeController@test');
    
    Route::get('/home', 'HomeController@index')->name('home');
    
    Route::resource('users', 'UserController');
    
    Route::resource('products', 'ProductController');

    Route::resource('tasks', 'TaskController');

  });
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
Route::get('/', function(){
    return view('frontend.pages.welcome');
});
Route::get('/about', function(){
    return view('frontend.pages.about');
});
Route::get('/products','PostController@index');

Route::resource('/feedbacks', 'FeedController');

Route::group(['prefix'=>'admin','middleware'=>['auth'], 'as'=>'admin.'],function(){
    Route::resource('product','ProductController');

    Route::resource('feedback','FeedbackController');
    
});



Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

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

// Route::get('/', function () {
//     return view('front.index');
// });
Route::get('/','FrontController@index')->name('home');
<<<<<<< HEAD
Route::get('/history','FrontController@history')->name('history');
Route::get('/mission','FrontController@mission')->name('mission');
Route::get('/values','FrontController@values')->name('values');
Route::get('/board','FrontController@board')->name('board');
=======
Route::get('/contact','ContactController@index')->name('contact');
Route::get('/products','ProductController@index')->name('product.all');
Route::get('/advartise','AdvartiseController@index')->name('advartise.all');
>>>>>>> 38968b65531b6270fdfb296e3d2345ff40985471

// Route::group(['prefix'=>'home'],function(){
// 	Route::get('/','FrontController@index')->name('home');
// });

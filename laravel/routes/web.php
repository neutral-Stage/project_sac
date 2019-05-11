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

// Route::get('/history', function () {
//     return 'got it';
// })->name('history');
Route::get('/','FrontController@index')->name('home');

Route::get('/history','FrontController@history')->name('history');
Route::get('/mission','FrontController@mission')->name('mission');
Route::get('/values','FrontController@values')->name('values');
Route::get('/board','FrontController@board')->name('board');

Route::get('/contact','ContactController@index')->name('contact');
Route::get('/products','ProductController@index')->name('product.all');
Route::get('/advartise','AdvartiseController@index')->name('advartise.all');


//Choir
Route::get('/choir','ChoirController@index')->name('choir');
Route::get('/choir-volunteer','ChoirController@volunteer')->name('choir-volunteer');
Route::get('/choir-events','ChoirController@events')->name('choir-events');
Route::get('/choir-testimony','ChoirController@testimony')->name('choir-testimony');

//SOW
Route::get('/sow','SowController@index')->name('sow');

//Volenteer
Route::get('/volunteer', 'VolController@index')->name('volunteer');
// Route::group(['prefix'=>'home'],function(){
// 	Route::get('/','FrontController@index')->name('home');
// });

//LFU
Route::get('/LFU-blanket', 'LFUController@blanket')->name('blanket');
Route::get('/LFU-flood', 'LFUController@flood')->name('flood');
Route::get('/LFU-children-activities', 'LFUController@child')->name('child');

//Impact Nation
Route::get('/Impact-Nation/NPWC', 'ImpactController@npwc')->name('npwc');
Route::get('/Impact-Nation/RT', 'ImpactController@rt')->name('rt');
Route::get('/Impact-Nation/GCEC', 'ImpactController@gcec')->name('gcec');



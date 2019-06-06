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
Route::get('/','FrontController@index')->name('home.front');

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
Route::get('/wme-course','SowController@wme')->name('wme');
Route::get('/impact-story/bangladesh','SowController@imp_bn')->name('imp_bn');
Route::get('/impact-story/india','SowController@imp_in')->name('imp_in');

//Arts
Route::get('/live-drama','ArtsController@index')->name('live_drama');
Route::get('/ttc','ArtsController@ttc')->name('ttc');
Route::get('/case','ArtsController@case')->name('case');
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
Route::get('/Impact-Nation/SOL', 'ImpactController@sol')->name('sol');



Auth::routes();
Route::get('/home', 'Dashboard\dashboardController@index')->name('home')->middleware('auth');

//Dashboard Route
Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/', 'Dashboard\dashboardController@index')->name('admin.dashboard');
});

//slider Route
Route::prefix('dashboard/slider')->middleware('auth')->group(function () {
    Route::get('/create', 'Dashboard\sliderController@create')->name('slider.create');
    Route::post('/store', 'Dashboard\sliderController@store')->name('slider.store');
    Route::get('/manage', 'Dashboard\sliderController@index')->name('slider.index');
    Route::get('/edit/{id}', 'Dashboard\sliderController@edit')->name('slider.edit');
    Route::post('/update/{id}', 'Dashboard\sliderController@update')->name('slider.update');
    Route::get('/delete/{id}', 'Dashboard\sliderController@delete')->name('slider.delete');
});

//Gallery Route
Route::prefix('dashboard')->middleware('auth')->group(function () {
	Route::resource('/gallery', 'Dashboard\GalleryController');
});

//Upcoming Event//
Route::prefix('dashboard')->middleware('auth')->group(function () {
	Route::resource('/event/upcoming', 'Dashboard\UpcomingEventController');
	Route::resource('/event/image', 'Dashboard\UcEventImageController');
	Route::get('/event/image/{id}/form', 'Dashboard\UcEventImageController@create')->name('event.image.create');
});

//Dashboard Choir//
Route::prefix('dashboard')->middleware('auth')->group(function () {
	Route::get('/choir-vdo/create', 'Dashboard\ChoirController@video_create')->name('choir.video.create');
	Route::post('/choir-vdo/update', 'Dashboard\ChoirController@video_update')->name('choir.video.update');

	//choir member
	Route::resource('/choir/team_member', 'Dashboard\ChoirMemberController');
});



    

//user access control
Route::prefix('s_admin')->middleware('auth','Check_super_admin')->group(function () {
	Route::get('/user/all', 'Dashboard\UserAccessController@index')->name('user.all');
	Route::get('/user/access/view/{id}', 'Dashboard\UserAccessController@access')->name('user.access.view');

	Route::get('/user/access/set_role/{id}/{role_id}', 'Dashboard\UserAccessController@set_role')->name('make.author');
	Route::get('/user/access/seize_role/{id}/{role_id}', 'Dashboard\UserAccessController@seize_role')->name('suspend.author');
});

//Authorization Failed page
Route::get('/auth/failed', 'Dashboard\dashboardController@auth_failed')->name('user.auth.failed');


<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Auth::routes(['register'=>false]);
Route::get('/', 'PageController@index')->name('index');
Route::get('/index', 'PageController@index')->name('index');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::get('/gallery', 'PageController@gallery')->name('gallery');
Route::resource('/gallerys','GallerysController');
Route::get('/services', 'PageController@service')->name('service');
Route::get('/service_detail/material', 'PageController@material')->name('material');
Route::get('/service_detail/geo_technical', 'PageController@geo_technical')->name('geo_technical');
Route::get('/service_detail/soil_investigation', 'PageController@soil_investigation')->name('soil_investigation');
Route::get('/service_detail/architectural', 'PageController@architectural')->name('architectural');
Route::get('/service_detail/surveying', 'PageController@surveying')->name('surveying');
Route::get('/service_detail/highway', 'PageController@highway')->name('highway');
Route::get('/clients', 'PageController@clients')->name('clients');
Route::get('contact-us', 'ContactUsController@contactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUsController@contactSaveData']);


Route::get('/send-mail',function(){
	$details= [
		'title'=>'mail from surfside media',
		'body'=>'hello'
	];
	\Mail::to('satyapratices17@gmail.com')->send(new \App\Mail\TestMail($details));
	echo 'email has sent';
});


Auth::routes();


Route::group(['middleware' => 'auth'], function () {
	Route::resource('/admin/user', 'UserController', ['except' => ['show']]);
	Route::get('/admin/profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('/admin/profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('/admin/profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
	Route::resource('/admin/category', 'CategoryController');
	Route::resource('/admin/contact','ContactUsController');
	Route::resource('/admin/gallery','ProductController');
	Route::resource('/admin/client','ClientController');
	Route::resource('/admin/Slider','SliderController');
	Route::get('/admin', 'SliderController@index')->name('home');
	Route::get('/admin/home', 'SliderController@index')->name('home');	
	Route::get('/admin/{page}', ['as' => 'page.index', 'uses' => 'PageController@indexs']);
});





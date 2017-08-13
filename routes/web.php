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

Route::get('/', 'GuestController@index');
Route::get('/detail/{id}', 'GuestController@show');
Route::get('/belanja', 'GuestController@shop');
Route::get('/kategori', 'GuestController@category');
Route::get('/kategori/detail/{id}', 'GuestController@categorydetail');
Route::get('/cara-kerja', 'GuestController@work');
// Route::get('/tentang-kami', 'GuestController@about');
Route::get('/tentang-kami', 'GuestController@what');

Route::get('/search',[
		'as' => 'search',
		'uses' => 'GuestController@store'
	]);

Auth::routes();
Route::get('/home', 'HomeController@index');

Route::group(['prefix'=>'admin', 'middleware'=>['auth', 'role:admin']], function(){
	Route::resource('categories', 'CategoriesController');
	Route::resource('products', 'ProductsController');
});

$s = 'social.';
Route::get('/social/redirect/{provider}',   ['as' => $s . 'redirect',   'uses' => 'Auth\AuthController@getSocialRedirect']);
Route::get('/social/handle/{provider}',     ['as' => $s . 'handle',     'uses' => 'Auth\AuthController@getSocialHandle']);

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



Route::get('/', 'HomepageController@index')->name('home');
Route::get('/personal', 'PersonalController@index')->name('personal');
Route::get('/registration', 'RegistrationController@index')->name('registered');
Route::post('/registration', 'UserController@store')->name('registered.store');
Route::post('/personal', 'UserController@login')->name('authorization');
Route::get('/catalog', 'CatalogController@index')->name('catalog');
Route::get('/search', 'SearchProductController@search')->name('search');
Route::get('/filter', 'FilterController@showFilter')->name('filter');
Route::get('productcurrent', 'ProductCurrentController@index')->name('product');
Route::get('/promoutions', 'PromoutionsController@index')->name('promo');
Route::get('/currentpromo/{slug}', 'PromoutionsController@currentPromo')->name("currentpromo");
Route::get('/gallery', 'GalleryController@index')->name('gallery');
Route::get('/gallery/{slug}', 'GalleryController@showAlbum')->name('album');
Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blogpost/{slug}', 'BlogController@currentPost')->name('blogpost');
Route::get('/partner', 'PartnerController@index')->name('partner');
Route::get('/lombards', 'LombardController@index')->name('lombards');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/salons', 'SalonController@index')->name('salons');



Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin'], function () {
    Route::get('/', 'MainController@index')->name('admin');
    Route::resource('/products', 'ProductController');
    Route::resource('/categories', 'CategoryController');
    Route::resource('/materials', 'MaterialController');
    Route::resource('/stones', 'StoneController');
    Route::get('/autoload', 'ProductAutoloadController@create')->name('autoload');
    Route::post('/autoload', 'ProductAutoloadController@autoloadFiles')->name('uploadprod');
    Route::resource('/promotions', 'PromoutionController');
    Route::resource('/gallery', 'GalleryController');
    Route::resource('/blog', 'BlogController');
    Route::resource('/partner', 'PartnerController');
});





Route::get('/logout', 'UserController@logout')->name('logout')->middleware('auth');
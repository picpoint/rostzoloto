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
Route::post('/catalog', 'CatalogController@showProds')->name('filter');


Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin'], function () {
    Route::get('/', 'MainController@index')->name('admin');
    Route::resource('/products', 'ProductController');
    Route::resource('/categories', 'CategoryController');
    Route::resource('/materials', 'MaterialController');
    Route::resource('/stones', 'StoneController');
    Route::get('/autoload', 'ProductAutoloadController@create')->name('autoload');
    Route::post('/autoload', 'ProductAutoloadController@autoloadFiles')->name('uploadprod');
});





Route::get('/logout', 'UserController@logout')->name('logout')->middleware('auth');
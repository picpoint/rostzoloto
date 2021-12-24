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



Route::get('/logout', 'UserController@logout')->name('logout')->middleware('auth');
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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('main');

Route::get('/contact', [
    'uses' => 'App\Http\Controllers\ContactUsFormController@createForm'
]);

Route::post('/contact', [
    'uses' => 'App\Http\Controllers\ContactUsFormController@ContactUsForm',
    'as' => 'contact'
]);

Route::get('/articles', 'App\Http\Controllers\ArticlesController@index')->name('articles');
Route::get('/article/{id}', 'App\Http\Controllers\ArticlesController@show')->name('show_articles');


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


Route::resource('/', 'NewsController');
Route::get('/index','NewsController@index');
Route::get('/news/create', 'NewsController@create');
Route::post('/create','NewsController@store');
Route::get('/page={q}','NewsController@indexpage')->name('page');
Route::get('/news/idnews={id}/vista','NewsController@show')->name('show');
Route::get('/news/idnews={id}/delete','NewsController@destroy')->name('destroy');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('api/v1/news',[\App\Http\Controllers\NewsController::class, 'getNews']);






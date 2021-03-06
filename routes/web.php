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




Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/category/{id}', 'HomeController@category');

Route::get('/idea/create', 'IdeaController@create');
Route::get('/idea/{id}', 'IdeaController@show');
Route::get('/idea/{id}/donate', 'IdeaController@showDonate');

Route::get('/idea/{idea_id}/donate/{id}', 'DonateController@show');

Route::post('/idea', 'IdeaController@store');
Route::post('/donate', 'DonateController@store');


Auth::routes();
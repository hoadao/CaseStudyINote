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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/notetyper','NotetyperController@index')->name('index');
Route::get('/create','NotetyperController@create')->name('create');
Route::post('/create','NotetyperController@store')->name('store');
Route::get('{id}/edit','NotetyperController@edit')->name('edit');
Route::post('{id}/edit','NotetyperController@update')->name('update');
Route::get('{id}/delete','NotetyperController@destroy')->name('delete');
Route::get('{id}/detail','NotetyperController@detail')->name('detail');
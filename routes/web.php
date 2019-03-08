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
Route::group(['prefix' => 'note'], function () {
    Route::get('/', 'NotesController@index')->name('note.index');
    Route::get('/create','NotesController@create')->name('note.create');
    Route::post('/create','NotesController@store')->name('note.store');
    Route::get('/{id}/detail','NotesController@showDetail')->name('note.detail');
    Route::get('/{id}/edit','NotesController@edit')->name('note.edit');
    Route::post('/{id}/update', 'NotesController@update')->name('note.update');
    Route::get('/{id}/destroy','NotesController@delete')->name('note.destroy');
});

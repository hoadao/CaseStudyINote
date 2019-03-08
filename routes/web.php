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
<<<<<<< HEAD
Route::get('/notetyper','NotetyperController@index')->name('index');
Route::get('/create','NotetyperController@create')->name('create');
Route::post('/create','NotetyperController@store')->name('store');
Route::get('{id}/edit','NotetyperController@edit')->name('edit');
Route::post('{id}/edit','NotetyperController@update')->name('update');
Route::get('{id}/delete','NotetyperController@destroy')->name('delete');
Route::get('{id}/detail','NotetyperController@detail')->name('detail');
=======
Route::group(['prefix' => 'note'], function () {
    Route::get('/', 'NotesController@index')->name('note.index');
    Route::get('/create','NotesController@create')->name('note.create');
    Route::post('/create','NotesController@store')->name('note.store');
    Route::get('/{id}/detail','NotesController@showDetail')->name('note.detail');
    Route::get('/{id}/edit','NotesController@edit')->name('note.edit');
    Route::post('/{id}/update', 'NotesController@update')->name('note.update');
    Route::get('/{id}/destroy','NotesController@delete')->name('note.destroy');
});
>>>>>>> 60d94ab55781e6413b501d97f1896b33310a61f5

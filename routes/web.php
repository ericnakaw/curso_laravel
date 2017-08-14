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

Route::get('product','ProductController@index');
Route::post('product','ProductController@store');
Route::get('product/{id}','ProductController@show');
Route::delete('product/{id}','ProductController@destroy');
Route::put('product/{id}','ProductController@update');

Route::get('client','ClientController@index');
Route::post('client','ClientController@store');
Route::get('client/{id}','ClientController@show');
Route::delete('client/{id}','ClientController@destroy');
Route::put('client/{id}','ClientController@update');

Route::get('project/{id}/note','ProjectNoteController@index');
Route::post('project/{id}/note','ProjectNoteController@store');
Route::get('project/{id}/note/{noteId}','ProjectNoteController@show');
Route::put('project/{id}/note/{noteId}','ProjectNoteController@update');
Route::delete('project/{id}/note/{noteId}','ProjectNoteController@destroy');

Route::get('project','ProjectController@index');
Route::post('project','ProjectController@store');
Route::get('project/{id}','ProjectController@show');
Route::delete('project/{id}','ProjectController@destroy');
Route::put('project/{id}','ProjectController@update');



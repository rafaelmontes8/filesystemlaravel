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
    return view('home');
});

Route::get('/files', 'fileController@getfiles');
Route::post('/subirfiles', 'fileController@upload');
Route::get('/download/{name}', 'fileController@download');
Route::get('/delete/{name}', 'fileController@delete');
Route::get('/rename/{name}', 'fileController@rename');
Route::get('/renombrar/{name}', 'fileController@renombrar');
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
Route::get('/', 'pertanyaan@index');

Route::get('/pertanyaan', 'pertanyaan@index');
Route::get('/pertanyaan/create', 'pertanyaan@create');
Route::post('/pertanyaan', 'pertanyaan@store');
Route::get('/pertanyaan/{pertanyaan_id}', 'pertanyaan@show');
Route::get('/pertanyaan/{pertanyaan_id}/edit', 'pertanyaan@edit');
Route::put('/pertanyaan/{pertanyaan_id}', 'pertanyaan@update');
Route::delete('/pertanyaan/{pertanyaan_id}', 'pertanyaan@destroy');
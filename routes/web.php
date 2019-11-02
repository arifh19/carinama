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
Route::get('/import', 'TrainingController@import')->name('import');
Route::get('/training', 'TrainingController@index')->name('training.index');
Route::post('/import_parse', 'TrainingController@parseImport')->name('import_parse');
Route::post('/import_process', 'TrainingController@processImport')->name('import_process');
Route::get('/export', 'IdentifikasiController@export');
Route::get('/identifikasi', 'IdentifikasiController@index')->name('identifikasi.index');
Route::post('/import_identifikasi', 'IdentifikasiController@parseImport')->name('import_identifikasi');


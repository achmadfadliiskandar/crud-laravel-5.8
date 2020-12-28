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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

//pertanyaan
//index untuk melihat semua data
Route::get('/pertanyaan','PertanyaanController@index');

//tambah untuk melakukan penambahan di link ini
Route::get('/pertanyaan/tambah','PertanyaanController@tambah');

//untuk melakukan pertanyaan
Route::post('/pertanyaan/store','PertanyaanController@store');

//untuk melakukan edit/perubahan data
Route::get('/pertanyaan/edit/{id}','PertanyaanController@edit');

//untuk memproses apakah data berhasil di ubah
Route::post('/pertanyaan/update','PertanyaanController@update');

//untuk menghapus data
Route::get('/pertanyaan/hapus/{id}','PertanyaanController@hapus');


//dengan eloquent
Route::resource('pertanyaan', 'PertanyaanController');

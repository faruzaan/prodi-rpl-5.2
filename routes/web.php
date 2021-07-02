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


Route::get('/','IndexController@index');
Route::get('/sejarah-upi','IndexController@sejarah');
Route::get('/upi-kampus-cibiru','IndexController@kamda');
Route::get('/program-studi-rpl', 'IndexController@rpl');

Route::get('/visi-dan-misi', 'IndexController@visimisi');
Route::get('/staff', 'IndexController@staff');
Route::get('/dosen/{id}', 'IndexController@detaildosen');
Route::get('/struktur-organisasi', 'IndexController@struktur');
Route::get('/fasilitas', 'IndexController@fasilitas');

Route::get('/prestasi', 'IndexController@prestasi');
Route::get('/alumni', 'IndexController@alumni');

Route::get('/kurikulum', 'IndexController@kurikulum');
Route::get('/penelitian', 'IndexController@penelitian');
Route::get('/pengabdian', 'IndexController@pengabdian');

Route::get('/berita', 'IndexController@berita');
Route::get('/berita/{id}', 'IndexController@detail_berita');

Route::get('/artikel', 'IndexController@artikel');
Route::get('/artikel/{id}', 'IndexController@detail_artikel');

Route::get('/prospek-karir', 'IndexController@prospek');
Route::get('/jalur-seleksi-masuk-ptn-upi', 'IndexController@seleksi');

Route::get('/kontak','IndexController@kontak');

Route::auth();
Route::group(['middleware'=>'auth'],function(){
//Admin
    Route::get('/admin', 'AdminController@index');
    //user

    // Route::resource('/admin/user', [UserController::class);

    Route::get('/admin/user', 'UserController@index');

    Route::get('/admin/user/add', 'UserController@create');
    Route::post('/admin/user/add', 'UserController@store');

    Route::get('/admin/user/{id}/edit', 'UserController@edit');


    Route::patch('/admin/user/{id}/edit', 'UserController@update');

    Route::delete('admin/user/{id}/delete', 'UserController@destroy');

    //artikel

    Route::get('/admin/artikel', 'ArtikelController@index');

    Route::get('/admin/artikel/add', 'ArtikelController@create');
    Route::post('/admin/artikel/add', 'ArtikelController@store');

    Route::get('/admin/artikel/{id}/edit', 'ArtikelController@edit');


    Route::patch('/admin/artikel/{id}/edit', 'ArtikelController@update');

    Route::delete('admin/artikel/{id}/delete', 'ArtikelController@destroy');

    //berita

    Route::get('/admin/berita', 'BeritaController@index');

    Route::get('/admin/berita/add', 'BeritaController@create');
    Route::post('/admin/berita/add', 'BeritaController@store');

    Route::get('/admin/berita/{id}/edit', 'BeritaController@edit');


    Route::patch('/admin/berita/{id}/edit', 'BeritaController@update');

    Route::delete('admin/berita/{id}/delete', 'BeritaController@destroy');

    //dosen
    Route::get('/admin/dosen', 'DosenController@index');

    Route::get('/admin/dosen/add', 'DosenController@create');
    Route::post('/admin/dosen/add', 'DosenController@store');

    Route::get('/admin/dosen/{id}/edit', 'DosenController@edit');


    Route::patch('/admin/dosen/{id}/edit', 'DosenController@update');

    Route::delete('admin/dosen/{id}/delete', 'DosenController@destroy');

    //pengajaran-dosen
    Route::get('/admin/pengajaran-dosen', 'PengajaranDosenController@index');

    Route::get('/admin/pengajaran-dosen/add', 'PengajaranDosenController@create');
    Route::post('/admin/pengajaran-dosen/add', 'PengajaranDosenController@store');

    Route::get('/admin/pengajaran-dosen/{id}/edit', 'PengajaranDosenController@edit');


    Route::patch('/admin/publpengajaranikasi-dosen/{id}/edit', 'PengajaranDosenController@update');

    Route::delete('admin/pengajaran-dosen/{id}/delete', 'PengajaranDosenController@destroy');

    //publikasi-dosen
    Route::get('/admin/publikasi-dosen', 'PublikasiDosenController@index');

    Route::get('/admin/publikasi-dosen/add', 'PublikasiDosenController@create');
    Route::post('/admin/publikasi-dosen/add', 'PublikasiDosenController@store');

    Route::get('/admin/publikasi-dosen/{id}/edit', 'PublikasiDosenController@edit');


    Route::patch('/admin/publikasi-dosen/{id}/edit', 'PublikasiDosenController@update');

    Route::delete('admin/publikasi-dosen/{id}/delete', 'PublikasiDosenController@destroy');

    //pendidikan-dosen
    Route::get('/admin/pendidikan-dosen', 'PendidikanDosenController@index');

    Route::get('/admin/pendidikan-dosen/add', 'PendidikanDosenController@create');
    Route::post('/admin/pendidikan-dosen/add', 'PendidikanDosenController@store');

    Route::get('/admin/pendidikan-dosen/{id}/edit', 'PendidikanDosenController@edit');


    Route::patch('/admin/pendidikan-dosen/{id}/edit', 'PendidikanDosenController@update');

    Route::delete('admin/pendidikan-dosen/{id}/delete', 'PendidikanDosenController@destroy');
});

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

Route::get('/','StudentController@index')->name('index');
Route::get('/create','StudentController@createStudent')->name('newStudent');
Route::post('/store','StudentController@storeStudent')->name('store');
Route::get('/edit/{id}','StudentController@editStudent')->name('edit');
Route::post('/update/{id}','StudentController@updateStudent')->name('update');
Route::get('/delete/{id}','StudentController@deleteStudent')->name('delete');
Route::get('/post','PostController@index')->name('post.index');


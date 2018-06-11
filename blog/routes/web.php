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
Route::get('/liuyanban/index', 'LiuyanbanController@index');
Route::get('/liuyanban/add', 'LiuyanbanController@add');
Route::get('/liuyanban/delete', 'LiuyanbanController@delete');
Route::get('/liuyanban/edit', 'LiuyanbanController@edit');
Route::post('/liuyanban/addsave', 'LiuyanbanController@addsave');
Route::post('/liuyanban/editsave', 'LiuyanbanController@editsave');

Route::get('/liuyan/index','Liuyan\LiuyanController@index');
Route::post('/liuyan/addsave', 'Liuyan\LiuyanController@addsave');
Route::get('/liuyan/delete', 'Liuyan\LiuyanController@delete');
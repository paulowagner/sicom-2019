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

Route::get('/sicom', function () {
    return view('sicom.index');
});
Route::post('/cadCliente', function () {
    return view('sicom/cadCliente');
});
Route::get('/sicom/gerenciamento/addUser',['as'=>'sicom.gerenciamento.addUser','uses'=>'userController@viewAddcontroller']);
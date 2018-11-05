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


Route::post('/cadCliente', function () {
    return view('sicom/cadCliente');
});


Route::get('/sicom/login',['as'=>'sicom.login','uses'=>'LoginController@index']);
Route::post('/sicom/entrar',['as'=>'sicom.entrar','uses'=>'LoginController@entrar']);

Route::group(['middleware'=>'auth'],function ()
{
	Route::get('/sicom/logout',['as'=>'sicom.logout','uses'=>'LoginController@logout']);
	Route::get('/sicom',['as'=>'sicom','uses'=>'SicomController@index']);
	

	Route::get('/sicom/gerenciamento/addUser','userController@viewAddcontroller');
	Route::post('/sicom/user/salvar',['as'=>'sicom.user.salvar','uses'=>'userController@userAddcontroller']);
});

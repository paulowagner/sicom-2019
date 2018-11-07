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
    return view('gamatel/index');
});
Route::get('/radios', function () {
    return view('gamatel/radios');
});

Route::get('/sicom/login',['as'=>'sicom.login','uses'=>'LoginController@index']);
Route::post('/sicom/entrar',['as'=>'sicom.entrar','uses'=>'LoginController@entrar']);

Route::group(['middleware'=>'auth'],function ()
{
	Route::get('/sicom/logout',['as'=>'sicom.logout','uses'=>'LoginController@logout']);
	Route::get('/sicom',['as'=>'sicom','uses'=>'SicomController@index']);
	Route::get('/sicom/dashboard',['as'=>'sicom.dashboard','uses'=>'SicomController@dashboard']);
	Route::get('/sicom/comercial',['as'=>'sicom.comercial','uses'=>'SicomController@comercial']);
	Route::get('/sicom/servico',['as'=>'sicom.servico','uses'=>'SicomController@servico']);
	Route::get('/sicom/servico/novaOS',['as'=>'sicom.servico.novaOS','uses'=>'SicomController@novaOS']);
	
	Route::get('/sicom/gerenciamento/addUser','userController@viewAddcontroller');
	Route::get('/sicom/gerenciamento/updateUser','userController@viewUpdateController');
	Route::post('/sicom/user/salvar',['as'=>'sicom.user.salvar','uses'=>'userController@userAddcontroller']);
	Route::post('/sicom/user/update',['as'=>'sicom.user.update','uses'=>'userController@userUpdatecontroller']);
});

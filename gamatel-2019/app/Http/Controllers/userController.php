<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class userController extends Controller
{
    public function viewAddcontroller()
    {
    	return view('sicom.addUser');
    }
    public function userAddcontroller(Request $req)
    {
    	$dados = $req->all();
    	$num = 0;
    	$array = explode(",", $dados['selectValues']);
    	foreach ($array as $permissoes) {
    		$num |=(int)$permissoes;
    	}
    	$dados['password'] = bcrypt($dados['password']);
    	$dados['permissao'] = $num;
    	User::create($dados);
    	return "ok";
    }
}

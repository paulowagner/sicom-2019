<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
class userController extends Controller
{
    public function viewAddcontroller()
    {
        return view('sicom.addUser');
    }
    public function viewUpdateController()
    {
        $user = User::find(Auth::user()->id);
    	return view('sicom.updateUser', compact('user'));
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
    public function userUpdatecontroller(Request $req)
    {
        $dados = $req->all();
        $user = User::find($dados['id']);
        if($dados['password']=="")
            $dados['password']=$user['password'];
        else
            $dados['password']=bcrypt($dados['password']);
        $array = explode(",", $dados['selectValues']);
        $num = 0;
        foreach ($array as $permissoes) {
            $num |=(int)$permissoes;
        }
        $dados['permissao'] = $num;
        $user->update($dados);
        return "Usuario atualizado";
    }
}

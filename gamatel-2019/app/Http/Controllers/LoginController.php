<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
class LoginController extends Controller
{
    public function index()
    {
    	return view('sicom.login');
    }
    public function entrar(Request $req)
    {
    	$dados=$req->all();
    	if (Auth::attempt(['login' => $dados['login'],'password'=>$dados['password']]))
    	{
    		return redirect()->route('sicom');
    	}
    	return redirect()->route('sicom.login');
    }
    public function logout()
    {
    	Auth::logout();
    	return redirect()->route('sicom.login');
    }
}

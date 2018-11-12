<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cliente;
use App\Contato;
class ClienteController extends Controller
{
    public function clienteAddcontroller(Request $req)
    {
    	$dados = $req->all();
    	$find = Cliente::where('CNPJ',$dados['CNPJ'])->get();
    	if (count($find)==0) {
    		$id = Cliente::create($dados)->id;
    		$dados['idCliente'] = $id;
    		Contato::create($dados);
    		return "Cliente criado!!";
    	}else{
    		return "Cliente já cadastrado!!";
    	}
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Estoque;
class EstoqueController extends Controller
{
    public function itemAddcontroller(Request $req)
    {
    	$dados = $req->all();
        $dados['ativo'] = 1; 
    	$find = Estoque::where('descricao',$dados['descricao'])->get();
    	if (count($find)==0&&$dados['descricao']!="") {
    		$dados['valor'] = str_replace(".", "", $dados['valor']);
    		$dados['valor'] = str_replace(",", ".", $dados['valor']);
    		Estoque::create($dados);
    		return "Item criado!!";
    	}else{
    		if ($dados['descricao']=="") {
    			return "Descrição vazia!!";
    		}else{
    			return "Item já cadastrado!!";
    		}
    		
    	}
    }
}

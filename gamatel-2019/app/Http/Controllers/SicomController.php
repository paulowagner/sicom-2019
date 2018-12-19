<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cliente;
use App\Estoque;
use App\User;
class SicomController extends Controller
{
    public function index()
    {
    	return view('sicom.index');
    }
    public function dashboard()
    {
        $itens = Estoque::where('aprovado',0)->get();
    	return view('sicom.dashboard',compact('itens'));
    }
    public function servico()
    {
    	return view('sicom.servico');
    }
    public function novoCliente()
    {
        return view('sicom.comercial.novoCliente');
    }
    public function Cliente()
    {
        return view('sicom.comercial.Cliente');
    }
    public function novoItem()
    {
        return view('sicom.comercial.novoItem');
    }
    public function novoAsset()
    {
        return view('sicom.comercial.novoAsset');
    }
    public function novaSA()
    {
        $users = User::all();
        $itens = Estoque::all();
        return view('sicom.comercial.novaSA',compact('users','itens'));
    }
    public function novaOS()
    {
    	$clientes = Cliente::all();
    	return view('sicom.servico.novaOS',compact('clientes'));
    }
    public function comercial()
    {
    	return view('sicom.comercial');
    }
}

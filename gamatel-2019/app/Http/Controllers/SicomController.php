<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cliente;
class SicomController extends Controller
{
    public function index()
    {
    	return view('sicom.index');
    }
    public function dashboard()
    {
    	return view('sicom.dashboard');
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

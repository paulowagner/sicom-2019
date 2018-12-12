<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Asset;
use App\Modelo;

class AssetController extends Controller
{
    public function modeloAddcontroller(Request $req)
    {
    	$dados = $req->all();
        $find = Modelo::where('modelo',$dados['modelo'])->get();
        if (count($find)==0) {
            Modelo::create($dados);
            return "Modelo criado!!";
        }else{
            return "Modelo já cadastrado!!";
        }
    }
    public function getTipo()
    {
    	$tipos = Modelo::select('tipo')->distinct()->get();
        $nomes = [];
        foreach ($tipos as $name) {
            $nomes[] = $name['tipo'];
        }
        return response(json_encode($nomes), 200)->header('Content-Type', 'application/json');
    }
    public function getModelo(Request $req)
    {
    	$dados = $req->all();
    	$tipos = Modelo::where('tipo',$dados['tipo'])->distinct()->get();
        $nomes = [];
        foreach ($tipos as $name) {
        	$model['modelo'] = $name['modelo'];
        	$model['id'] = $name['id'];
            $nomes[] = $model;
        }
        return response(json_encode($nomes), 200)->header('Content-Type', 'application/json');
    }
    public function assetAdd(Request $req)
    {
    	$dados = $req->all();
    	$series = explode(",", $dados['list']);
    	foreach ($series as $serie) {
    		$dados['nserieId'] = $serie;
    		$find = Asset::where('nserieId',$dados['nserieId'])->get();
	        if (count($find)==0) {
	            $dados['status'] = 'Livre';
	    		Asset::create($dados);
	            echo "Asset ".$dados['nserieId']." criado!!<br>";
	        }else{
	            echo "Asset ".$dados['nserieId']." já cadastrado!!<br>";
	        }
    	}
    }
}
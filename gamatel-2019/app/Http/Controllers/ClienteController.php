<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cliente;
use App\Contato;
use smalot;
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
    public function clienteController(Request $req)
    {
    	$dados = $req->all();
        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/cursos/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
            $parser = new \Smalot\PdfParser\Parser();
            $pdf    = $parser->parseFile($dados['imagem']);
             
            $text = $pdf->getText();
            for ($i=0; $i <strlen($text) ; $i++) { 
                //echo $text[$i]."   ";
                $val = ord($text[$i]);
                //echo $val."<br>";
            }
            $text = str_replace(chr(32), ' ',$text);
            $text = str_replace(chr(32).chr(32), ' ',$text);
            $text = str_replace(chr(9).chr(10), '<br>',$text);
            $text = str_replace(chr(10).chr(10), '<br>',$text);
            $text = str_replace(chr(9), ' ',$text);
            $text = str_replace(chr(10), ' ',$text);
            $text = str_replace('Obrigatórias', '<br>Obrigatórias',$text);
            $arr = explode('<br>', $text);
            
            $aluno['universidade'] = $arr[0];
            $aluno['matricula'] = $arr[4];
            $da = explode('-', $arr[5]);
            $nome = explode(' ', trim($da[0], " "));
            $aluno['nome'] = '';
            $aluno['disciplina'] = [];
            for ($i=0; $i < count($nome)-1; $i++) { 
                if($i==count($nome)-2)
                    $aluno['nome'].=$nome[$i];
                else
                    $aluno['nome'].=$nome[$i].' ';
            }
            $curso = explode('Versão:', $da[1]);
            $aluno['curso'] = trim($curso[0], " ");
            $aluno['versao'] = trim($curso[1], " ");
            $aluno['creObr'] = "";
            $aluno['chsObr'] = "";
            $aluno['creOpt'] = "";
            $aluno['chsOpt'] = "";
            $aluno['creEstagio'] = "";
            $aluno['chsEstagio'] = "";
            $aluno['creAti'] = "";
            $aluno['chsAti'] = "";
            $aluno['creDis'] = "";
            $aluno['chsDis'] = "";
            foreach ($arr as $key => $value) {
                $value = trim($value," ");
                if(strstr($value, 'Aprovado')||strstr($value, 'Aproveitado')){
                    $t = explode(' ',$value);
                    if ($t[count($t)-2]!=99) {
                        $aluno['disciplina'][] = $t[0];
                    }
                    
                }else if(strstr($value, 'Obrigatórias')){
                    $t = explode(' ',$value);
                    if(count($t)>2){
                        $aluno['creObr'] = $t[1];
                        $aluno['chsObr'] = $t[3];
                    }
                }else if(strstr($value, 'Optativas')){
                    $t = explode(' ',$value);
                    if(count($t)>2){
                        $aluno['creOpt'] = $t[1];
                        $aluno['chsOpt'] = $t[3];
                    }
                }else if(strstr($value, 'Estágio Supervisionado')&&strstr($value, '-')){
                    $value = str_replace(' -', '-',$value);
                    $t = explode(' ',$value);
                    if(count($t)>4){
                        $aluno['creEstagio'] = $t[3];
                        $aluno['chsEstagio'] = $t[5];
                    }
                }else if(strstr($value, 'Atividades Complementares')){
                    $value = str_replace(' -', '-',$value);
                    $t = explode(' ',$value);
                    if(count($t)>4){
                        $aluno['creAti'] = $t[3];
                        $aluno['chsAti'] = $t[5];
                    }
                }else if(strstr($value, 'Disciplinas utilizadas para aproveitamento')){
                    $t = explode(' ',$value);
                    if(count($t)>7){
                        $aluno['creDis'] = $t[6];
                        $aluno['chsDis'] = $t[8];
                    }
                }
            }
            dd($aluno);
            //echo $text;
        }
    }
}
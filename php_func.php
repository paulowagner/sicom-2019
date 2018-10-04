<?php

function valorBd($value)
{
    $valor = str_replace(".","",$value);
    return str_replace(",",".",$valor);
}
function Lim($valor) {//649.2
	$tam = strlen($valor);
    if($tam==1)
        $valor.="00";
    else if ($valor==2) {
        $valor.="00";
    }else{
        if(!(substr($valor, $tam-2, 1 )>='0'&&substr($valor, $tam-2, 1 )<='9'))
            $valor.="0";
        else if(substr($valor, $tam-3, 1 )>='0'&&substr($valor, $tam-3, 1 )<='9')
            $valor.="00";
    }
	return preg_replace("/[^0-9]/", "",$valor);
}
function Lim2($valor) {//649.2
  	return preg_replace("/[^0-9]/", "",$valor);
}
function  sig($num) {
    $result = "";
    $i = 0;
    for ($i=0; $i < strlen($num ); $i++) {
        if($num[$i]=='0')
            continue;
        else{ 
            $result .= $num[$i];
             break;
        }
    }
    for ($i=$i+1; $i <strlen($num ); $i++) {
        $result .= $num[$i];
    }
    return $result;
}
function  Form($campo) {	

	$vr = Lim2($campo);
	$vr = sig($vr);
 	$tam = strlen($vr );
 	if($tam==0)
 		return "0,00";
  	else if ( $tam == 2 )
    		$resul = $vr.",00" ;
  	else if($tam == 1){
    		$resul = $vr.",00" ;
	}
  	else{
    	$resul = ",".substr($vr, $tam - 2, 2 ) ;
    	$tam-=2;
    	while($tam>3){

     	 	$resul = ".".substr($vr, $tam - 3, 3).$resul;
     	 	$tam-=3; 
		}
		$resul = substr($vr, 0, $tam ).$resul;
	}
  	return $resul;
}
function FormataCNPJ_ini($valor) {
    $vr = preg_replace("/[^0-9]/", "",$valor);
    $tam = strlen($vr);
    if($tam<14)
        $resul = "CNPJ Inválido";
    else{
        $resul = substr($vr,0,2).".";
        $tam-=2;
        $vr = substr($vr,2,$tam);
        if($tam>3){
            $resul .= substr($vr,0,3).".";
            $tam-=3;
            $vr = substr($vr,3,$tam);
            if($tam>3){
                $resul .= substr($vr,0,3)."/";
                $tam-=3;
                $vr = substr($vr,3,$tam);
                if($tam>4){
                    $resul .= substr($vr,0,4)."-";
                    $tam-=4;
                    $vr = substr($vr,4,$tam);
                    if($tam>2)
                        $resul .= substr($vr,0,2);
                    else
                        $resul .= substr($vr,0,$tam);
                }else{
                    $resul .= substr($vr,0,$tam);
                }
            }else{
              $resul .= substr($vr,0,$tam);
            }
        }else{
            $resul .= substr($vr,0,$tam);
        } 
    }
    return $resul;
}

?>

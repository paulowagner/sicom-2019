<?php
	require('../model/mysql.php');
    require('../php_func.php');
    $Asset = explode(",", $_POST['list']);
    $BDO = new MySqlModel("material_os");
    $Array = [];
    for ($i=0; $i < count($Asset); $i++) { 
    	$resul = $BDO->buscar("SUM(quant * valor_produto) as total","EXISTS (SELECT * from servico WHERE servico.OS = material_os.id_os and servico.NSerie = '".$Asset[$i]."'", null, null, null);
    	$aux = array($Asset[$i],$resul[0]['total']);
    	array_push($Array, $aux);
    }
    var_dump($Array);
    
?>
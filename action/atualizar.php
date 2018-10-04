<?php 
	extract($_GET, EXTR_PREFIX_ALL, 'p');
	extract($_POST, EXTR_PREFIX_ALL, 'p');

   	require('../model/mysql.php');
   	$BDO = new MySqlModel();
	$dataout = date("d/m/y");
	require('../php_func.php');
	$BDO->atualizar('UPDATE registro set Cliente = "'.$_POST['Cliente'].'",analise = "'.$_POST['analise'].'", data = "'.$_POST['Data'].'", objeto = "'.$_POST['Objeto'].'", obs = "'.$_POST['obs'].'", proposta = "'.$_POST['Proposta'].'", SFO = "'.$_POST['SFO'].'", Status = "'.$_POST['Status'].'", Valor = "'.valorBd($_POST['Valor']).'" WHERE id = '.$_POST['id']); 

	$BDO->close();
	echo '<script> location.href="../index.php" </script>';
?>
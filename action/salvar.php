<?php 
	extract($_GET, EXTR_PREFIX_ALL, 'p');
	extract($_POST, EXTR_PREFIX_ALL, 'p');

   	require('../model/mysql.php');
   	$BDO = new MySqlModel();
	$dataout = date("d/m/y");
	valorBd($_POST['Valor']);
	$BDO->inserir('INSERT INTO registro (Cliente, analise, data, objeto, obs, proposta, SFO, Status, Valor) VALUES ("'.$_POST['Cliente'].'", "'.$_POST['analise'].'", "'.$_POST['Data'].'", "'.$_POST['Objeto'].'", "'.$_POST['obs'].'", "'.$_POST['Proposta'].'", "'.$_POST['SFO'].'", "'.$_POST['Status'].'","'.valorBd($_POST['Valor']).'")'); 

	$BDO->close();
	echo '<script> location.href="../index.php" </script>';
?>
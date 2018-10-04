<?php
    if(!isset($_SESSION)){
        session_start();
    }
	require('../model/mysql.php');
	$BDO = new MySqlModel();

	$login = addslashes($_POST['login']);
	$senha = addslashes($_POST['password']);
	if($membro = $BDO->buscar1('SELECT * FROM usuario WHERE login="'.$login.'" and password = "'.md5($senha).'"' )){
        $_SESSION['usuario']['autenticado'] = 1;
        $_SESSION['usuario']['nome'] = $membro[0]['nome'];
        $_SESSION['usuario']['email'] = $membro[0]['email'];
        $BDO->close();
        echo '<script> location.href="../inicio.php" </script>';
    }else{
            $BDO->close();
            echo '<script> location.href="../index.php" </script>';
    }

?>
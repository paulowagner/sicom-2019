<?php
	require('../model/mysql.php');
    require('../php_func.php');
    $Asset = explode(",", $_POST['list']);
    $BDO = new MySqlModel("material_os");
    $Array = [];
    for ($i=0; $i < count($Asset); $i++) { 
    	$resul = $BDO->buscar("SUM(quant * valor_produto) as total","EXISTS (SELECT * from servico WHERE servico.OS = material_os.id_os and servico.NSerie like '".$Asset[$i]."%')", null, null, null);
    	$aux = array($Asset[$i],$resul[0]['total']);
    	array_push($Array, $aux);
    }
?>
<table id="assetCusto">
    <thead>
		<tr>
		  	<th onclick="sortTable(0,0,'assetCusto')">Nº Serie</th>
		  	<th onclick="sortTable(1,2,'assetCusto')">Custo</th>
		</tr>
    </thead>

    <tbody>
    	<?php
    	foreach ($Array as $radio) {
    	
    	echo '
		<tr>
			<td>'.$radio[0].'</td>
			<td>'.number_format($radio[1],2,'.','').'</td>
		</tr>
		';
		}
		?>
    </tbody>
  </table>
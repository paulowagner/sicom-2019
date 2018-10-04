<?php	
	require('model/mysql.php');
    require('php_func.php');
    $BDO = new MySqlModel("clientes");
    $clientes = $BDO->buscar("Cliente",null, null, null, null);
?>
<div class="row">
    <div class="col s12">
      	<ul class="tabs">
        	<li class="tab col s4"><a href="#NewOS">Nova Ordem de Serviço</a></li>
        	<li class="tab col s4"><a href="#SearchOS">Pesquisar Ordem de Serviço</a></li>
        	<li class="tab col s4"><a href="#MyOs">Minhas Ordem de Serviços</a></li>
      	</ul>
    </div>
    <div id="NewOS" class="col s12">
    	<div class="row">
        	<div class="input-field col s12">
          		<i class="material-icons prefix">textsms</i>
  				<input type="text" id="autocomplete-input" class="autocomplete">
          		<label for="autocomplete-input">Cliente</label>
        	</div>
      	</div>
    </div>
    <div id="SearchOS" class="col s12">gerTest 2</div>
    <div id="MyOs" class="col s12">gerTest 3</div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
  		$('.tabs').tabs();
    	$('input.autocomplete').autocomplete({
      		data: {
      			<?php
	                foreach ($clientes as $cliente){
	                	echo '"'.$cliente['Cliente'].'": null,';
	                }

      			?>
      		},
    	});
    });
      
</script>
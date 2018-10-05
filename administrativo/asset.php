<?php	
	require('../model/mysql.php');
    require('../php_func.php');
    $BDO = new MySqlModel("servico");
    $itens = $BDO->buscar("DISTINCT NSerie","char_length(NSerie) = 10", null, null, null);
?>
<div class="row">
	<form id="teste">
		<div class="row">
		    <div class="col s10">
		      	<div class="chips chips-autocomplete"></div>
		    </div>
		    <div class="col s2">
		      	<a id="gogogadget" class="btn waves-effect waves-light">Asset</a>
		    </div>
	  	</div>
	</form>
</div>
<div class="row">
	<div class="col s12" id="formItens">
		
	</div>
</div>
<script type="text/javascript">
 	var elems = document.querySelectorAll('.chips')
	var instances = M.Chips.init(elems, {
     		placeholder: 'Enter itens',
     		name: 'Itens',
     		autocompleteOptions: {
       		data: {
				<?php
	                foreach ($itens as $item){
	                	echo '"'.$item['NSerie'].'": null,';
	                }

      			?>
       		},
       		limit: 5,
       		minLength: 1
     	}
	});

		$("#gogogadget").click(function(){
			alert("entrei");
			var array = [];
			for (var i = instances[0].chipsData.length - 1; i >= 0; i--) {
				array.push(instances[0].chipsData[i].tag);
			}
			
			$.ajax({
            url: 'assetTable.php',
            method: 'post',
            data:{list:""+array+""},
            success: function(data){
            	alert(data);
            	$('#formItens').html(data);
            }
        });
	});
</script>
		
<h4 style="text-align: center">Novo Asset</h4>
<div class="row">
	<div class="col s12">
		<form id="assetAddForm">
			@csrf
			<div class="row">
				<h5 style="text-align: center">Modelo</h5>
				<div class="col s6">
					<h6 style="text-align: center">Escolher Modelo</h6>
					<div class="input-field col s12">
					    <select id="tipoSelect">
					      	<option value="" disabled selected>Escolha o tipo</option>
					    </select>
					    <label>Tipo</label>
				  	</div>
				  	<div class="input-field col s12">
					    <select id="id_modelo" name="id_modelo">
					      	<option value="" disabled selected>Escolha o modelo</option>
					    </select>
					    <label>Modelo</label>
				  	</div>
				</div>
				<div class="col s6">
					<h6 style="text-align: center">Cadastrar Modelo</h6>
					<div class="input-field col s6">
			          	<input id="tipo" name="tipo" type="text" class="validate">
			          	<label for="tipo">Tipo</label>
			        </div>
			        <div class="input-field col s6">
			          	<input id="modelo" type="text" name="modelo" class="validate">
			          	<label for="modelo">Modelo</label>
			        </div>
			        <div class="input-field col s6">
			          	<input id="nseriePadrao" type="text" name="nseriePadrao" class="validate">
			          	<label for="nseriePadrao">Padrão numero de série</label>
			        </div>
			        <div class="col s6" style="align-items:baseline">
			        	<button class="btn waves-effect waves-light blue" type="button" name="action" id="submitModeloAssetAdd">Cadastrar modelo
				    	<i class="material-icons right">send</i>
			  		</button>
			        </div>
				</div>
      		</div>
      		<div class="row">
      			<div class="col s9">
				    <div class="chips chips-initial" id="chips"></div>
			    </div>
		        <div class="input-field col s3">
		          	<input id="compradoEm" type="date" name="compradoEm" class="validate">
		          	<label for="compradoEm">Comprado em</label>
		        </div>
      		</div>
      		<div class="row">
      			<div class="input-field col s4">
				    <select id="local" name="local">
				      	<option value="1" disabled selected>Vitoria</option>
				      	<option value="2" disabled selected>Ubu</option>
				      	<option value="3" disabled selected>Germano</option>
				      	<option value="4" disabled selected>Aracruz</option>
				      	<option value="5" disabled selected>Posto da Mata</option>
				    </select>
				    <label>Localidade</label>
			  	</div>
			  	<div class="input-field col s4">
		  			<button class="btn waves-effect waves-light blue" type="button" name="action" id="submitAssetAdd">Cadastrar
		    			<i class="material-icons right">send</i>
	  				</button>
			  	</div>
      		</div>
			
		</form>
	</div>
	<div id="mensagem_sucesso_asset_add">
		
	</div>
</div>
<script type="text/javascript">
 	$(document).ready(function(){
 		var chips = document.querySelectorAll('.chips');
	    var instance_chip = M.Chips.init(chips, {
	            placeholder: 'Digite o Nº de Serie',
	            name: 'Nº Serie',
	        });
 		var elems = document.querySelectorAll('select');
    	var instances = M.FormSelect.init(elems, {});
 		M.updateTextFields();
 		$('#submitAssetAdd').click(function () {
 			var array = [];
 			for (var i = instance_chip[0].chipsData.length - 1; i >= 0; i--) {
	            array.push(instance_chip[0].chipsData[i].tag.replace(",", "§"));
	        }
 			$.ajax({
	            url: '{{asset('/sicom/Asset/salvar')}}',
	            method: 'post',
	            data:$('#assetAddForm').serialize(),
	            beforeSend: function(xhr, settings){
	                settings.data += '&'+'list='+array+"";
	            },
	            success: function(data){
					$('#mensagem_sucesso_asset_add').html(data);
	            }
	        });		
 		});
 		$('#submitModeloAssetAdd').click(function(){
			$.ajax({
				url: '{{asset('/sicom/Modelo/salvar')}}',
				method: 'post',
				data: $('#assetAddForm').serialize(),
				success: function(data){	
					$.ajax({

			            url: '{{asset('/sicom/Modelo/getTipo')}}',
			            method: 'get',
			            success: function(data){

			            	var tipo = document.getElementById('tipoSelect');
			            	for (var i = tipo.length - 1; i > 0; i--) {
				                tipo.remove(i);
				            }
						    for (var i in data) {
						    	var option=document.createElement("option");
			                    option.text=data[i];
			                    option.value=data[i];
			                    tipo.add(option,tipo.options[null]);
						    }
						    tipo.selectedIndex = "0";
						    var instances = M.FormSelect.init(elems, {});
			            }
			        });					
					$('#mensagem_sucesso_asset_add').html(data);
				}
			});
		});
		$('#tipoSelect').change(function () {
 			var tipo = document.getElementById('tipoSelect');
 			$.ajax({
	            url: '{{asset('/sicom/Modelo/getModelo')}}',
	            method: 'get',
	            data: 'tipo='+tipo.value,
	            success: function(data){
	            	var modelo = document.getElementById('id_modelo');
	            	for (var i = modelo.length - 1; i > 0; i--) {
		                modelo.remove(i);
		            }
				    for (var i in data) {
				    	var option=document.createElement("option");
	                    option.text=data[i].modelo;
	                    option.value=data[i].id;
	                    modelo.add(option,modelo.options[null]);
				    }
				    modelo.selectedIndex = "0";
				    var instances = M.FormSelect.init(elems, {});
	            	
	            }
	        });
 		});
    	$.ajax({

            url: '{{asset('/sicom/Modelo/getTipo')}}',
            method: 'get',
            success: function(data){

            	var tipo = document.getElementById('tipoSelect');
            	for (var i = tipo.length - 1; i > 0; i--) {
	                tipo.remove(i);
	            }
			    for (var i in data) {
			    	var option=document.createElement("option");
                    option.text=data[i];
                    option.value=data[i];
                    tipo.add(option,tipo.options[null]);
			    }
			    tipo.selectedIndex = "0";
			    var instances = M.FormSelect.init(elems, {});
            }
        });	
  	});	
</script>
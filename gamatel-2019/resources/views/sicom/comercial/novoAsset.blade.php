<h4 style="text-align: center">Novo Asset</h4>
<div class="row">
	<div class="col s12">
		<form id="clienteAddForm">
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
			        	<button class="btn waves-effect waves-light blue" type="button" name="action" id="submitClienteAdd">Cadastrar modelo
				    	<i class="material-icons right">send</i>
			  		</button>
			        </div>
				</div>
		        
      		</div>
      		<div class="row">
		        <div class="input-field col s3">
		          	<input id="nserieId" type="text" name="nserieId" class="validate">
		          	<label for="nserieId">Nº serie/Id</label>
		        </div>
		        <div class="input-field col s3">
		          	<input id="compradoEm" type="date" name="compradoEm" class="validate">
		          	<label for="compradoEm">Comprado em</label>
		        </div>
      		</div>
			<button class="btn waves-effect waves-light blue" type="button" name="action" id="submitClienteAdd">Cadastrar
		    	<i class="material-icons right">send</i>
	  		</button>
		</form>
	</div>
	<div id="mensagem_sucesso">
		
	</div>
</div>
<script type="text/javascript">
	
 	$(document).ready(function(){
 		var elems = document.querySelectorAll('select');
    	var instances = M.FormSelect.init(elems, {});
 		M.updateTextFields();
 		$('#submitClienteAdd').click(function(){
			$.ajax({
				url: '{{asset('/sicom/Cliente/salvar')}}',
				method: 'post',
				data: $('#clienteAddForm').serialize(),
				success: function(data){						
					$('#mensagem_sucesso').html(data);
				}
			});
		});
    	
  	});	

</script>
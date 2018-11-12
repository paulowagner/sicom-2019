<h4 style="text-align: center">Novo item</h4>
<div class="row">
	<div class="col s12">
		<form id="itemAddForm">
			@csrf
			<div class="row">
		        <div class="input-field col s4">
		          	<input id="descricao" name="descricao" type="text" class="validate">
		          	<label for="descricao">Item</label>
		        </div>
		        <div class="input-field col s2">
		          	<input id="codigoNCM" type="text" name="codigoNCM" class="validate">
		          	<label for="codigoNCM">Código NCM</label>
		        </div>
		        <div class="input-field col s2">
		          	<input id="codigoSAP" type="text" name="codigoSAP" class="validate">
		          	<label for="codigoSAP">Código SAP</label>
		        </div>
		        <div class="input-field col s2">
		          	<input id="codigoFornecedor" type="text" name="codigoFornecedor" class="validate">
		          	<label for="codigoFornecedor">Código Fornecedor</label>
		        </div>
		        
		        <div class="input-field col s2">
		          	<input id="valor" type="text" name="valor" value="0" onkeyup="Formata(this,20,event,2)" class="validate">
		          	<label for="valor">Valor</label>
		        </div>
      		</div>
      		<h5>Estoque Vitoria</h5>
      		<div class="row">
      			<div class="input-field col s2">
		          	<input id="vitoria_estoqueInterno" type="text" name="vitoria_estoqueInterno" value="0" onkeyup="Formata(this,20,event,3)" class="validate">
		          	<label for="vitoria_estoqueInterno">Estoque interno</label>
		        </div>
		        <div class="input-field col s2">
		          	<input id="vitoria_estoque" type="text" name="vitoria_estoque" value="0" onkeyup="Formata(this,20,event,3)" class="validate">
		          	<label for="vitoria_estoque">Estoque</label>
		        </div>
		        <div class="input-field col s2">
		          	<input id="vitoria_minimo" type="text" name="vitoria_minimo" value="0" onkeyup="Formata(this,20,event,3)" class="validate">
		          	<label for="vitoria_minimo">Estoque Minimo</label>
		        </div>
		        <div class="input-field col s2">
		          	<input id="vitoria_ideal" type="text" name="vitoria_ideal" value="0" onkeyup="Formata(this,20,event,3)" class="validate">
		          	<label for="vitoria_ideal">Estoque Ideal</label>
		        </div>		        
      		</div>
      		<h5>Estoque Ubu</h5>
      		<div class="row">
      			<div class="input-field col s2">
		          	<input id="SamarcoUbuEstoqueInterno" type="text" name="SamarcoUbuEstoqueInterno" value="0" onkeyup="Formata(this,20,event,3)" class="validate">
		          	<label for="SamarcoUbuEstoqueInterno">Estoque interno</label>
		        </div>
		        <div class="input-field col s2">
		          	<input id="SamarcoUbuEstoque" type="text" name="SamarcoUbuEstoque" value="0" onkeyup="Formata(this,20,event,3)" class="validate">
		          	<label for="SamarcoUbuEstoque">Estoque</label>
		        </div>
		        <div class="input-field col s2">
		          	<input id="SamarcoUbuMinimo" type="text" name="SamarcoUbuMinimo" value="0" onkeyup="Formata(this,20,event,3)" class="validate">
		          	<label for="SamarcoUbuMinimo">Estoque Minimo</label>
		        </div>
		        <div class="input-field col s2">
		          	<input id="SamarcoUbuIdeal" type="text" name="SamarcoUbuIdeal" value="0" onkeyup="Formata(this,20,event,3)" class="validate">
		          	<label for="SamarcoUbuIdeal">Estoque Ideal</label>
		        </div>		        
      		</div>
      		<h5>Estoque Germano</h5>
      		<div class="row">
      			<div class="input-field col s2">
		          	<input id="SamarcoGermanoEstoqueInterno" type="text" name="SamarcoGermanoEstoqueInterno" value="0" onkeyup="Formata(this,20,event,3)" class="validate">
		          	<label for="SamarcoGermanoEstoqueInterno">Estoque interno</label>
		        </div>
		        <div class="input-field col s2">
		          	<input id="SamarcoGermanoEstoque" type="text" name="SamarcoGermanoEstoque" value="0" onkeyup="Formata(this,20,event,3)" class="validate">
		          	<label for="SamarcoGermanoEstoque">Estoque</label>
		        </div>
		        <div class="input-field col s2">
		          	<input id="SamarcoGermanoMinimo" type="text" name="SamarcoGermanoMinimo" value="0" onkeyup="Formata(this,20,event,3)" class="validate">
		          	<label for="SamarcoGermanoMinimo">Estoque Minimo</label>
		        </div>
		        <div class="input-field col s2">
		          	<input id="SamarcoGermanoIdeal" type="text" name="SamarcoGermanoIdeal" value="0" onkeyup="Formata(this,20,event,3)" class="validate">
		          	<label for="SamarcoGermanoIdeal">Estoque Ideal</label>
		        </div>		        
      		</div>
      		<h5>Estoque Aracruz</h5>
      		<div class="row">
      			<div class="input-field col s2">
		          	<input id="fibriaAracruzEstoqueInterno" type="text" name="fibriaAracruzEstoqueInterno" value="0" onkeyup="Formata(this,20,event,3)" class="validate">
		          	<label for="fibriaAracruzEstoqueInterno">Estoque interno</label>
		        </div>
		        <div class="input-field col s2">
		          	<input id="fibriaAracruzEstoque" type="text" name="fibriaAracruzEstoque" value="0" onkeyup="Formata(this,20,event,3)" class="validate">
		          	<label for="fibriaAracruzEstoque">Estoque</label>
		        </div>
		        <div class="input-field col s2">
		          	<input id="fibriaAracruzMinimo" type="text" name="fibriaAracruzMinimo" value="0" onkeyup="Formata(this,20,event,3)" class="validate">
		          	<label for="fibriaAracruzMinimo">Estoque Minimo</label>
		        </div>
		        <div class="input-field col s2">
		          	<input id="fibriaAracruzIdeal" type="text" name="fibriaAracruzIdeal" value="0" onkeyup="Formata(this,20,event,3)" class="validate">
		          	<label for="fibriaAracruzIdeal">Estoque Ideal</label>
		        </div>		        
      		</div>
			<h5>Estoque Posto da Mata</h5>
      		<div class="row">
      			<div class="input-field col s2">
		          	<input id="fibriaPostoDaMataEstoqueInterno" type="text" name="fibriaPostoDaMataEstoqueInterno" onkeyup="Formata(this,20,event,3)" value="0" class="validate">
		          	<label for="fibriaPostoDaMataEstoqueInterno">Estoque interno</label>
		        </div>
		        <div class="input-field col s2">
		          	<input id="fibriaPostoDaMataEstoque" type="text" name="fibriaPostoDaMataEstoque" value="0" onkeyup="Formata(this,20,event,3)" class="validate">
		          	<label for="fibriaPostoDaMataEstoque">Estoque</label>
		        </div>
		        <div class="input-field col s2">
		          	<input id="fibriaPostoDaMataMinimo" type="text" name="fibriaPostoDaMataMinimo" value="0" onkeyup="Formata(this,20,event,3)" class="validate">
		          	<label for="fibriaPostoDaMataMinimo">Estoque Minimo</label>
		        </div>
		        <div class="input-field col s2">
		          	<input id="fibriaPostoDaMataIdeal" type="text" name="fibriaPostoDaMataIdeal" value="0" onkeyup="Formata(this,20,event,3)" class="validate">
		          	<label for="fibriaPostoDaMataIdeal">Estoque Ideal</label>
		        </div>		        
      		</div>
			<button class="btn waves-effect waves-light blue" type="button" name="action" id="submitItemAdd">Cadastrar
		    	<i class="material-icons right">send</i>
	  		</button>
		</form>
	</div>
	<div id="mensagem_sucesso">
		
	</div>
</div>
<script type="text/javascript">
 	$(document).ready(function(){
 		M.updateTextFields();
 		$('#submitItemAdd').click(function(){
			$.ajax({
				url: '{{asset('/sicom/Item/salvar')}}',
				method: 'post',
				data: $('#itemAddForm').serialize(),
				success: function(data){
					if (data=="Item criado!!") {
						$('#descricao').val("");
	 					$('#codigoFornecedor').val("");
	 					$('#codigoSAP').val("");
 						$('#codigoNCM').val("");	
 						$('#valor').val("0");	
 						$('#vitoria_ideal').val("0");	
 						$('#vitoria_minimo').val("0");	
 						$('#vitoria_estoque').val("0");	
 						$('#vitoria_estoqueInterno').val("0");	
 						$('#SamarcoUbuIdeal').val("0");	
 						$('#SamarcoUbuMinimo').val("0");	
 						$('#SamarcoUbuEstoque').val("0");	
 						$('#SamarcoUbuEstoqueInterno').val("0");	
 						$('#SamarcoGermanoIdeal').val("0");	
 						$('#SamarcoGermanoMinimo').val("0");	
 						$('#SamarcoGermanoEstoque').val("0");	
 						$('#SamarcoGermanoEstoqueInterno').val("0");	
 						$('#fibriaAracruzIdeal').val("0");	
 						$('#fibriaAracruzMinimo').val("0");	
 						$('#fibriaAracruzEstoque').val("0");	
 						$('#fibriaAracruzEstoqueInterno').val("0");	
 						$('#fibriaPostoDaMataIdeal').val("0");	
 						$('#fibriaPostoDaMataEstoque').val("0");	
 						$('#fibriaPostoDaMataMinimo').val("0");	
 						$('#fibriaPostoDaMataEstoqueInterno').val("0");	
					}
					$('#mensagem_sucesso').html(data);
				}
			});
		});
    	
  	});	

</script>
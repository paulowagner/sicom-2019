<h4 style="text-align: center">Novo cliente</h4>
<div class="row">
	<div class="col s12">
		<form id="clienteAddForm">
			@csrf
			<div class="row">
		        <div class="input-field col s4">
		          	<input id="Cliente" name="Cliente" type="text" class="validate">
		          	<label for="Cliente">Cliente</label>
		        </div>
		        <div class="input-field col s2">
		          	<input disabled id="SegCod" type="text" name="SegCod" class="validate">
		          	<label for="SegCod">Código Segurança</label>
		        </div>
		        <div class="input-field col s1">
		          	<input id="CEP" type="text" name="CEP" class="validate" onkeyup="FormataCEP(this)">
		          	<label for="CEP">CEP</label>
		        </div>
		        <div class="input-field col s3">
		          	<input id="Endereco" type="text" name="Endereco" class="validate">
		          	<label for="Endereco">Endereço</label>
		        </div>
		        <div class="input-field col s2">
		          	<input id="Bairro" type="text" name="Bairro" class="validate">
		          	<label for="Bairro">Bairro</label>
		        </div>
      		</div>
      		<div class="row">
		        <div class="input-field col s3">
		          	<input id="Cidade" type="text" name="Cidade" class="validate">
		          	<label for="Cidade">Cidade</label>
		        </div>
		        <div class="input-field col s3">
		          	<input id="Estado" type="text" name="Estado" class="validate">
		          	<label for="Estado">Estado</label>
		        </div>
		        <div class="input-field col s2">
		          	<input id="CNPJ" type="text" name="CNPJ" onkeyup="FormataCNPJ(this)" class="validate">
		          	<label for="CNPJ">CNPJ</label>
		        </div>
		        <div class="input-field col s2">
		          	<input id="InsEst" type="text" name="InsEst" class="validate">
		          	<label for="InsEst">InsEst</label>
		        </div>
      		</div>
      		<h5>Contato no Cliente</h5>
			<div class="row">
				<div class="input-field col s3">
				  	<input id="Nome" type="text" name="Nome" class="validate">
				  	<label for="Nome">Nome</label>
				</div>
				<div class="input-field col s3">
				  	<input id="Telefone" type="text" onkeyup="FormataTEL(this)" name="Telefone" class="validate">
				  	<label for="Telefone">Telefone</label>
				</div>
				<div class="input-field col s3">
					<input id="email" type="email" name='Email' class="validate">
					<label for="email">Email</label>
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
	function estado(argument) {
		if (argument=='MG') {
			return 'Minas Gerais';
		}else if(argument=='SP'){
			return 'São Paulo';
		}else if(argument=='ES'){
			return 'Espírito Santo';
		}else if(argument=='AC'){
			return 'Acre';
		}else if(argument=='AL'){
			return 'Alagoas';
		}else if(argument=='AM'){
			return 'Amazonas';
		}else if(argument=='AP'){
			return 'Amapá';
		}else if(argument=='BA'){
			return 'Bahia';
		}else if(argument=='CE'){
			return 'Ceará';
		}else if(argument=='GO'){
			return 'Goiás';
		}else if(argument=='MA'){
			return 'Maranhão';
		}else if(argument=='PA'){
			return 'Pará';
		}else if(argument=='PB'){
			return 'Paraíba';
		}else if(argument=='PR'){
			return 'Paraná';
		}else if(argument=='PE'){
			return 'Pernambuco';
		}else if(argument=='PI'){
			return 'Piauí';
		}else if(argument=='RO'){
			return 'Rondônia';
		}else if(argument=='RR'){
			return 'Roraima';
		}else if(argument=='SE'){
			return 'Sergipe';
		}else if(argument=='TO'){
			return 'Tocantins';
		}else if(argument=='DF'){
			return 'Distrito Federal';
		}else if(argument=='MT'){
			return 'Mato Grosso';
		}else if(argument=='MS'){
			return 'Mato Grosso do Sul';
		}else if(argument=='RJ'){
			return 'Rio de Janeiro';
		}else if(argument=='RN'){
			return 'Rio Grande do Norte';
		}else if(argument=='RS'){
			return 'Rio Grande do Sul';
		}else if(argument=='SC'){
			return 'Santa Catarina';
		}
	}
 	$(document).ready(function(){
 		now = new Date;
 		$('#Cliente').keyup(function () {
 			if ($('#Cliente').val().length>=4) {
 				mes = now.getMonth()+1;
 				var name = $('#Cliente').val().substr(0, 4)+now.getFullYear()+mes+now.getDate()+now.getHours();
 				$('#SegCod').val(name);
	 			M.updateTextFields();
 			}
 		});
 		$('#CEP').keyup(function () {
 			if ($('#CEP').val().length==9) {
	 			var url_pesq = 'https://viacep.com.br/ws/'+$('#CEP').val().replace("-","")+'/json/';
	 			$.ajax({
	 				url: url_pesq,
	 				method: 'get',
	 				success: function(data) {
	 					$('#Endereco').val(data.logradouro+", ");
	 					$('#Bairro').val(data.bairro);
	 					$('#Cidade').val(data.localidade);
	 					$('#Estado').val(estado(data.uf));
	 					M.updateTextFields();
	 				} 
	 			});
 			}
 		});
 		M.updateTextFields();
 		$('#submitClienteAdd').click(function(){
 			str = ""+$('#CNPJ').val();
 			if(!isCNPJ(str)){
				alert(str+" é invalido!!")
			}else{
				$('#SegCod').prop('disabled', false);
				if ($('#Cliente').val().length<4) {
	 				mes = now.getMonth()+1;
	 				var name = $('#Cliente').val().substr(0, 4)+now.getFullYear()+mes+now.getDate()+now.getHours();
	 				$('#SegCod').val(name);
		 			M.updateTextFields();
	 			}
				$.ajax({
					url: '{{asset('/sicom/Cliente/salvar')}}',
					method: 'post',
					data: $('#clienteAddForm').serialize(),
					success: function(data){
						if (data=="Cliente criado!!") {
							$('#Endereco').val("");
		 					$('#Bairro').val("");
		 					$('#Cidade').val("");
	 						$('#Estado').val("");	
	 						$('#Cliente').val("");	
	 						$('#SegCod').val("");	
	 						$('#CEP').val("");	
	 						$('#CNPJ').val("");	
	 						$('#InsEst').val("");	
	 						$('#Nome').val("");	
	 						$('#email').val("");	
	 						$('#Telefone').val("");	
						}
						$('#mensagem_sucesso').html(data);
					}
				});
			}
		});
    	
  	});	

</script>
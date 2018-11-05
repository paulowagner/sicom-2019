@extends('layout.sicom')
@section('conteudo')
<div class="row">
    <form class="col s12" id="userFormAdd">
	 	@csrf
      	<div class="row">
	        <div class="input-field col s4">
	          	<input id="name" type="text" class="validate" name="name">
	          	<label for="name">Nome</label>
	        </div>
	        <div class="input-field col s2">
	          	<input id="login" type="text" class="validate" name="login">
	          	<label for="login">Login</label>
	        </div>
	        <div class="input-field col s3">
	          	<input id="area" type="text" class="validate" name="area">
	          	<label for="area">Área</label>
	        </div>
	        <div class="input-field col s3">
	          	<input id="cargo" type="text" class="validate" name="cargo">
	          	<label for="cargo">Cargo</label>
	        </div>
      	</div>
      	<div class="row">
	        <div class="input-field col s4">
	          	<input id="password" type="password" name="password" class="validate">
	          	<label for="password">Password</label>
	        </div>
	        <div class="input-field col s4">
	          	<input id="email" type="email" name="email" class="validate">
	          	<label for="email">Email</label>
	        </div>
	        <div class="input-field col s4">
			    <select multiple name="permissao" id="mySelect">
			      	<option value="1">OS Admim</option>
			      	<option value="2">OS Restrito</option>
			      	<option value="4">Contrato Admin</option>
			      	<option value="8">Contrato Restrito</option>
			      	<option value="16">Cliente Admin</option>
			      	<option value="32">Cliente Restrito</option>
			      	<option value="64">Estoque Admin</option>
			      	<option value="128">Estoque Restrito</option>
			      	<option value="256">Asset Admin</option>
			      	<option value="512">Asset Restrito</option>
			      	<option value="1024">SA Admin</option>
			      	<option value="2048">SA Restrito</option>
			    </select>
			    <label>Permissões</label>
		  	</div>
      	</div>
      	<input type="hidden" id="selectValues" name="selectValues" value="">
      	<button class="btn waves-effect waves-light" type="button" name="action" id="submitUserAdd">Submit
		    <i class="material-icons right">send</i>
	  	</button>
    </form>
   	<div class="row">
   		<div class="col s12" id="mensagem_sucesso"></div>
   	</div>
</div>
<script type="text/javascript">
	 
 	$(document).ready(function(){
 		var elems = document.querySelectorAll('select');
    	var instances = M.FormSelect.init(elems, {isMultiple:"true"});
 		M.updateTextFields();
 		$('#submitUserAdd').click(function(){
 			$('#selectValues').val($('#mySelect').val()+"");
			$.ajax({
				url: '/sicom/user/salvar',
				method: 'post',
				data: $('#userFormAdd').serialize(),
				success: function(data){
					$('#mensagem_sucesso').html(data);
				}
			});
		});
    	
  	});	

</script>
@endsection
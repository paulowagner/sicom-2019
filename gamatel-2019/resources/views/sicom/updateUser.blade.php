@php
	$num = 1;
	$array = [];
	for($i=0;$i < 18;$i++){
		if($user->permissao&$num)
			array_push($array, $num);
		$num<<=1;
	}
@endphp
<div class="row">
	<div class="col s12">
		<h4 style="text-align: center">Atualizar Usuario</h4>
	</div>
</div>
<div class="row">
    <form class="col s12" id="userFormUpdate">
	 	@csrf
	 	<input type="hidden" name="id" value="{{$user->id}}">
      	<div class="row">
	        <div class="input-field col s4">
	          	<input id="name" type="text" class="validate" name="name" value="{{$user->name}}">
	          	<label for="name">Nome</label>
	        </div>
	        <div class="input-field col s2">
	          	<input id="login" type="text" class="validate" name="login" value="{{$user->login}}">
	          	<label for="login">Login</label>
	        </div>
	        <div class="input-field col s3">
	          	<input id="area" type="text" class="validate" name="area" value="{{$user->area}}">
	          	<label for="area">Área</label>
	        </div>
	        <div class="input-field col s3">
	          	<input id="cargo" type="text" class="validate" name="cargo" value="{{$user->cargo}}">
	          	<label for="cargo">Cargo</label>
	        </div>
      	</div>
      	<div class="row">
	        <div class="input-field col s4">
	          	<input id="password" type="password" name="password" class="validate">
	          	<label for="password">Password</label>
	        </div>
	        <div class="input-field col s4">
	          	<input id="email" type="email" name="email" class="validate" value="{{$user->email}}">
	          	<label for="email">Email</label>
	        </div>
	        <div class="input-field col s4">
			    <select multiple name="permissao" id="mySelect">
			      	<option value="1">Tecnico</option>
			      	<option value="2">Comercial</option>
			      	<option value="4">Administrativo</option>
			      	<option value="8">Gerente</option>
			      	<option value="16">OS Admim</option>
			      	<option value="32">OS Restrito</option>
			      	<option value="64">Contrato Admin</option>
			      	<option value="128">Contrato Restrito</option>
			      	<option value="256">Cliente Admin</option>
			      	<option value="512">Cliente Restrito</option>
			      	<option value="1024">Estoque Admin</option>
			      	<option value="2048">Estoque Restrito</option>
			      	<option value="4096">Asset Admin</option>
			      	<option value="8192">Asset Restrito</option>
			      	<option value="16384">SA Admin</option>
			      	<option value="32768">SA Restrito</option>
			      	<option value="65536">Mapas Admin</option>
			      	<option value="131072">Mapas Restrito</option>
			    </select>
			    <label>Permissões</label>
		  	</div>
      	</div>
      	<input type="hidden" id="selectValues" name="selectValues" value="">
      	<button class="btn waves-effect waves-light" type="button" name="action" id="submitUserAdd">Atualizar
		    <i class="material-icons right">send</i>
	  	</button>
    </form>
   	<div class="row">
   		<div class="col s12" id="mensagem_sucesso"></div>
   	</div>
</div>
<script type="text/javascript">
	$('#mySelect').val(@php echo json_encode($array) @endphp);
 	$(document).ready(function(){
 		var elems = document.querySelectorAll('select');
    	var instances = M.FormSelect.init(elems, {isMultiple:"true"});
 		M.updateTextFields();
 		$('#submitUserAdd').click(function(){
 			$('#selectValues').val($('#mySelect').val()+"");
			$.ajax({
				url: '/sicom/user/update',
				method: 'post',
				data: $('#userFormUpdate').serialize(),
				success: function(data){
					$('#mensagem_sucesso').html(data);
				}
			});
		});
    	
  	});	

</script>
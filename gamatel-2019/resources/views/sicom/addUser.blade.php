<div class="row">
    <form class="col s12">
      	<div class="row">
	        <div class="input-field col s6">
	          	<input placeholder="Placeholder" id="name" type="text" class="validate" name="name">
	          	<label for="name">Nome</label>
	        </div>
	        <div class="input-field col s3">
	          	<input placeholder="Placeholder" id="name" type="text" class="validate" name="name">
	          	<label for="name">Área</label>
	        </div>
	        <div class="input-field col s3">
	          	<input placeholder="Placeholder" id="name" type="text" class="validate" name="name">
	          	<label for="name">Cargo</label>
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
			    <select multiple>
			      <option value="1">OS Admim</option>
			      <option value="2">OS Restrito</option>
			      <option value="3">Contrato Admin</option>
			      <option value="4">Contrato Restrito</option>
			      <option value="5">Option 3</option>
			      <option value="6">Option 4</option>
			    </select>
			    <label>Permissões</label>
		  	</div>
      	</div>
    </form>
  </div>
  <script type="text/javascript">
  	 M.updateTextFields();
  	 $(document).ready(function(){
	    $('select').formSelect();
	  });	
  </script>
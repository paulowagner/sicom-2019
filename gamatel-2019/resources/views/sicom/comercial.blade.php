<div class="row">
    <div class="col s12">
      	<ul class="tabs tabs-fixed-width">
        	<li class="tab"><a class="AbasAdmin" id="1" href="#novoCliente">Novo Cliente</a></li>
        	<li class="tab"><a class="AbasAdmin" id="2" href="#Clientes">Clientes</a></li>
        	<li class="tab"><a class="AbasAdmin" id="3" href="#novoItem">Novo Item</a></li>
        	<li class="tab"><a class="AbasAdmin" id="4" href="#Item">Itens</a></li>
        	<li class="tab"><a class="AbasAdmin" id="5" href="#Contrato">Contratos</a></li>
        	<li class="tab"><a class="AbasAdmin" id="6" href="#Asset">Asset's</a></li>
        	<li class="tab"><a class="AbasAdmin" id="7" href="#SA">SA</a></li>
      	</ul>
    </div>
    <div id="novoCliente" class="col s12"></div>
    <div id="Clientes" class="col s12"></div>
    <div id="novoItem" class="col s12"></div>
    <div id="Item" class="col s12"></div>
    <div id="Contrato" class="col s12"></div>
    <div id="Asset" class="col s12"></div>
    <div id="SA" class="col s12"></div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
      	$('.tabs').tabs();
    	$('.AbasAdmin').click(function () {
    		if(this.id == 2 && $('#Item').html()==""){
    			$.ajax({
			        url: 'administrativo/item.php',
			        method: 'post',
			        success: function(data){
			            $('#Item').html(data);
			        }
			    });
    		}else if(this.id == 3 && $('#Contrato').html()==""){
    			$.ajax({
			        url: 'administrativo/contrato.php',
			        method: 'post',
			        success: function(data){
			            $('#Contrato').html(data);
			        }
			    });
    		}else if(this.id == 4 && $('#Asset').html()==""){
    			$.ajax({
			        url: 'geral/asset.php',
			        method: 'post',
			        success: function(data){
			            $('#Asset').html(data);
			        }
			    });
    		}else if(this.id == 5){
    			$.ajax({
			        url: 'geral/sa.php',
			        method: 'post',
			        success: function(data){
			            $('#SA').html(data);
			        }
			    });
    		}
    	});
	  	$.ajax({
	        url: 'administrativo/clientes.php',
	        method: 'post',
	        success: function(data){
	            $('#Clientes').html(data);
	        }
	    });
    });
</script>
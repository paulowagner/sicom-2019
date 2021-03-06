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
            if (this.id == 1) {
                $.ajax({
                    url: '{{asset('/sicom/comercial/novoCliente')}}',
                    method: 'get',
                    success: function(data){
                        $('#novoCliente').html(data);
                    }
                });
            }
    		if(this.id == 2 ){
    			$.ajax({
			        url: '{{asset('/sicom/comercial/Cliente')}}',
			        method: 'get',
			        success: function(data){
			            $('#Clientes').html(data);
			        }
			    });
    		}else if(this.id == 3 /*&& $('#Contrato').html()==""*/){
    			$.ajax({
			        url: '{{asset('/sicom/comercial/novoItem')}}',
			        method: 'get',
			        success: function(data){
			            $('#novoItem').html(data);
			        }
			    });
    		}else if(this.id == 4 && $('#Asset').html()==""){
    			$.ajax({
			        url: 'geral/asset.php',
			        method: 'get',
			        success: function(data){
			            $('#Asset').html(data);
			        }
			    });
    		}else if(this.id == 5){
                $.ajax({
                    url: '{{asset('/sicom/comercial/novoItem')}}',
                    method: 'get',
                    success: function(data){
                        $('#Contrato').html(data);
                    }
                });
            }else if(this.id == 6){
                $.ajax({
                    url: '{{asset('/sicom/comercial/asset')}}',
                    method: 'get',
                    success: function(data){
                        $('#Asset').html(data);
                    }
                });
            }else if(this.id == 7){
    			$.ajax({
			        url: '{{asset('/sicom/comercial/novaSA')}}',
			        method: 'get',
			        success: function(data){
			            $('#SA').html(data);
			        }
			    });
    		}
    	});
	  	
    });
</script>
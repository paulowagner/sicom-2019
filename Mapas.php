<div class="row">
	<div class="col s12">
	  	<ul class="tabs tabs-fixed-width" id="tabCab">
	        <li class="tab"><a class="mapTabs" id="1" href="#lastYear">Últimos 12 meses</a></li>
			<li class="tab"><a class="mapTabs" id="2" href="#NewMap">Adicionar</a></li>
			<li class="tab"><a class="mapTabs" id="3" href="#UpdateMap">Atualizar proposta</a></li>
			<li class="tab"><a class="mapTabs" id="4" href="#SearchMonth">Pesquisar Mês</a></li>
			<li class="tab"><a class="mapTabs" id="5" href="#EstatsMaps">Estatísticas</a></li>
	  	</ul>
	</div>
	<div id="lastYear" class="col s12"></div>
	<div id="NewMap" class="col s12"></div>
	<div id="UpdateMap" class="col s12"></div>
	<div id="SearchMonth" class="col s12"></div>
	<div id="EstatsMaps" class="col s12"></div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
      	$('.tabs').tabs();
    	$('.mapTabs').click(function () {
    		if(this.id == 2 && $('#NewMap').html()==""){
    			$.ajax({
			        url: 'mapa/addProposta.php',
			        method: 'post',
			        success: function(data){
			            $('#NewMap').html(data);
			        }
			    });
    		}else if(this.id == 3 && $('#UpdateMap').html()==""){
    			$.ajax({
			        url: 'mapa/updateProposta.php',
			        method: 'post',
			        success: function(data){
			            $('#UpdateMap').html(data);
			        }
			    });
    		}else if(this.id == 4 && $('#SearchMonth').html()==""){
    			$.ajax({
			        url: 'mapa/buscaMes.php',
			        method: 'post',
			        success: function(data){
			            $('#SearchMonth').html(data);
			        }
			    });
    		}else if(this.id == 5 && $('#EstatsMaps').html()==""){
    			$.ajax({
			        url: 'mapa/estatis.php',
			        method: 'post',
			        success: function(data){
			            $('#EstatsMaps').html(data);
			        }
			    });
    		}
    	});
	  	$.ajax({
	        url: 'mapa/lastyear.php',
	        method: 'post',
	        success: function(data){
	            $('#lastYear').html(data);
	        }
	    });
    });
</script>
<div class="row">
    <div class="col s12">
      	<ul class="tabs">
        	<li class="tab col s4"><a class="AbasServ" id="1" href="#NewOS">Nova Ordem de Serviço</a></li>
        	<li class="tab col s4"><a class="AbasServ" id="2" href="#SearchOS">Pesquisar Ordem de Serviço</a></li>
        	<li class="tab col s4"><a class="AbasServ" id="3" href="#MyOs">Minhas Ordem de Serviços</a></li>
      	</ul>
    </div>
    <div id="NewOS" class="col s12"></div>
    <div id="SearchOS" class="col s12"></div>
    <div id="MyOs" class="col s12"></div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        M.updateTextFields();
        $('.tabs').tabs();
        $.ajax({
                    url: '{{url("/sicom/servico/novaOS")}}',
                    method: 'get',
                    success: function(data){
                        $('#NewOS').html(data);
                    }
                });
        $('.AbasServ').click(function () {
            if(this.id == 2 && $('#SearchOS').html()==""){
                $.ajax({
                    url: 'servico/buscaOS.php',
                    method: 'get',
                    success: function(data){
                        $('#SearchOS').html(data);
                    }
                });
            }else if(this.id == 3 && $('#MyOs').html()==""){
                $.ajax({
                    url: 'servico/contrato.php',
                    method: 'get',
                    success: function(data){
                        $('#MyOs').html(data);
                    }
                });
            }
        });
    });
      
</script>
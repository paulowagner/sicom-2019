<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SICOM</title>
        <link rel="icon" href="imagens/favicon.ico">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		
		<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
       	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
       	<script language="javascript" src="js/scripts.js"></script>
       	<link href="{{ asset('css/estilo_sicom.css')}}" rel="stylesheet">
       	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    	<script language="javascript">
	    	
	      	$(document).ready( function(){
	          	$('.sub_setores_admin').click(function(){
		            if (this.id == 'admin-01') {
		            	$('#conteudo').load('{{url('/buscaCliente')}}');
		            }else if(this.id == 'admin-02'){
		            	$('#conteudo').load('{{url('/buscaEstoque')}}');	
		            }else if(this.id == 'admin-04'){
		            	$.ajax({
			                url: '{{url('/cadEstoque')}}',
			                method: 'post',
			                data: $('#seguranca').serialize(),
			                success: function(data){
			                    $('#conteudo').html(data);
			                }
			            });
		            }else if(this.id == 'admin-05'){
		            	$('#cliente').val('Novo');
		            	$.ajax({
			                url: '{{url('/cadCliente')}}',
			                method: 'post',
			                data: $('#seguranca').serialize(),
			                success: function(data){
			                    $('#conteudo').html(data);
			                }
			            });
		            }
		            else if(this.id == 'admin-06'){
		            	$('#where').val(' where tipoDestinatario = 3');
		            	$('#msg').val('Pedidos de Proposta');
		            	$('#dest').val('false');
		            	$.ajax({
			                url: 'Administrativo/mensagens_sis.php',
			                method: 'post',
			                data: $('#seguranca').serialize(),
			                success: function(data){
			                    $('#conteudo').html(data);
			                }
			            });
		            }else if(this.id == 'admin-08'){
		            	$('#conteudo').load('{{route('admin.contato.adicionar')}}');
		            }else if(this.id == 'admin-09'){
		            	$('#conteudo').load('{{route('admin.contato')}}');
		            }else if(this.id == 'admin-07'){
		            	$('#where').val(' where tipoDestinatario = 2');
		            	$('#msg').val('Pedidos de Faturamento');
		            	$('#dest').val('false');
		            	$.ajax({
			                url: 'Administrativo/mensagens_sis.php',
			                method: 'post',
			                data: $('#seguranca').serialize(),
			                success: function(data){
			                    $('#conteudo').html(data);
			                }
			            });
		            }else{
		            	$('#conteudo').load('Administrativo/visualizar_os_faturamento.php');
		            }
		            
	          	});
	          	$('.sub_setores_serv').click(function(){
		            if (this.id == 'serv-01') {
		            	$('#conteudo').load('{{route('admin.os.adicionar')}}');
		            }else if(this.id == 'serv-02'){
		            	$('#conteudo').load('{{route('admin.os.buscar')}}');
		            }else if(this.id == 'serv-04'){
		            	$('#conteudo').load('Servico/table_os_usu.php');
		            }else if(this.id == 'serv-05'){
		            	$('#where').val(' where tipoDestinatario = 4 or tipoDestinatario = 5 ');
		            	$('#msg').val('Propostas aprovadas');
		            	$('#dest').val('true');
		            	$.ajax({
			                url: 'Administrativo/mensagens_sis.php',
			                method: 'post',
			                data: $('#seguranca').serialize(),
			                success: function(data){
			                    $('#conteudo').html(data);
			                }
			            });
		            }else{
		            	$('#conteudo').load('Servico/visualizar_os.php');
		            	
		            }
		            
	          	});
	          	$('.sub_setores_gerencia').click(function(){
		            if (this.id == 'gerencia-01') {
		            	$('#conteudo').load('{{route('admin.Users')}}');
		            }else if(this.id == 'gerencia-02'){
		            	$('#conteudo').load('{{route('admin.Users.adicionar')}}');
		            }else if(this.id == 'gerencia-03'){
		            	$('#conteudo').load('{{url('sicom/perfis')}}');
		            }else if(this.id == 'gerencia-04'){
		            	$('#conteudo').load('Gerencia/gerar_relatorio.php');
		            }else{
		            	
		            	$('#conteudo').load("Gerencia/mensagens_sis.php")
		            }
		            
	          	});
	          	$('.sub_setores_conta').click(function(){
		            if (this.id == 'conta-01') {
		            	$('#conteudo').load('Conta/alterar_senha.php');
		            }else if(this.id == 'conta-02'){
		            	$('#conteudo').load('Conta/alterar_email.php');
		            }
		            
	          	});
	      	});
	      
	    </script>
    </head>

    <body> 		
    	<form id="seguranca" method="post" style="border: none">
    		{{csrf_field()}}
    		<input type="hidden" name="cliente" id="cliente" value="">
    		<input type="hidden" name="where" id="where" value="">
    		<input type="hidden" name="msg" id="msg" value="">
    		<input type="hidden" name="dest" id="dest" value="">
    	</form>
		@yield('menu')
		@yield('conteudo')
		<div id="conteudo"></div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    	<!-- Include all compiled plugins (below), or include individual files as needed -->
    	<script src="js/bootstrap.min.js"></script>
	</body>
</html>
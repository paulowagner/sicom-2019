 <div class="row">
    <div class="col s12" style="background-color: #1E90FF;">
        <ul class="tabs tabs-fixed-width Gerenciar">
            <li class="tab"><a class="AbasGerenciar active" id="1" href="#gertest1">Gerenciar usuarios</a></li>
            <li class="tab"><a class="AbasGerenciar" id="2" href="#gertest2">Adicionar usuario</a></li>
            <li class="tab"><a class="AbasGerenciar" id="3" href="#gertest3">Gerenciar Perfis</a></li>
            <li class="tab"><a class="AbasGerenciar" id="4" href="#gertest4">Gerenciar e-mail's</a></li>
        </ul>
    </div>
    <div id="gertest1" class="col s12"></div>
    <div id="gertest2" class="col s12"></div>
    <div id="gertest3" class="col s12"></div>
    <div id="gertest4" class="col s12"></div>
  </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.Gerenciar').tabs();
            $('.AbasGerenciar').click(function () {
                if(this.id == 2 && $('#gertest2').html()==""){
                    $.ajax({
                        url: 'gerenciamento/AddUsuario.php',
                        method: 'post',
                        success: function(data){
                            $('#gertest2').html(data);
                        }
                    });
                }else if(this.id == 3 && $('#gertest3').html()==""){
                    $.ajax({
                        url: 'gerenciamento/gerenciarPerfis.php',
                        method: 'post',
                        success: function(data){
                            $('#gertest3').html(data);
                        }
                    });
                }else if(this.id == 4 && $('#gertest4').html()==""){
                    $.ajax({
                        url: 'gerenciamento/gerenciarEmails.php',
                        method: 'post',
                        success: function(data){
                            $('#gertest4').html(data);
                        }
                    });
                }
            });
            $.ajax({
                url: 'gerenciamento/gerenciarUsuarios.php',
                method: 'post',
                success: function(data){
                    $('#gertest1').html(data);
                }
            });
        });
      
    </script>
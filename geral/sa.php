<style type="text/css">
    .divAba {
       -webkit-transition: all 1s ease;
       -moz-transition: all 1s ease;
       -o-transition: all 1s ease;
       -ms-transition: all 1s ease;
       transition: all 1s ease;
    }
</style>
<script type="text/javascript">
    
</script>

<div class="row">
    <div class="col s12" id="divOculta" onmouseover="show();" style="height: 20px;display: none"></div>
    <div class="col s12 divAba" onmouseout="hide()" style="display: block">
        <ul class="tabs tabs-fixed-width">
            <li class="tab"><a class="AbasSA" id="1" href="#ResumoSA">Resumo SA'S</a></li>
            <li class="tab"><a class="AbasSA" id="2" href="#newSA">Nova SA</a></li>
            <li class="tab"><a class="AbasSA" id="3" href="#buscaSA">Pesqusiar SA</a></li>
            <li class="tab"><a class="AbasSA" id="4" href="#ListaSA">Listar SA</a></li>
            <li class="tab"><a class="AbasSA" id="5" href="#MinhasSA">Minhas SA'S</a></li>
        </ul>
    </div>
    <div id="ResumoSA" class="col s12"></div>
    <div id="newSA" class="col s12"></div>
    <div id="buscaSA" class="col s12"></div>
    <div id="ListaSA" class="col s12"></div>
    <div id="MinhasSA" class="col s12"></div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        
        $('.tabs').tabs();
        $('.AbasSA').click(function () {
            if(this.id == 2 /*&& $('#newSA').html()==""*/){
                $.ajax({
                    url: 'geral/newSA.php',
                    method: 'post',
                    success: function(data){
                        $('#newSA').html(data);
                    }
                });
            }else if(this.id == 3 && $('#buscaSA').html()==""){
                $.ajax({
                    url: 'geral/buscaSA.php',
                    method: 'post',
                    success: function(data){
                        $('#buscaSA').html(data);
                    }
                });
            }else if(this.id == 4 && $('#ListaSA').html()==""){
                $.ajax({
                    url: 'geral/listarSA.php',
                    method: 'post',
                    success: function(data){
                        $('#ListaSA').html(data);
                    }
                });
            }else if(this.id == 5 && $('#MinhasSA').html()==""){
                $.ajax({
                    url: 'geral/minhasSA.php',
                    method: 'post',
                    success: function(data){
                        $('#MinhasSA').html(data);
                    }
                });
            }
        });
        $.ajax({
            url: 'geral/resumoSA.php',
            method: 'post',
            success: function(data){
                $('#ResumoSA').html(data);
            }
        });
    });
</script>
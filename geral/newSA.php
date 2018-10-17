<?php   
    require('../model/mysql.php');
    require('../php_func.php');
    $BDO = new MySqlModel("usuario");
    $clientes = $BDO->buscar("nome",null, null, null, null);
    $BDO = new MySqlModel("estoque");
    $itens = $BDO->buscar("Descricao as item",null, null, null, null);
?>
<h4 style="text-align: center">Nova SA</h4>
<form class="col s12" method="post" id="newSAForm">
    <div class="row">
        <div class="input-field col s3">
            <input id="Tecnico autocomplete-input" name="Tecnico" type="text" class="autocomplete">
            <label for="Tecnico">Tecnico</label>
        </div>
        <div class="input-field col s3">
            <input id="Data" name="Data" type="date" class="validate">
            <label for="Data">Data de envio</label>
        </div>
        <div class="input-field col s3">
            <label>
                <input type="checkbox" name="autorizado" />
                <span>Autorização</span>
            </label>
        </div>
        <div class="input-field col s3">
            <label>
                <input type="checkbox" name="enviado" />
                <span>Enviado</span>
            </label>
        </div>
    </div>
    <div class="row">
        <div class="col s10">
            <div class="chips chips-autocomplete ItensSaAuto"></div>
        </div>
        <div class="col s2">
            <a id="listItensButton" class="btn waves-effect waves-light">Itens</a>
        </div>
    </div>
    
</form>
<div class="row">
    <div class="col s12" id="formItens">
        
    </div>
</div>
<script type="text/javascript">
    $('select').formSelect();
    $('input.autocomplete').autocomplete({
            data: {
                <?php
                    foreach ($clientes as $cliente){
                        echo '"'.$cliente['nome'].'": null,';
                    }

                ?>
            },
        });
    var elems = document.querySelectorAll('.ItensSaAuto')
    var instances = M.Chips.init(elems, {
            placeholder: 'Enter itens',
            name: 'Itens',
            autocompleteOptions: {
            data: {
                <?php
                    foreach ($itens as $item){
                        echo '"'.$item['item'].'": null,';
                    }

                ?>
            },
            limit: 5,
            minLength: 1,
        }
    });

    $("#listItensButton").click(function(){
        var array = [];
        for (var i = instances[0].chipsData.length - 1; i >= 0; i--) {
            array.push(instances[0].chipsData[i].tag.replace(",", "§"));
        }
        $.ajax({
            url: 'geral/saList.php',
            method: 'post',
            data:{list:""+array+""},
            beforeSend: function(xhr, settings){
                settings.data += '&'+$('#newSAForm').serialize();
                alert(settings.data);
            },
            success: function(data){
                $('#formItens').html(data);
            }
        });
    });
    M.updateTextFields();
</script>
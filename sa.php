<?php   
    require('model/mysql.php');
    require('php_func.php');
    $BDO = new MySqlModel("usuario");
    $clientes = $BDO->buscar("nome",null, null, null, null);
    $BDO = new MySqlModel("estoque");
    $itens = $BDO->buscar("Descricao as item",null, null, null, null);
?>
<h4 style="text-align: center">SA</h4>
<form class="col s12" method="post">
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
                <input type="checkbox" />
                <span>Autorização</span>
            </label>
        </div>
        <div class="input-field col s3">
            <label>
                <input type="checkbox" />
                <span>Enviado</span>
            </label>
        </div>
    </div>
    <div class="row">
        <div class="col s10">
            <div class="chips chips-autocomplete"></div>
        </div>
        <div class="col s2">
            <a id="gogogadget" class="btn waves-effect waves-light">Itens</a>
        </div>
    </div>
    
</form>
<div class="row">
    <div class="col s12" id="formItens">
        
    </div>
</div>
<script type="text/javascript">
    $('select').formSelect();
    M.updateTextFields();
    $('input.autocomplete').autocomplete({
            data: {
                <?php
                    foreach ($clientes as $cliente){
                        echo '"'.$cliente['nome'].'": null,';
                    }

                ?>
            },
        });
    var elems = document.querySelectorAll('.chips')
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
            minLength: 1
        }
    });

    $("#gogogadget").click(function(){
        var array = [];
        for (var i = instances[0].chipsData.length - 1; i >= 0; i--) {
            array.push(instances[0].chipsData[i].tag.replace(",", "§"));
        }
        
        $.ajax({
            url: 'postTeste.php',
            method: 'post',
            data:{list:""+array+""},
            success: function(data){
                $('#formItens').html(data);
            }
        });
    });
</script>
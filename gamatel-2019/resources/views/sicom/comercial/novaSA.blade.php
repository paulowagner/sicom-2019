<h4 style="text-align: center">Nova SA</h4>


<form id="newSAForm" class="col s12">
    <div class="row ui ordered steps tablet stackable">
        <div class="completed step">
            <div class="content">
                <div class="title">Preenchimento</div>
                <div class="description">12/12/2018 16:56</div>
            </div>
        </div>
        <div class="completed step">
            <div class="content">
                <div class="title">Validação</div>
                <div class="description">12/12/2018 17:23</div>
            </div>
        </div>
        <div class="active step">
            <div class="content">
                <div class="title">Aprovador</div>
                <div class="description">Aguardando</div>
            </div>
        </div>
        <div class="step">
            <div class="content">
                <div class="title">Compras</div>
                <div class="description">Validação</div>
            </div>
        </div>
        <div class="step">
            <div class="content">
                <div class="title">Comprar</div>
                <div class="description">Aguardando</div>
            </div>
        </div>
        <div class="step">
            <div class="content">
                <div class="title">Solicitante</div>
                <div class="description">Validação</div>
            </div>
        </div>
        <div class="step">
            <div class="content">
                <div class="title">Finalizada</div>
                <div class="description">SA em andamento</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s3">
            <input id="Tecnico autocomplete-input" name="Tecnico" type="text" class="autocomplete">
            <label for="Tecnico">Tecnico</label>
        </div>
        <div class="input-field col s3">
            <input id="nSA" name="nSA" type="text" class="validate">
            <label for="nSA">Nº SA</label>
        </div>
    </div>
    <div class="row">
       <div class="input-field col s4">
                <input type="text" name="Item" class="validate">
                <label>Item</label>
        </div>
        <div class="input-field col s1">
            <input type="text" name="uni" class="validate">
            <label>Uni</label>
        </div>
        <div class="input-field col s1">
            <input type="text" name="quant" class="validate">
            <label>Quantidade</label>
        </div>
        
        <div class="input-field col s2">
            <input type="date" name="prazo" class="validate">
            <label>Prazo</label>
        </div>
        <div class="input-field col s3">
            <select id="aplicacao" name="aplicacao" class="validate">
                <option value="" disabled selected>Escolha aplicação</option>
                <option value="1">Venda</option>
                <option value="2">Consumo</option>
            </select>
            <label>Aplicação</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s1">
            <input type="text" name="quant_entregue" class="validate">
            <label>Entregue</label>
        </div>
        <div class="input-field col s2">
            <label>
                <input type="checkbox" name="fechamento" class="validate">
                <span>Fechamento</span>
            </label>
        </div>
        <div class="input-field col s3"
            <label>
                <input type="text" name="insp" class="validate">
                <label>Inspeção</label>
        </div>
        <div class="input-field col s3">
            <select id="aplicacao" name="aplicacao" class="validate">
                <option value="0" disabled selected>Avaliação</option>
                <option value="1">Autorizado</option>
                <option value="2">Não autorizado</option>
            </select>
            <label>Autorização</label>
        </div>
    </div>
</form>
<div class="row">
    <div class="col s10">
        <div class="chips chips-autocomplete ItensSaAuto"></div>
    </div>
    <div class="col s2">
        <a id="listItensButton" class="btn waves-effect waves-light">Itens</a>
    </div>
</div>
<div class="row">
    <div class="col s12" id="formItens">
        
    </div>
</div>
<script type="text/javascript">
    $('select').formSelect();
    $('input.autocomplete').autocomplete({
            data: {
                <?php
                    foreach ($users as $user){
                        echo '"'.$user['name'].'": null,';
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
                        echo '"'.$item['descricao'].'": null,';
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
<div id="NewOS" class="col s12">
	<div class="row">
    	<div class="input-field col s6">
            <input type="text" id="autocomplete-input" class="autocomplete">
            <label for="autocomplete-input">Cliente</label>
        </div>
        <div class="input-field col s6" style="display: none;">
            <input type="text" id="autocomplete-input" class="autocomplete">
            <label for="autocomplete-input">Contato</label>
        </div>
  	</div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        M.updateTextFields();
        $('input.autocomplete').autocomplete({
            data: {
                <?php
                    foreach ($clientes as $cliente){
                        echo '"'.$cliente['Cliente'].'": null,';
                    }

                ?>
            },
        });
    });
      
</script>
<?php
/*
$table->increments('id');
$table->string('prioridade');
$table->string('categoria');
$table->string('centroCusto');
$table->string('chamadoEXT');
$table->string('status');
$table->string('motivoStatus');
$table->string('modelo');

$table->unsignedInteger('id_nserieId');
$table->foreign('id_nserieId')->references('id')->on('assets');

$table->unsignedInteger('id_contrato');
$table->foreign('id_contrato')->references('id')->on('contratos');

$table->unsignedInteger('id_contato');
$table->foreign('id_contato')->references('id')->on('contatos');

$table->unsignedInteger('id_user')->nullable();
$table->foreign('id_user')->references('id')->on('users');
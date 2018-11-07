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
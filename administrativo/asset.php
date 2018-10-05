<?php	
	require('../model/mysql.php');
    require('../php_func.php');
    $BDO = new MySqlModel("servico");
    $itens = $BDO->buscar("DISTINCT NSerie","char_length(NSerie) = 10", null, null, null);
?>

<form id="teste">
	<div class="row">
        <div class="col s10">
            <div class="chips chips-autocomplete asset"></div>
        </div>
        <div class="col s2">
            <a id="AssetsButton" class="btn waves-effect waves-light">Assets</a>
        </div>
    </div>
</form>
<div class="row">
	<div class="col s12" id="formAsset">
		
	</div>
</div>
<script type="text/javascript">
	$('select').formSelect();
    M.updateTextFields();
    var elems = document.querySelectorAll('.asset')
    var instancesAsset = M.Chips.init(elems, {
            placeholder: 'Enter itens',
            name: 'Itens',
            autocompleteOptions: {
            data: {
                <?php
                    foreach ($itens as $item){
                        echo '"'.$item['NSerie'].'": null,';
                    }

                ?>
            },
            limit: 5,
            minLength: 1
        }
    });

    $("#AssetsButton").click(function(){

        var array = [];
        for (var i = instancesAsset[0].chipsData.length - 1; i >= 0; i--) {
            array.push(instancesAsset[0].chipsData[i].tag);
        }
        
        $.ajax({
            url: 'administrativo/assetTable.php',
            method: 'post',
            data:{list:""+array+""},
            success: function(data){
                $('#formAsset').html(data);
            }
        });
    });
</script>
		
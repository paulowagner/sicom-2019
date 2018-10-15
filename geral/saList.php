<?php
	$item = explode(",", $_POST['list']);
?>
<form>

	<?php
		echo '<input type="hidden" name="quant" value="'.count($item).'">';
    if($item[0]!=""){
  		for ($i=0; $i < count($item); $i++) { 
  			echo '
  	<div class="row">
        <div class="input-field col s5">
    		<input disabled id="item'.$i.'" type="text" class="validate" value="'.str_replace("§", ",", $item[$i]).'"  >
    		<label for="item'.$i.'">Item</label>
        </div>
        <div class="input-field col s1">
    		<input id="quant'.$i.'" type="text" class="validate" value="0">
    		<label for="quant'.$i.'">Quant.</label>
        </div>
        <div class="input-field col s1">
    		<input id="uni'.$i.'" type="text" class="validate">
    		<label for="uni'.$i.'">Uni.</label>
        </div>
        <div class="input-field col s1">
    		<input id="prazo'.$i.'" type="number" class="validate" min="0">
    		<label for="prazo'.$i.'">Prazo</label>
        </div>
        <div class="input-field col s1">
            <input id="insp'.$i.'" type="text" class="validate">
            <label for="insp'.$i.'">Inspeção</label>
        </div>
	</div>

  			';
  		}
    }
	?>
	
</form>
<script type="text/javascript">
	M.updateTextFields();
</script>
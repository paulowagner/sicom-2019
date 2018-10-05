<?php
	$item = explode(",", $_POST['list']);
?>
<form>

	<?php
		echo '<input type="hidden" name="quant" value="'.count($item).'">';
		for ($i=0; $i < count($item); $i++) { 
			echo '
	<div class="row">
        <div class="input-field col s5">
      		<input disabled id="item'.$i.'" type="text" class="validate" value="'.$item[$i].'"  >
      		<label for="item'.$i.'">Item</label>
        </div>
        <div class="input-field col s1">
      		<input id="quant'.$i.'" type="text" class="validate" value="0">
      		<label for="quant'.$i.'">Quantidade</label>
        </div>
  	</div>

			';
		}
	?>
	
</form>
<script type="text/javascript">
	M.updateTextFields();
</script>
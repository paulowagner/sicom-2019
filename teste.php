<!DOCTYPE html>
<html>
	<head>
		<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

        <!--Let browser know website is optimized for mobile-->
        <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>

	<body>
		<div class="row">
			

			<form id="teste">
				<div class="row">
				    <div class="col s10">
				      	<div class="chips chips-autocomplete"></div>
				    </div>
				    <div class="col s2">
				      	<button id="gogogadget" class="btn waves-effect waves-light" type="submit" name="action">Burgers</button>
				    </div>
			  	</div>
			</form>
		</div>
		<!--JavaScript at end of body for optimized loading-->
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
		<script type="text/javascript">
		 	var elems = document.querySelectorAll('.chips')
    		var instances = M.Chips.init(elems, {
	         		placeholder: 'Enter burgers',
	         		name: 'burgers',
	         		autocompleteOptions: {
	           		data: {
						'cheese': null,
						'bacon': null,
						'chicken': null,
						'frog': null,
						'croc': null,
						'rat': null,
						'snail': null,
						'earth worm': null
	           		},
	           		limit: 5,
	           		minLength: 1
	         	}
			});

  			document.getElementById("gogogadget").addEventListener("click", function(event){
     	 		event.preventDefault();
      			console.error(instances[0].chipsData[0].tag);
      			var array = [instances[0].chipsData[0].tag,instances[0].chipsData[1].tag];
      			$.ajax({
	                url: 'postTeste.php',
	                method: 'post',
	                data:array,
	                success: function(data){

	                    alert(data);
	                }
	            });
			});
	  	</script>
	</body>
</html>

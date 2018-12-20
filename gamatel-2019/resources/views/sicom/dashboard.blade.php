<h1 style="text-align: center;">Dashboard Administrador</h1>
<div class="row">
	<div class="col s6" style="height: 250px;border: 1px solid black;overflow-y: scroll;">
		<h3 style="text-align: center;">Materias pendentes</h3>
		<table class="highlight ui very compact table">
	        <thead>
	          	<tr>
	              	<th>Item Name</th>
	              	<th>Item Price</th>
	              	<th>Aprovação</th>
	          	</tr>
	        </thead>

	        <tbody>
	        	@foreach($itens as $item)
				<tr id="{{$item->id}}">
					<td>{{$item->descricao}}</td>
					<td>R$ {{number_format($item->valor, 2, ',', '.')}}</td>
					<td>
						<button class="waves-effect waves-light btn" id="{{$item->id}}" class="item_apro"><i class="material-icons">check</i></button>
						<button class="waves-effect waves-light btn" id="{{$item->id}}" class="item_repro"><i class="material-icons">clear</i></button>
					</td>
				</tr>
				@endforeach
	        </tbody>
      	</table>
	</div>
	<div class="col s6" style="height: 250px;border: 1px solid black;overflow-y: scroll;">
		<h3 style="text-align: center;">SA pendentes</h3>
		<table class="highlight ui very compact table">
	        <thead>
	          	<tr>
	              	<th>Item Name</th>
	              	<th>Item Price</th>
	              	<th>Aprovação</th>
	          	</tr>
	        </thead>

	        <tbody>
	        	@foreach($itens as $item)
				<tr id="{{$item->id}}">
					<td>{{$item->descricao}}</td>
					<td>R$ {{number_format($item->valor, 2, ',', '.')}}</td>
					<td>
						<button class="waves-effect waves-light btn" id="{{$item->id}}" class="item_apro"><i class="material-icons">check</i></button>
						<button class="waves-effect waves-light btn" id="{{$item->id}}" class="item_repro"><i class="material-icons">clear</i></button>
					</td>
				</tr>
				@endforeach
	        </tbody>
      	</table>
	</div>
</div>
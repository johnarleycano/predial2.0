<div class="fixed-action-btn">
	<a class="btn-floating btn-large boton_agregar">
		<i class="fas fa-lg fa-save" title="Guardar"></i>
	</a>
	<!-- <ul>
		<li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
		<li><a class="btn-floating green"><i class="fas fa-lg fa-user" title="Propietario"></i></a></li>
		<li><a class="btn-floating blue"><i class="fas fa-lg fa-dollar-sign" title="Pago"></i></a></li>
		<li><a class="btn-floating red" href="<?php // echo site_url('gestion_predial/predio'); ?>"><i class="fas fa-lg fa-home" title="Predio"></i></a></li>
	</ul> -->
</div>

<ul class="collapsible expandable">
	<li class="active">
		<div class="collapsible-header"><i class="far fa-lg fa-edit" title="Detalles"></i>&nbsp;&nbsp;Diseño</div>
		<div class="collapsible-body">
			<div class="row">
				<form class="col s12">
					<div class="row">
						<div class="input-field col s4">
							<input id="last_name" type="text" class="validate">
							<label for="last_name">Número de ficha</label>
						</div>

						<div class="input-field col s4">
							<input id="last_name" type="text" class="">
							<label for="last_name">Número de predio</label>
						</div>

						<div class="input-field col s4">
							<input id="last_name" type="number" class="">
							<label for="last_name">Número de predio</label>
						</div>
					</div>
				</form>
  			</div>
		</div>
	</li>
	<li>
		<div class="collapsible-header"><i class="far fa-lg fa-edit" title="Detalles"></i>&nbsp;&nbsp;Identificación</div>
		<div class="collapsible-body"><span>Identificación</span></div>
	</li>
	<li>
		<div class="collapsible-header"><i class="far fa-lg fa-edit" title="Detalles"></i>&nbsp;&nbsp;Third</div>
		<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
	</li>
</ul>

<script type="text/javascript">
	$(document).ready(function(){
		$('.collapsible').collapsible({
			"accordion": false
		})
        
        $('.fixed-action-btn').floatingActionButton();
	})
</script>

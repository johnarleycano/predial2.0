<div class="container">
	<form class="col s12">
		<div class="row">
			<div class="input-field col s12">
				<i class="fas fa-search prefix"></i>
				<label for="icon_prefix">Buscar por nombre de predio, propietario</label>
				<input id="icon_prefix" type="text" autofocus>
			</div>
		</div>
	</form>
</div>

<div id="btn_agregar" class="fixed-action-btn">
	<a class="btn-floating btn-large boton_agregar">
		<i class="fas fa-lg fa-plus" title="Agregar ítem"></i>
	</a>
	<ul>
		<li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
		<li><a class="btn-floating green"><i class="fas fa-lg fa-user" title="Propietario"></i></a></li>
		<li><a class="btn-floating blue"><i class="fas fa-lg fa-dollar-sign" title="Pago"></i></a></li>
		<li><a class="btn-floating red" href="<?php echo site_url('gestion_predial/predio'); ?>"><i class="fas fa-lg fa-home" title="Predio"></i></a></li>
	</ul>
</div>

<div id="predios">
	<div class="progress">
      <div class="indeterminate"></div>
  </div>
</div>

<script type="text/javascript">
	/**
     * Listado de registros
     * 
     * @return {void}
     */
	function listar()
	{
		$("#predios").load("<?php echo site_url('gestion_predial/cargar_interfaz'); ?>", {"tipo": "listado"})
	}

	$(document).ready(function(){
        $('.fixed-action-btn').floatingActionButton()
		
		listar()

	})
</script>
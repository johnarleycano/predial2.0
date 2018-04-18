<div id="predios"></div>

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
		listar()

        $("select").on("change", listar)
	})
</script>
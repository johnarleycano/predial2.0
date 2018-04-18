<table id="tbl_predios" class="display">
    <thead>
        <tr>
            <th>Ficha predial</th>
            <th>Primer propietario</th>
            <th>¿Requerido?</th>
            <th>Fotos</th>
            <th>Archivos</th>
        </tr>
    </thead>
    <tbody>
    	<?php foreach ($this->gestion_predial_model->cargar_predios() as $predio) { ?>
    		<tr>
    			<td><?php echo $predio->Ficha_Predial; ?></td>
    			<td></td>
    			<td><?php echo $predio->Requerido; ?></td>
    			<td></td>
    			<td></td>
    		</tr>
    	<?php } ?>
    </tbody>
</table>

<script type="text/javascript">
	$(document).ready(function() {
		$("table tr").on("click", function(){
			$(this).find('td:first').append("&nbsp;&nbsp;&nbsp;<span></span>")
			$("span").load("<?php echo site_url('gestion_predial/cargar_interfaz'); ?>", {"tipo": "opciones"})
		})

    	$('#tbl_predios').DataTable({
    		"select": "single",
	        "stateSave": true,
            "language": {
		        url: '<?php echo base_url(); ?>js/dataTables/es_CO.json'
		    }
		})
	})
</script>
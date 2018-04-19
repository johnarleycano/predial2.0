<ul class="collection" style="margin: 0;">
	<?php foreach($this->gestion_predial_model->cargar_predios($ultimo_id, $filtro) as $predio){ ?>
	    <a href="javascript:seleccionar(<?php echo $predio->Pk_Id; ?>)" class="collection-item  left-align post-id" id="<?php echo $predio->Pk_Id; ?>" style="padding: 30px 10px 30px 10px;">
	    	<span style="font-size: 1.2em"><?php echo $predio->Ficha_Predial; ?></span>

	    	<span class="badge new" data-badge-caption="4"><i class="fas fa-camera-retro"></i></span>
	    	<span class="badge new" data-badge-caption="4"><i class="fas fa-camera-retro"></i></span>
	    	<span class="badge new" data-badge-caption="4"><i class="fas fa-camera-retro"></i></span>
	    	<span class="badge new" data-badge-caption="4"><i class="fas fa-camera-retro"></i></span>
	    </a>
	<?php } ?>
</ul>
         
<script>
	function seleccionar(id)
	{
		$("a").removeClass("active")
		$(`#${id}`).addClass("active")
	}

	$(document).ready(function(){
		$('.collapsible').collapsible();
	})
</script>
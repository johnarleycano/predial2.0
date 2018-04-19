<ul class="collection" style="margin: 0;">
	<?php foreach($this->gestion_predial_model->cargar_predios($ultimo_id) as $predio){ ?>
	    <a href="javascript:seleccionar(<?php echo $predio->Pk_Id; ?>)" class="collection-item  left-align post-id" id="<?php echo $predio->Pk_Id; ?>" style="padding: 30px 10px 30px 10px;">
	    	<span style="font-size: 1.2em"><?php echo $predio->Ficha_Predial; ?></span>

	    	<span class="badge new" data-badge-caption="4"><i class="fas fa-camera-retro"></i></span>
	    	<span class="badge new" data-badge-caption="4"><i class="fas fa-camera-retro"></i></span>
	    	<span class="badge new" data-badge-caption="4"><i class="fas fa-camera-retro"></i></span>
	    	<span class="badge new" data-badge-caption="4"><i class="fas fa-camera-retro"></i></span>
	    </a>
	<?php } ?>
</ul>

<?php if(false){ ?>
	<div class="post-id" id="<?php echo $predio->Pk_Id; ?>">
    <h3><a href="#"><?php echo $predio->Ficha_Predial; ?></a></h3>
    
    <p><?php echo "$predio->Ficha_Predial - $predio->Requerido"; ?></p>
    
    <div class="text-right">
        <button class="btn btn-success">Ver más</button>
    </div>
    
    <hr style="margin-top:5px;">
</div>
<?php } ?>

         
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
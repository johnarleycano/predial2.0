<?php foreach($this->gestion_predial_model->cargar_predios($ultimo_id) as $predio){ ?>
    <div class="post-id" id="<?php echo $predio->Pk_Id; ?>">
        <h3><a href="#"><?php echo $predio->Ficha_Predial; ?></a></h3>
        
        <p><?php echo "$predio->Ficha_Predial - $predio->Requerido"; ?></p>
        
        <div class="text-right">
            <button class="btn btn-success">Ver más</button>
        </div>
        
        <hr style="margin-top:5px;">
    </div>
<?php } ?>
<div class="container">
    <div id="post-data">
        <?php
        $this->data["ultimo_id"] = null;
        $this->load->view("gestion_predial/datos", $this->data);
        ?>
    </div>
</div>
<br>

<div class="ajax-load progress">
    <div class="indeterminate"></div>
</div>

<script type="text/javascript">
    $(window).scroll(function() {
        if($(window).scrollTop() + $(window).height() >= $(document).height()) cargar_mas_datos($(".post-id:last").attr("id"))
    })

    function cargar_mas_datos(ultimo_id){
        $.ajax({
            url: "<?php echo site_url('gestion_predial/cargar_interfaz') ?>",
            data: {'tipo': 'listado_infinito', 'ultimo_id': ultimo_id},
            type: "POST",
            beforeSend: function()
            {
                $('.ajax-load').show()
            }
        }).done(function(data){
            $('.ajax-load').hide()
            $("#post-data").append(data)
        }).fail(function(jqXHR, ajaxOptions, thrownError){
              imprimir('El servidor no responde.')
        })
    }
</script>


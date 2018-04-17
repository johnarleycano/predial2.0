<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Cabecera con todos los estilos y scripts -->
        <?php $this->load->view('core/header'); ?>
	</head>
	<body>
        <?php $this->load->view('core/menu'); ?>
        
        <!-- Contenedor principal -->
        <div class="container" id="contenido_principal">
            <!--Se carga el contenido principal -->
            <?php $this->load->view($contenido_principal); ?>
    	</div>

    	<!-- Pié de página -->
        <?php $this->load->view('core/footer'); ?>
	</body>
</html>
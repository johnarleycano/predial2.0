<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Título que viene desde el controlador de cada interfaz -->
<title><?php echo $titulo; ?> | Sistema Predial</title>

<?php if(ENVIRONMENT === 'development') { ?>
	<!-- Estilos -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/materialize.css" />

	<!-- Scripts -->
	<script src="<?php echo base_url(); ?>js/materialize.js"></script>
<?php } ?>

<?php if(ENVIRONMENT === 'production') { ?>
	<!-- Estilos -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway" rel="stylesheet">

	<!-- Scripts -->
	<script src="<?php echo base_url(); ?>js/materialize.min.js"></script>
<?php } ?>

<!-- Fuentes -->
<link rel="stylesheet" href="<?php echo base_url(); ?>css/materialize.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/estilos.min.css" />

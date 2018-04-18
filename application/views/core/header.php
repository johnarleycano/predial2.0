<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Título que viene desde el controlador de cada interfaz -->
<title><?php echo $titulo; ?> | Sistema Predial</title>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

<?php if(ENVIRONMENT === 'development') { ?>
	<!-- Estilos -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/datatables.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/materialize.css" />

	<!-- Scripts -->
	<script src="<?php echo base_url(); ?>js/materialize.js"></script>
	<script src="<?php echo base_url(); ?>js/datatables.js"></script>
<?php } ?>

<?php if(ENVIRONMENT === 'production') { ?>
	<!-- Estilos -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/datatables.min.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/materialize.min.css" />

	<!-- Scripts -->
	<script src="<?php echo base_url(); ?>js/materialize.min.js"></script>
	<script src="<?php echo base_url(); ?>js/datatables.min.js"></script>
<?php } ?>

<!-- Fuentes -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/estilos.min.css" />

<!-- Íconos -->
<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
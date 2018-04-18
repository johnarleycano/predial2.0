<footer class="page-footer">
	<div class="container">
		<div class="row">
			<div class="col l6 s12">
				<h5 class="white-text">Sistema de Gestión Predial, Social y Ambiental</h5>
				<p class="grey-text text-lighten-4">Velocidad de carga:  <strong>{elapsed_time}</strong> segundos. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
			</div>
			<!-- <div class="col l4 offset-l2 s12">
				<h5 class="white-text">Links</h5>
				<ul>
					<li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
					<li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
					<li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
					<li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
				</ul>
			</div> -->
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			© 2018 Copyright Devimed S.A. | Versión <?php echo version(); ?>
			<a class="grey-text text-lighten-4 right" href="http://devimed.com.co" target="_blank">Página web</a>
		</div>
	</div>
</footer>

<?php
function version()
{
    foreach(array_reverse(glob('.git/refs/tags/*')) as $archivo) {
        $contents = file_get_contents($archivo);

        return basename($archivo);
        exit();
    }
}
?>
<nav class="nav-extended">
    <div class="nav-wrapper">
        <a href="#" class="brand-logo">
        <!-- <img class="responsive-img" src="<?php // echo base_url().'img/logos/devimed.png'; ?>" width="75"> -->
        </a>
        <!-- <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">Menú</i></a> -->
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="sass.html">Administración</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">JavaScript</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="sass.html"><i class="fas fa-chart-bar"></i> Reportes</a></li>
            <li><a href="badges.html"><i class="fas fa-file"></i> Documentos</a></li>
            <li><a href="collapsible.html"><i class="fas fa-users"></i> Propietarios</a></li>
            <li><a href="collapsible.html"><i class="fas fa-dollar-sign"></i> Pagos</a></li>
        </ul>
    </div>
    <div class="nav-content">
        <ul class="tabs tabs-transparent">
            <li class="tab"><a href="<?php echo site_url(''); ?>">Inicio</a></li>
            <li class="tab"><a class="active" href="<?php echo site_url('gestion_predial'); ?>">Gestión predial</a></li>
            <li class="tab"><a href="<?php echo site_url('gestion_social'); ?>">Gestión Social</a></li>
            <li class="tab disabled"><a href="<?php echo site_url('gestion_ambiental'); ?>">Gestión Ambiental</a></li> <!-- Desactivar cuando no tenga permiso -->
        </ul>
    </div>
</nav>
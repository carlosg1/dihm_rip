<?php

    // para hacer algo

    // header("Content-type: text/html; charset=utf-8"); 
?>

<div id="top-box">
    <div class="top-box-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <p class="weatherInfo">
                        <?php include_once('fecha.php'); ?>
                    </p>
                </div>
                <div class="col-7" style="padding-top: 0px; padding-bottom: 0px; margin-top: 0px; margin-bottom: 0px;">
                    <div role="navigation" class="navbar navbar-expand-md text-white" style="padding: 0px; margin: 0px;">
                        <button data-target=".top-navbar .navbar-collapse" data-toggle="collapse" class="navbar-toggle btn-navbar collapsed" type="button">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <nav class="collapse navbar-collapse" style="padding: 0px; margin: 0px;">
                            <ul class="nav navbar-nav navbar-center">
                                <li class="nav-item" style="padding: 0px; margin: 0px;">
                                    <a class="nav-link" style="padding-top: 0px; padding-bottom: 0px; margin-top: 0px; margin-bottom: 0px;" title="Ir al inicio" href="https://www.formosa.gob.ar">
                                        <span class="hidden-sm hidden-md hidden-lg">Inicio</span>
                                        <i class="fa fa-home after"></i>
                                    </a>
                                </li>
                                <li class="nav-item" style="padding: 0px; margin: 0px;">
                                    <a class="nav-link" style="padding-top: 0px; padding-bottom: 0px; margin-top: 0px; margin-bottom: 0px;" title="Mapa del sitio" href="https://www.formosa.gob.ar/mapadelsitio">
                                        <span class="hidden-sm hidden-md hidden-lg">Mapa del sitio</span>
                                        <i class="fa fa-sitemap after"></i>
                                    </a>
                                </li>
                                <li class="nav-item" style="padding: 0px; margin: 0px;">
                                    <a class="nav-link" style="padding-top: 0px; padding-bottom: 0px; margin-top: 0px; margin-bottom: 0px;" href="https://www.formosa.gob.ar/miportal/quees" target="_blank"><i class="fa fa-question-circle after"></i> ¿Qué es Mi Portal?</a>
                                </li>
                                <li class="nav-item" style="padding: 0px; margin: 0px;">
                                    <a class="nav-link" style="padding-top: 0px; padding-bottom: 0px; margin-top: 0px; margin-bottom: 0px;" href="https://www.formosa.gob.ar/miportal" ><i class="fa fa-unlock after"></i> Mi Portal</a>
                                </li>
                                <li class="nav-item" style="padding: 0px; margin: 0px;">
                                    <a class="nav-link" style="padding-top: 0px; padding-bottom: 0px; margin-top: 0px; margin-bottom: 0px;" title="Acceso Tablero de Control" id="toggleImagesHeader" href="../tablero"><span class="hidden-sm hidden-md hidden-lg">Acceso Tablero de Control</span><i class="fa fa-chart-line"></i> Tablero</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
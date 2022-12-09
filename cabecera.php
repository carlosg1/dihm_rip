<?php ?>
<div id="top-box">
    <div class="top-box-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-9 col-sm-5">
                    <p class="weatherInfo">
                        <?php include_once('fecha.php'); ?>
                    </p>
                </div>
                <div class="col-xs-3 col-sm-7">
                    <div role="navigation" class="navbar navbar-inverse top-navbar top-navbar-right">
                        <button data-target=".top-navbar .navbar-collapse" data-toggle="collapse" class="navbar-toggle btn-navbar collapsed" type="button">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <nav class="collapse collapsing navbar-collapse" style="width: auto;">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="hidden-xs">
                                    <a title="Ir al inicio" href="https://www.formosa.gob.ar"><span class="hidden-sm hidden-md hidden-lg">Inicio</span><i class="fa fa-home after"></i></a>
                                </li>
                                <li class="hidden-xs">
                                    <a title="Mapa del Sitio" href="https://www.formosa.gob.ar/mapadelsitio"><span class="hidden-sm hidden-md hidden-lg">Mapa del Sitio</span><i class="fa fa-sitemap after"></i></a></li>
                                <li>
                                    <a href="https://www.formosa.gob.ar/miportal/quees" target="_blank"><i class="fa fa-question-circle after"></i> ¿Qué es Mi Portal?</a>
                                </li>
                                <li>
                                    <a href="/miportal" ><i class="fa fa-unlock after"></i> Mi Portal</a>
                                </li>
                                <li>
                                    <a title="Acceso Tablero de Control" id="toggleImagesHeader" href="../tablero"><span class="hidden-sm hidden-md hidden-lg">Acceso Tablero de Control</span><i class="fa fa-chart-line"></i> Tablero</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php

    // para hacer algo

    // header("Content-type: text/html; charset=utf-8"); 

    if(!isset($_REQUEST['logotu'])){
        $_REQUEST['logotu'] = '../img/logo_gob_todos_unidos.jpg';
    }

    if(!isset($_REQUEST['href_logotu'])){
        $_REQUEST['href_logotu'] = '../';
    }
?>

<!-- header -->
<header class="header header-two">
    <div class="header-wrapper ">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 logo-box">
                    <div class="logo">
                        <a href="<?php echo $_REQUEST['href_logotu']; ?>">
                            <!-- logo todos unidos-->
                            <!-- <img src="../img/logo_gob_todos_unidos.jpg" alt="Todos Unidos" id="logo-img"> -->
                            <img src="<?php echo $_REQUEST['logotu']; ?>" alt="Todos Unidos" id="logo-img">
                        </a>
                    </div>
                </div>
                <div class="hidden-xs col-sm-6 col-md-6 col-lg-6 right-box ">
                    <div class="row">
                        <div class="hidden-sm col-sm-6 col-md-6 col-lg-6">
                            <div class="header-icons text-center" style="display: table-cell;vertical-align: middle;">
                                <a class="shareBtn facebook" target="_blank" href="https://www.facebook.com/gobiernodeformosa">
                                    <i class="fab fa-facebook post-icon">
                                    </i>
                                </a>
                                <a class="shareBtn instagram" target="_blank" href="https://www.instagram.com/gobiernodeformosa">
                                    <i class="fab fa-instagram post-icon">
                                    </i>
                                </a>
                                <a class="shareBtn twitter" target="_blank" href="https://twitter.com/GobiernoFormosa?lang=es">
                                    <i class="fab fa-twitter post-icon">
                                    </i>
                                </a>

                                <a class="shareBtn youtube" target="_blank" href="https://www.youtube.com/channel/UCrTFFAVWWsY7vpZWB0LvZbQ/">
                                    <i class="fab fa-youtube post-icon">
                                    </i>
                                </a>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="right-box-wrapper ">
                                <form role="form"  name="search-form" class="search-form" action="/buscar" method="get">
                                    <input class="search-string form-control" type="search" placeholder="Buscar..." name="texto">
                                    <button class="search-submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16"  xml:space="preserve">
                                            <path fill="#003768" d="M12.001,10l-0.5,0.5l-0.79-0.79c0.806-1.021,1.29-2.308,1.29-3.71c0-3.313-2.687-6-6-6C2.687,0,0,2.687,0,6
                                                                    s2.687,6,6,6c1.402,0,2.688-0.484,3.71-1.29l0.79,0.79l-0.5,0.5l4,4l2-2L12.001,10z M6,10c-2.206,0-4-1.794-4-4s1.794-4,4-4
                                                                    s4,1.794,4,4S8.206,10,6,10z">
                                            </path>
                                            <image src="https://cdn-www.formosa.gob.ar/img/png-icons/search-icon.png" alt="" width="16" height="16" style="vertical-align: top;"></image>
                                        </svg>
                                    </button>
                                </form>
                            </div>

                            
                        </div>
                        
                    </div>
                
                    
                </div>
            </div>
        </div>
    </div>
    <!-- .header-wrapper -->
    <div class="header-wrapper-2 header-shadow">
        <div class="container">
            <div class="row">
            
                <div class="col-xs-12">
                    <div class="">
                        <div class="primary">
                            <div class="navbar navbar-default" role="navigation">
                                <button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target=".primary .navbar-collapse">
                                    <span class="text">Menu</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <nav class="collapse collapsing navbar-collapse">
                                    <ul class="nav navbar-nav navbar-center">
                                        <li class='primary item-bg activeArea'>
                                            <a title='Ir al inicio de Catastro' href='/catastro'>
                                                <span class='hidden-md hidden-lg'>Inicio</span>
                                                <i class='fa fa-home hidden-sm hidden-xs'></i>
                                            </a>
                                        </li>
                                        <li class=" primary item-bg"> 
                                            <a href="/catastro/institucional">Institucional</a>
                                        </li>
                                        <li class=" primary item-bg"> 
                                            <a href="/catastro/institucional/contacto">Contacto</a>
                                        </li>
                                        <li class=" primary item-bg"> 
                                            <a href="/catastro/insfraestructuradatosespaciales">Hidrocarburo</a>
                                        </li>
                                        <li class="parent  primary item-bg">
                                            <a href="/catastro/informacionlegal">Miner&iacute;a</a>
                                            <ul class="sub">
                                                <li><a href="/catastro/informacionlegal/leyes">Leyes</a></li><li><a href="/catastro/informacionlegal/decretos">Decretos</a></li><li><a href="/catastro/informacionlegal/disposiciones">Disposiciones</a></li>
                                            </ul>
                                        </li>
                                        <li class=" primary item-bg"> 
                                            <a href="https://sit.formosa.gob.ar/inicio">Tr&aacute;mites</a>
                                        </li>
                                        <li class=" primary item-bg"> 
                                            <a href="/catastro/tramites">Informe Econ&oacute;mico</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- .primary -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- // header -->
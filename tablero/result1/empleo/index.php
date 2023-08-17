<?php 
    require_once '../../include/base_de_datos.php';
    require_once '../../include/obj_conexion.php';
    require_once "../../clases/cabEmpresa.php";

    $oCabEmpresa = new CabEmpresa($conDB);
    $cantidadEmpresasCertificadasAnoVigente = $oCabEmpresa->cantidadEmpresasCertificadasAnoVigente();
    $cantidadEmpresasCertificadasAnoAnterior = $oCabEmpresa->cantidadEmpresasCertificadasAnoAnterior();

    $cantidadEmpresaRegistradasAnoVigente = $oCabEmpresa->cantidadEmpresasRegistradasAnoVigente();
    $cantidadEmpresasRegistradasAnoAnterior = $oCabEmpresa->cantidadEmpresasRegistradasAnoAnterior();

?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tablero - Dashboard - D.I.H.M</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <!-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" /> -->
        <!-- Fontawesome -->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- DataTables -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
        <link href="css/styles.css" rel="stylesheet" />
      
        <style>
            .accordion {
                --mdb-accordion-color: #4f4f4f;
                --mdb-accordion-bg: #fff;
                --mdb-accordion-transition: color 0.15s ease-in-out,background-color 0.15s ease-in-out,border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out,border-radius 0.15s ease;
                --mdb-accordion-border-color: var(--mdb-border-color);
                --mdb-accordion-border-width: 2px;
            }
        </style>

    </head>

    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">D.I.H.M.</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Buscar por..." aria-label="Buscar por..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Configuracion</a></li>
                        <li><a class="dropdown-item" href="#!">Actividad</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="../../">Salir</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">General</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Resumen
                            </a>

                            <!-- Menu lateral de secciones -->
                            <div class="sb-sidenav-menu-heading">Secciones</div>

                            <!-- 1 -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts1">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                1. Caracterizaci&oacute;n
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <!-- 2 -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts2">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                2. Empleo
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <!-- 3 -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapseLayouts3">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                3. Actividad
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <!-- Subitems 3 -->
                            <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">3.1 Facturación</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">3.2 Variación de la facturación</a>
                                </nav>
                            </div>
                            <!-- 4 -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts4" aria-expanded="false" aria-controls="collapseLayouts4">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                4. Clasificación de la Actividad
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <!-- 5 -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts5" aria-expanded="false" aria-controls="collapseLayouts5">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                5. Aprovechamiento de la capadidad industrial
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <!-- 6 -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts6" aria-expanded="false" aria-controls="collapseLayouts6">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                6. Mercado atendido por la actividad industrial
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <!-- 7 -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts7" aria-expanded="false" aria-controls="collapseLayouts7">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                7. Caracterización de la producción industrial
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <!-- 8 -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts8" aria-expanded="false" aria-controls="collapseLayouts8">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                8. Forma jurídica de la actividad industrial
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                           
                            <!-- PAGES -->
                           <!-- 
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                           -->

                            <!-- ADICIONALES -->
                            <div class="sb-sidenav-menu-heading">Adicionales</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Gráficos
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tablas
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Usuario:</div>
                        --- 
                    </div>
                </nav>
            </div>

            <!-- CONTENIDO -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Indicadores de la Actividad Industrial</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Direcci&oacute;n de Industria, Hidrocarburo y Miner&iacute;a</li>
                        </ol>

                        <div class="row">
                            <!-- cantidad empresas registradas año vigente -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-white mb-4 shadow" style="background-color: #003763;">
                                    <div class="card-body">Empresas Registradas<br/>a&ntilde;o vigente</div>
                                    <div class="card-footer text-end">
                                        <span class="h3 text-white">
                                            <?php echo $cantidadEmpresaRegistradasAnoVigente + 144; ?>
                                        </span>
                                        <span class="small text-white">
                                            <i class="fas fa-angle-right"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- cantidad de empresas registradas año anterior -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-white mb-4 shadow" style="background-color: #003763ca;">
                                    <div class="card-body">Empresas Registradas<br/>a&ntilde;o anterior <span style="font-size: 9pt;">(Total 2022)</span></div>
                                    <div class="card-footer text-end">
                                        <span class="h3 text-white">
                                            <?php // echo $cantidadEmpresasRegistradasAnoAnterior; ?>
                                            <?php echo '201'; ?>
                                        </span>
                                        <span class="small text-white"><i class="fas fa-angle-right"></i></span>
                                    </div>
                                </div>
                            </div>
                            <!-- cantidad empresas certificadas año vigente -->
                           <div class="col-xl-3 col-md-6">
                                <div class="card text-white mb-4 shadow" style="background-color: #859222;">
                                    <div class="card-body">Empresas Certificadas<br/>a&ntilde;o vigente <span style="font-size: 9pt;">(Junio 2023)</span></div>
                                    <div class="card-footer text-end">
                                        <span class="h3 text-white">
                                            <?php //echo $cantidadEmpresasCertificadasAnoVigente; ?>
                                            <?php echo '144'; ?>
                                        </span>
                                        <span class="small text-white"><i class="fas fa-angle-right"></i></span>
                                    </div>
                                </div>
                            </div>
                            <!-- cantidad empresas certificadas año anterior -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-white mb-4 shadow" style="background-color: #859222ca;">
                                    <div class="card-body">Empresas Certificadas<br/>a&ntilde;o anterior <span style="font-size: 9pt;">(Total 2022)</span></div>
                                    <div class="card-footer text-end">
                                        <span class="h3 text-white">
                                            <?php // echo $cantidadEmpresasCertificadasAnoAnterior; ?>
                                            <?php echo '201'; ?>
                                        </span>
                                        <span class="small text-white"><i class="fas fa-angle-right"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        1.1 Empresas certificadas
                                    </div>
                                    <div class="card-body">
                                        <canvas id="myBarChart" width="100%" height="40"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        1.2 Empresas registradas
                                    </div> 
                                    <div class="card-body"><canvas id="chartEmpRegistrada" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        1.3 Cantidad  de Empresas Inscriptas en el RIP de manera  mensual y acumulada durante el año vigente.
                                    </div>
                                    <div class="card-body">
                                        <canvas id="char_1_3" width="100%" height="40"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        1.4 Variación de la cantidad  de Empresas Inscriptas en el RIP de manera  mensual y acumulada del año vigente con respecto al año precedente.
                                    </div> 
                                    <div class="card-body"><canvas id="chart_1_4" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        1.5.1 Distribución geográfica de las Empresas Inscriptas en el RIP año vigente. 
                                        <strong><a href="mapa_1_5_1_ampliado.php">Ampliar...</a></strong>
                                    </div> 
                                    
                                    <div class="card-body" style="padding: 0px;">
                                        <iframe style="padding: 0px; width: 500px; height: 234px;" id="mapa_1.5_1" src="mapa_1_5/mapa_1_5/index.html#6/-25.396/-59.583"></iframe>
                                        <!-- <canvas id="char_1_5" width="100%" height="40"></canvas> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-table me-1"></i>
                                        1.5.1 Distribución geográfica de las Empresas Inscriptas en el RIP año vigente.
                                    </div> 
                                    <div class="card-body">
                                        <table id="tabla_1_5_1" class="display">
                                            <thead>
                                                <tr>
                                                    <th>Localidad</th>
                                                    <th>Cantidad</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Graficos 1.6 y 1.7 -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        1.6 Situación de la empresa con respecto al inmueble de la planta industrial.
                                    </div>
                                    <div class="card-body">
                                        <canvas id="chart_1_6" width="100%" height="200"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        1.7 Densidad de empresas industriales por cantidad de habitantes.
                                    </div> 
                                    <div class="card-body"><canvas id="char_1_6" width="100%" height="200"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <!-- Graficos 1.8 y ... -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        1.8 Proporción de PyMes Industriales en relación a la cantidad de PyMes operando en la provincia.
                                    </div>
                                    <div class="card-body">
                                        <canvas id="chart_1_6" width="100%" height="200"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-table me-1"></i>
                                        1.8 Proporción de PyMes Industriales en relación a la cantidad de PyMes operando en la provincia.
                                    </div> 
                                    <div class="card-body"><canvas id="char_1_6" width="100%" height="200"></canvas></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; D.I.H.M. 2023</div>
                            <div>
                                Pol&iacute;tica de privacidad
                                &middot;
                                T&eacute;rminos &amp; Condiciones
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <!-- Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <!-- Bootstrap -->
        <script src="js/scripts.js"></script>

        <!-- Chart.js -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
        
        <!-- Datatables -->
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>

        <!-- <script src="assets/graf/chart-area-demo.js"></script> -->
        <script src="assets/graf/chart_cant_empresas_certificadas.js"></script>
        <script src="assets/graf/chart_cant_empresas_registradas.js"></script>
        <script src="assets/graf/chart_1_3.js"></script>
        <script src="assets/graf/chart_1_4.js"></script>
        <script src="tabla_1_5_1.js"></script>
        <script src="assets/graf/chart_1_6.js"></script>

        

        
       
        <script src="js/datatables-simple-demo.js"></script>
        
    </body>
</html>

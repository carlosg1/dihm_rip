<?php
    // Si el sitio está en mantenimiento
   include_once '../include/mantenimiento.php';
    if ($mantenimiento) {
        // Redirigir a la página de mantenimiento
        header('Location: ../mantenimiento/');
        exit;
    }

    session_name('industrias4');
    session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Inscripci&oacute;n al RIP</title>

    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="keywords" content="dihm, dirección de industria hidrocarburo y mineria, formosa tu ciudad, hidrocarburo, mineria, registro de industria">
	<meta name="description" content="Información institucional, consultas, trámites, registro de industria">
	<meta name="robots" content="FOLLOW,INDEX">
    <meta name="author" content="Gobierno de la Provincia de Formosa">

    <!-- JQUERY UI -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Fontawesome -->
    <!-- <script src="https://kit.fontawesome.com/4c72def62b.js" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400;0,500;0,600;0,700;1,500;1,700&family=Roboto+Slab:wght@300&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap&SameSite=None; Secure" rel="stylesheet">

    <!-- MDB - Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet">

    <!-- Estilo propio global -->
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/registro.css">

    <!-- Preinscripcion -->
    <link rel="stylesheet" href="inscripcion.css">

    <!-- Tootip -->
    <link rel="stylesheet" href="../css/tooltip.css">

</head>

<body>

    <!-- Menu -->
    <nav class="navbar navbar-expand-lg navbar-dark nav-preinscripcion">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../">
                        <span class="fas fa-arrow-left" style="margin-right:7px;"></span>
                        Salir
                    </a>
                </li>
                <!-- 
                <li class="nav-item">
                    <a class="nav-link" href="../lista_empresas/">Lista empresas</a>
                </li> 
                -->
            </ul>
        </div>
    </nav>
    <!-- // Menu -->

    <!-- Encabezado de la pagina -->
    <div class="container-fluid d-md-none justify-content-center">
        <header class="fixed-top">
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <div class="container-fluid">
                    <a class="navbar-brand d-flex justify-content-center" href="#">
                        <img src="../img/logo_min_economia.png" alt="Ministerio de Econom&iacute;a Hacienda y Finanzas" class="img-fluid">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Acerca de</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <!-- // Encabezado de la pagina -->

    <!-- Titulo principal -->
    <div class="container">
        <h1 class="title titulo_inscripcion">Inscripción al Registro de Industria</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col border-bottom border-2 shadow"></div>
        </div>
    </div>
    <!-- // Titulo principal -->

    
    
    <!-- CUIT DE LA EMPRESA -->
    <div class="px-5 pt-5">
        <div class="row mb-2">
            <div class="col-md-10">
                <form>
                    <div class="mb-3 row">
                        <label for="cuit" class="col-sm-4 col-form-label" style="font-size: 18pt; font-weight: bold;">C.U.I.T. / C.U.I.L.</label>
                        
                        <div class="col-sm-8">
                            <input type="text" class="form-control cuit" id="cuit" name="cuit" style="font-weight: bold; font-size: 18pt;">
                        </div>
                        <span>Sin guiones ni puntos</span>
                    </div>
                </form>
                
            </div>
        </div>
    </div>

    <!-- nuevas columnas 5-7-2023 -->
    <div class="px-5 py-3">
        <div class="row">
            <!-- Columna 1 -->
            <div class="col-sm-6">
                <!-- Periodo de registro -->
                <div class="row mb-2">
                    <div class="accordion" id="accordion1">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    Periodo de registro 
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordion1">
                                <div class="accordion-body">
                                    <form>
                                        <div class="row mb-3">
                                            <label for="estado_registro" class="col-sm-4 col-form-label">Estad&iacute;o del Registro</label>
                                            <div class="col-sm-8">
                                                <select class="form-select" id="estado_registro" name="estado_registro" title="Estado de registro">
                                                <option value="P">Pre-Inscripto</option>
                                                <option value="I" selected>Inscripto</option>
                                                <option value="C">Certificado</option>
                                                <option value="A">Acuse de recibo / Activa</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="mes" class="col-sm-4 col-form-label">Mes de Registro</label>
                                            <div class="col-sm-8">
                                                <select class="form-select" id="mes_registro" name="mes_registro" title="Mes de registro">
                                                    <option value="1">Enero</option>
                                                    <option value="2">Febrero</option>
                                                    <option value="3">Marzo</option>
                                                    <option value="4">Abril</option>
                                                    <option value="5">Mayo</option>
                                                    <option value="6">Junio</option>
                                                    <option value="7" selected>Julio</option>
                                                    <option value="8">Agosto</option>
                                                    <option value="9">Septiembre</option>
                                                    <option value="10">Octubre</option>
                                                    <option value="11">Noviembre</option>
                                                    <option value="12">Diciembre</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="anio" class="col-sm-4 col-form-label">A&ntilde;o de Registro</label>
                                            <div class="col-sm-8">
                                            <select class="form-select" id="ano_reistro" name="ano_registro" title="A&ntilde;o de registro">
                                                    <option value="2021">2021</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2023" selected>2023</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="localidad" class="col-sm-4 col-form-label">Localidad</label>
                                            <div class="col-sm-8">
                                            <select class="form-select" id="localidad" name="localidad" title="Localidad donde se encuentra instalada la planta industrial">
                                                <option value="Sin dato" selected>Sin dato</option>
                                                <option value="CABA" selected>C.A.B.A.</option>
                                                <option value="Clorinda">Clorinda</option>
                                                <option value="El Colorado">El Colorado</option>
                                                <option value="Formosa">Formosa</option>
                                                <option value="Gral. Manuel Belgrano">Gral. Manuel Belgrano</option>
                                                <option value="Herradura">Herradura</option>
                                                <option value="Ibarreta">Ibarreta</option>
                                                <option value="Ing. Juarez">Ing. Juarez</option>
                                                <option value="Laguna Blanca">Laguna Blanca</option>
                                                <option value="Laguna Gallo">Laguna Gallo</option>
                                                <option value="Laguna Yema">Laguna Yema</option>
                                                <option value="Las Lomitas">Las Lomitas</option>
                                                <option value="Mayor Villafañe">Mayor Villafañe</option>
                                                <option value="Palma Sola">Palma Sola</option>
                                                <option value="Palo Santo">Palo Santo</option>
                                                <option value="Parque Industrial">Parque Industrial</option>
                                                <option value="Pirane">Pirane</option>
                                                <option value="Posadas">Posadas</option>
                                                <option value="San Francisco">San Francisco</option>
                                                <option value="San Luis">San Luis</option>
                                                <option value="Surubi">Surubi</option>
                                                <option value="Tartagal">Tartagal</option>
                                                <option value="Tatane">Tatane</option>
                                                <option value="Villa Dos Trece">Villa Dos Trece</option>
                                                <option value="Villa Gral. Guemes">Villa Gral. Guemes</option>
                                            </select>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="row mt-3">
                                        <div class="col text-end">
                                            <button id="btn_periodo_registro" type="button" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Datos de la empresa -->
                <div class="row mb-2">
                    <div class="accordion" id="accordion3">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    Datos de la Empresa
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordion3">
                                <div class="accordion-body">
                                    <form>
                                        <div class="mb-3 row">
                                            <label for="razonSocial" class="col-sm-4 col-form-label">Raz&oacute;n Social</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control razonSocial" id="razonSocial" name="razonSocial">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="fecha" class="col-sm-4 col-form-label">Inicio actividad</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="fecha" name="fecha" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="relacionTitularDomicilio" class="col-sm-6 col-form-label">
                                                Relaci&oacute;n entre titular y domicilio de la planta
                                            </label>
                                            <div class="col-sm-6">
                                                <select class="form-select" name="relTitularDomic" id="relTitularDomic" title="Seleccione una opci&oacute;n">
                                                    <option value="0" selected>Seleccione</option>
                                                    <option value="1">Alquiler</option>
                                                    <option value="2">Comodato</option>
                                                    <option value="3">Fiscal</option>
                                                    <option value="4">Propiedad</option>
                                                    <option value="5">Sucesi&oacute;n</option>
                                                    <option value="6">Cesi&oacute;n</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="row mt-3">
                                        <div class="col text-end">
                                            <button id="btn_datos_empresa" type="button" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Actividades de la empresa -->
                <div class="row mb-2">
                    <div class="accordion" id="accordion6">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                   Actividades de la empresa
                                </button>
                            </h2>
                            <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordion6">
                                <div class="accordion-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="" class="col-form-label">C.I.I.U.</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="" class="col-form-label">Texto</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="" class="col-form-label">Facturaci&oacute;n anual</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <strong>Actividad principal</strong>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control ciiu_1" id="ciiu_1" name="ciiu_1" campo_actividad="actividad_1">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control actividad_1 sin_borde" id="actividad_1" name="actividad_1" disabled>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control text-end facturacion_1" id="facturacion_1" name="facturacion_1" placeholder="0.00">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <strong>Otras actividades</strong>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control ciiu_2" id="ciiu_2" name="ciiu_2" campo_actividad="actividad_2">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control actividad_2 sin_borde" id="actividad_2" name="actividad_2" disabled>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control text-end facturacion_2" id="facturacion_2" name="facturacion_2" placeholder="0.00">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control ciiu_3" id="ciiu_3" name="ciiu_3" campo_actividad="actividad_3">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control actividad_3 sin_borde" id="actividad_3" name="actividad_3" disabled>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control text-end facturacion_3" id="facturacion_3" name="facturacion_3" placeholder="0.00">
                                            </div>
                                        </div>
                                        <!-- actividad 4 -->
                                        <div class="mb-3 row">
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control ciiu_4" id="ciiu_4" name="ciiu_4" campo_actividad="actividad_4">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control actividad_4 sin_borde" id="actividad_4" name="actividad_4" disabled>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control text-end facturacion_4" id="facturacion_4" name="facturacion_4" placeholder="0.00">
                                            </div>
                                        </div>
                                        <!-- actividad 5 -->
                                        <div class="mb-3 row">
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control ciiu_5" id="ciiu_5" name="ciiu_5" campo_actividad="actividad_5">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control actividad_5 sin_borde" id="actividad_5" name="actividad_5" disabled>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control text-end facturacion_5" id="facturacion_5" name="facturacion_5" placeholder="0.00">
                                            </div>
                                        </div>
                                    </form>
                                    <div class="row mt-3">
                                        <div class="col-sm-6">
                                            <p class="titulo-2">
                                                Buscador de actividad
                                                <i id="searchLink" class="fas fa-search" style="cursor:pointer; cursor:hand;" data-bs-toggle="modal" data-bs-target="#ciiuModal" title="Buscar CIIU"></i>
                                            </p>
                                        </div>
                                        <div class="col-sm-6 text-end">
                                            <button id="btn_actividad_empresa" type="button" class="btn btn-primary" title="Guarda datos de Actividad de la empresa">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 

                <!-- Datos del titular -->
                <div class="row mb-2">
                    <div class="accordion" id="accordion7">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                   Datos del Titular
                                </button>
                            </h2>
                            <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordion7">
                                <div class="accordion-body">
                                    <form>
                                        <div class="mb-3 row">
                                            <label for="cuitTitular" class="col-sm-4 col-form-label">CUIT Titular</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control cuitTitular" id="cuitTitular" name="cuitTitular">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="nombreTitular" class="col-sm-4 col-form-label">Apellido y Nombre</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control nombreTitular" id="nombreTitular" name="nombreTitular">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="telefonoTitular" class="col-sm-4 col-form-label">Telef. de contacto</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control telefonoTitular" id="telefonoTitular" name="telefonoTitular">
                                            </div>
                                        </div>
                                    </form>
                                    <div class="row mt-3">
                                        <div class="col text-end">
                                            <button id="btn_datos_titular" type="button" class="btn btn-primary" title="Guarda solo datos del titular">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 

                <!-- 04 - productos -->
                <div class="row mb-2">
                    <div class="accordion" id="accordion8">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading8">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                   Productos 
                                </button>
                            </h2>
                            <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordion8">
                                <div class="accordion-body">
                                    <form>
                                        <div class="row mb-3">
                                            <label for="variedad_producto" class="col-sm-4 col-form-label">Variedad de productos</label>
                                            <div class="col-sm-8">
                                                <select class="form-select" id="estado_registro" name="estado_registro" title="Estado de registro">
                                                <option value="1 - 5" selected>1 - 5 </option>
                                                <option value="6 - 10">6 - 10</option>
                                                <option value="11 - 50">11 - 50</option>
                                                <option value="+50">+ 50</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="row mt-3">
                                        <div class="col text-end">
                                            <button disabled id="btn_actividad_empresa" type="button" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 

                <!-- 05 - produccion -->
                <div class="row mb-2">
                    <div class="accordion" id="accordion9">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading9">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                   Producci&oacute;n 
                                </button>
                            </h2>
                            <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordion9">
                                <div class="accordion-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="" class="col-form-label">C.I.I.U.</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="" class="col-form-label">Texto</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="" class="col-form-label">Facturaci&oacute;n anual</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <strong>Actividad principal</strong>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control ciiu_1" id="ciiu_1" name="ciiu_1" campo_actividad="actividad_1">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control actividad_1 sin_borde" id="actividad_1" name="actividad_1" disabled>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control text-end facturacion_1" id="facturacion_1" name="facturacion_1" placeholder="0.00">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <strong>Otras actividades</strong>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control ciiu_2" id="ciiu_2" name="ciiu_2" campo_actividad="actividad_2">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control actividad_2 sin_borde" id="actividad_2" name="actividad_2" disabled>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control text-end facturacion_2" id="facturacion_2" name="facturacion_2" placeholder="0.00">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control ciiu_3" id="ciiu_3" name="ciiu_3" campo_actividad="actividad_3">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control actividad_3 sin_borde" id="actividad_3" name="actividad_3" disabled>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control text-end facturacion_3" id="facturacion_3" name="facturacion_3" placeholder="0.00">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control ciiu_4" id="ciiu_4" name="ciiu_4" campo_actividad="actividad_4">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control actividad_4 sin_borde" id="actividad_4" name="actividad_4" disabled>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control text-end facturacion_4" id="facturacion_4" name="facturacion_4" placeholder="0.00">
                                            </div>
                                        </div>
                                    </form>
                                    <div class="row mt-3">
                                        <div class="col-sm-6">
                                            <p class="titulo-2">
                                                Buscador de actividad
                                                <i id="searchLink" class="fas fa-search" style="cursor:pointer; cursor:hand;" data-bs-toggle="modal" data-bs-target="#ciiuModal" title="Buscar CIIU"></i>
                                            </p>
                                        </div>
                                        <div class="col-sm-6 text-end">
                                            <button disabled id="btn_actividad_empresa" type="button" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>

            <!-- Columna 2 Columna 2 Columna 2 -->
            <div class="col-sm-6">
                <!-- Formas de organizacion juridica -->
                <div class="row mb-2">
                    <div class="accordion" id="accordion2">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    Organizaci&oacute;n Jur&iacute;dica 
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordion2">
                                <div class="accordion-body">
                                    <form>
                                        <div class="mb-3 row">
                                            <label for="organizacionJuridica" class="col-sm-4 col-form-label">Forma de organizaci&oacute;n</label>
                                            <div class="col-sm-8">
                                                <select class="form-select" id="organizacionJuridica">
                                                    <option value="0" selected>Seleccione</option>
                                                    <option value="1">S.R.L.</option>
                                                    <option value="2">S.A.</option>
                                                    <option value="3">S.C.A.</option>
                                                    <option value="4">U.T.E.</option>
                                                    <option value="5">Sociedad Colectiva</option>
                                                    <option value="6">Sociedad de Hecho</option>
                                                    <option value="7">Organismo Estatal</option>
                                                    <option value="8">Cooperativa</option>
                                                    <option value="9">Sucursal Empresa Extranjera</option>
                                                    <option value="11">Unipersonal</option>
                                                    <option value="10">Otro</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="organizacionJuridica_1" class="col-sm-4 col-form-label">Otro tipo de Organizaci&oacute;n</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control organizacionJuridica_1" id="organizacionJuridica_1" placeholder="Tipo de oragnizaci&oacute;n" disabled>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="row mt-3">
                                        <div class="col text-end">
                                            <button disabled id="btn_organiz_juridica" type="button" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Disposiciones -->
                <div class="row mb-2">
                    <div class="accordion" id="accordion4">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    Inscripciones & Disposiciones
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordion4">
                                <div class="accordion-body">
                                    <form>
                                        <!-- Ingresos brutos -->
                                        <div class="row">
                                            <strong>
                                                Ingresos Brutos (IIBB)
                                            </strong>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-6">
                                                <label for="nroIngresoBruto" class="col-sm-4 col-form-label">
                                                    Nro.
                                                </label>
                                                <input type="text" class="form-control nroIngresoBruto" id="nroIngresoBruto" name="nroIngresoBruto">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="fechaIngresoBruto" class="col-sm-4 col-form-label">
                                                    Fecha
                                                </label>
                                                <input type="date" class="form-control fechaIngresoBruto" id="fechaIngresoBruto" name="fechaIngresoBruto">
                                            </div>
                                        </div>
                                        <!-- Habilitacion Municipal -->
                                        <div class="row">
                                            <strong>
                                                Habilitaci&oacute;n Municipal
                                            </strong>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-6">
                                                <label for="habMunicipal" class="col-sm-4 col-form-label">
                                                    Nro.
                                                </label>
                                                <input type="text" class="form-control habMunicipal" id="habMunicipal" name="habMunicipal">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="fechaHabMunicipal" class="col-sm-4 col-form-label">
                                                    Fecha
                                                </label>
                                                <input type="date" class="form-control fechaHabMunicipal" id="fechaHabMunicipal" name="fechaHabMunicipal">
                                            </div>
                                        </div>
                                        <!-- Subsec de puertos y vias navegables -->
                                        <div class="row">
                                            <strong>
                                                Disposici&oacute;n de Subsec. de Puertos y Vías Navegables
                                            </strong>
                                            <span class="aclara-1"> (Para actividades de extracción de arena)</span>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-6">
                                                <label for="txtDisposicion" class="col-sm-4 col-form-label">
                                                    Nro.
                                                </label>
                                                <input type="text" class="form-control txtDisposicion" id="txtDisposicion">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="fechaDisposicion" class="col-sm-4 col-form-label">
                                                    Fecha
                                                </label>
                                                <input type="text" class="form-control fechaDisposicion" id="fechaDisposicion" name="fechaDisposicion">
                                            </div>
                                        </div>
                                        <!-- Registro minero -->
                                        <div class="row">
                                            <strong>
                                                Registro Nacional Minero
                                            </strong>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-6">
                                                <label for="regNacMinero" class="col-sm-4 col-form-label">
                                                    Nro.
                                                </label>
                                                <input type="text" class="form-control regNacMinero" id="regNacMinero" name="regNacMinero">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="fecharegNacMinero" class="col-sm-4 col-form-label">
                                                    Fecha
                                                </label>
                                                <input type="text" class="form-control fecharegNacMinero" id="fecharegNacMinero" name="fecharegNacMinero">
                                            </div>
                                        </div>
                                        <!-- Registro operador hidrocarburo y Gas -->
                                        <div class="row">
                                            <strong>
                                                Registro Operador Hidrocarburo y Gas
                                            </strong>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-6">
                                                <label for="regOperHidroYGas" class="col-sm-4 col-form-label">
                                                    Nro.
                                                </label>
                                                <input type="text" class="form-control regOperHidroYGas" id="regOperHidroYGas" name="regOperHidroYGas">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="fecharegOperHidroYGas" class="col-sm-4 col-form-label">
                                                    Fecha
                                                </label>
                                                <input type="text" class="form-control fecharegOperHidroYGas" id="fecharegOperHidroYGas" name="fecharegOperHidroYGas">
                                            </div>
                                        </div>

                                    </form>
                                    <div class="row mt-3">
                                        <div class="col text-end">
                                            <button disabled id="btn_disposiciones" type="button" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Domicilio Planta / Obrador -->
                <div class="row mb-2">
                    <div class="accordion" style="border-color: #003763;" id="accordion5">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    Domicilio Planta / Obrador 
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordion5">
                                <div class="accordion-body">
                                    <form>
                                        <!-- Domicilio -->
                                        <div class="mb-3 row">
                                            <div class="col-sm-12">
                                                <label for="dpi-txtDomicilio" class="col-sm-4 col-form-label">
                                                    Domicilio Planta
                                                </label>
                                                <input type="text" class="form-control dpi-txtDomicilio" id="dpi-txtDomicilio" name="dpi-txtDomicilio">
                                            </div>
                                        </div>
                                        <!-- Provincia / Departamento -->
                                        <div class="mb-3 row">
                                            <div class="col-sm-6">
                                                <label for="dpi-provincia" class="col-sm-4 col-form-label">
                                                    Provincia
                                                </label>
                                                <input type="text" class="form-control dpi-provincia" id="dpi-provincia" name="dpi-provincia">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="dpi-departamento" class="col-sm-4 col-form-label">
                                                    Departamento
                                                </label>
                                                <input type="text" class="form-control dpi-departamento" id="dpi-departamento" name="dpi-departamento">
                                            </div>
                                        </div>
                                        <!-- Localidad / Codigo Postal -->
                                        <div class="mb-3 row">
                                            <div class="col-sm-6">
                                                <label for="dpi-localidad" class="col-sm-4 col-form-label">
                                                    Localidad
                                                </label>
                                                <input type="text" class="form-control dpi-localidad" id="dpi-localidad" name="dpi-localidad">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="dpi-codPostal" class="col-sm-6 col-form-label">
                                                    C&oacute;digo Postal
                                                </label>
                                                <input type="text" class="form-control dpi-codPostal" id="dpi-codPostal" name="dpi-codPostal">
                                            </div>
                                        </div>
                                    </form>
                                    <div class="row mt-3">
                                        <div class="col text-end">
                                            <button disabled id="btn_domicilioPlanta" type="button" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 06 - Comercializacion -->
                <div class="row mb-2">
                    <div class="accordion" id="accordion10">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading10">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                   Comercializaci&oacute;n
                                </button>
                            </h2>
                            <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#accordion10">
                                <div class="accordion-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="" class="col-form-label">C.I.I.U.</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="" class="col-form-label">Texto</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="" class="col-form-label">Facturaci&oacute;n anual</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <strong>Actividad principal</strong>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control ciiu_1" id="ciiu_1" name="ciiu_1" campo_actividad="actividad_1">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control actividad_1 sin_borde" id="actividad_1" name="actividad_1" disabled>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control text-end facturacion_1" id="facturacion_1" name="facturacion_1" placeholder="0.00">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <strong>Otras actividades</strong>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control ciiu_2" id="ciiu_2" name="ciiu_2" campo_actividad="actividad_2">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control actividad_2 sin_borde" id="actividad_2" name="actividad_2" disabled>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control text-end facturacion_2" id="facturacion_2" name="facturacion_2" placeholder="0.00">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control ciiu_3" id="ciiu_3" name="ciiu_3" campo_actividad="actividad_3">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control actividad_3 sin_borde" id="actividad_3" name="actividad_3" disabled>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control text-end facturacion_3" id="facturacion_3" name="facturacion_3" placeholder="0.00">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control ciiu_4" id="ciiu_4" name="ciiu_4" campo_actividad="actividad_4">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control actividad_4 sin_borde" id="actividad_4" name="actividad_4" disabled>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control text-end facturacion_4" id="facturacion_4" name="facturacion_4" placeholder="0.00">
                                            </div>
                                        </div>
                                    </form>
                                    <div class="row mt-3">
                                        <div class="col-sm-6">
                                            <p class="titulo-2">
                                                Buscador de actividad
                                                <i id="searchLink" class="fas fa-search" style="cursor:pointer; cursor:hand;" data-bs-toggle="modal" data-bs-target="#ciiuModal" title="Buscar CIIU"></i>
                                            </p>
                                        </div>
                                        <div class="col-sm-6 text-end">
                                            <button disabled id="btn_actividad_empresa" type="button" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 

                <!-- 07 - Administracion  -->
                <div class="row mb-2">
                    <div class="accordion" id="accordion11">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading11">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                   Administraci&oacute;n
                                </button>
                            </h2>
                            <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11" data-bs-parent="#accordion11">
                                <div class="accordion-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="" class="col-form-label">C.I.I.U.</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="" class="col-form-label">Texto</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="" class="col-form-label">Facturaci&oacute;n anual</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <strong>Actividad principal</strong>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control ciiu_1" id="ciiu_1" name="ciiu_1" campo_actividad="actividad_1">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control actividad_1 sin_borde" id="actividad_1" name="actividad_1" disabled>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control text-end facturacion_1" id="facturacion_1" name="facturacion_1" placeholder="0.00">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <strong>Otras actividades</strong>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control ciiu_2" id="ciiu_2" name="ciiu_2" campo_actividad="actividad_2">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control actividad_2 sin_borde" id="actividad_2" name="actividad_2" disabled>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control text-end facturacion_2" id="facturacion_2" name="facturacion_2" placeholder="0.00">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control ciiu_3" id="ciiu_3" name="ciiu_3" campo_actividad="actividad_3">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control actividad_3 sin_borde" id="actividad_3" name="actividad_3" disabled>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control text-end facturacion_3" id="facturacion_3" name="facturacion_3" placeholder="0.00">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control ciiu_4" id="ciiu_4" name="ciiu_4" campo_actividad="actividad_4">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control actividad_4 sin_borde" id="actividad_4" name="actividad_4" disabled>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control text-end facturacion_4" id="facturacion_4" name="facturacion_4" placeholder="0.00">
                                            </div>
                                        </div>
                                    </form>
                                    <div class="row mt-3">
                                        <div class="col-sm-6">
                                            <p class="titulo-2">
                                                Buscador de actividad
                                                <i id="searchLink" class="fas fa-search" style="cursor:pointer; cursor:hand;" data-bs-toggle="modal" data-bs-target="#ciiuModal" title="Buscar CIIU"></i>
                                            </p>
                                        </div>
                                        <div class="col-sm-6 text-end">
                                            <button disabled id="btn_actividad_empresa" type="button" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 

                <!-- 10 - Proyectos de mejora -->
                <div class="row mb-2">
                    <div class="accordion" id="accordion12">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading12">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                   Proyectos de mejora
                                </button>
                            </h2>
                            <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12" data-bs-parent="#accordion12">
                                <div class="accordion-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="" class="col-form-label">C.I.I.U.</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="" class="col-form-label">Texto</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="" class="col-form-label">Facturaci&oacute;n anual</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <strong>Actividad principal</strong>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control ciiu_1" id="ciiu_1" name="ciiu_1" campo_actividad="actividad_1">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control actividad_1 sin_borde" id="actividad_1" name="actividad_1" disabled>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control text-end facturacion_1" id="facturacion_1" name="facturacion_1" placeholder="0.00">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <strong>Otras actividades</strong>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control ciiu_2" id="ciiu_2" name="ciiu_2" campo_actividad="actividad_2">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control actividad_2 sin_borde" id="actividad_2" name="actividad_2" disabled>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control text-end facturacion_2" id="facturacion_2" name="facturacion_2" placeholder="0.00">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control ciiu_3" id="ciiu_3" name="ciiu_3" campo_actividad="actividad_3">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control actividad_3 sin_borde" id="actividad_3" name="actividad_3" disabled>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control text-end facturacion_3" id="facturacion_3" name="facturacion_3" placeholder="0.00">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control ciiu_4" id="ciiu_4" name="ciiu_4" campo_actividad="actividad_4">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control actividad_4 sin_borde" id="actividad_4" name="actividad_4" disabled>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control text-end facturacion_4" id="facturacion_4" name="facturacion_4" placeholder="0.00">
                                            </div>
                                        </div>
                                    </form>
                                    <div class="row mt-3">
                                        <div class="col-sm-6">
                                            <p class="titulo-2">
                                                Buscador de actividad
                                                <i id="searchLink" class="fas fa-search" style="cursor:pointer; cursor:hand;" data-bs-toggle="modal" data-bs-target="#ciiuModal" title="Buscar CIIU"></i>
                                            </p>
                                        </div>
                                        <div class="col-sm-6 text-end">
                                            <button disabled id="btn_actividad_empresa" type="button" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <!-- 
    <div style="height: 125px;">.</div>
    <div class="d-md-none container-fluid" style="background-color: #003763; ">
        <div class="footer">
            <div class="row py-3">
                <div class="col-12">
                    <p class="text-capitalize text-center text-white my-0">Ministerio de Economia, Hacienda y Finanza</p>
                    <p class="text-capitalize text-center text-white my-0">Subsecretaría de Desarrollo Económico</p>
                    <p class="text-capitalize text-center text-white my-0">Dirección de Industria, Hidrocarburo y Minería </p>
                </div>
            </div>
        </div>
    </div>
    -->
    <!-- // FOOTER -->


    <!-- ELEMENTOS OCULTOS -->
    <input type="text" id="rip_lat" style="display: none;">
    <input type="text" id="rip_lng" style="display: none;">
    <!-- // ELEMENTOS OCULTOS -->


    <style>
        .form-control-with-clear {
        position: relative;
        }

        .form-control-with-clear input {
        padding-right: 30px;
        }

        .form-control-with-clear .clear-button {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        background: transparent;
        border: none;
        cursor: pointer;
        }
    </style>

    <!-- Modal Buscador CIIU -->
    <div class="modal fade" id="ciiuModal" tabindex="-1" role="dialog" aria-labelledby="ciiuModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="ciiuModalLabel">Buscar CIIU por descripción</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="text" id="CiiuSearchText" class="form-control" placeholder="Escribe un texto">
                <span class="clear-button" onclick="limpiarCampoTexto()"><i class="fas fa-times"></i></span>
                <br>
                <table id="ciiuResultsTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Descripción Corta</th>
                            <th>Descripción Larga</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <!-- <button type="button" class="btn btn-primary">Seleccionar</button> -->
            </div>
        </div>
        </div>
    </div>
    <!-- // Modal Buscador CIIU -->


    <script>
        function limpiarCampoTexto() {
        document.getElementById("CiiuSearchText").value = "";
        }
    </script>


    <!-- MODAL BUSQUEDA CIIU -->
    
    <!-- // MODAL BUSQUEDA CIIU -->

    
    <!-- Jquery -->
    <script src="https://cdn-www.formosa.gob.ar/js/jquery.min.js"></script>
	<script src="https://cdn-www.formosa.gob.ar/js/jquery-migrate-1.2.1.js"></script>
	<script src="https://cdn-www.formosa.gob.ar/js/jquery-ui.min.js"></script>
    <script src="https://cdn-www.formosa.gob.ar/js/bootstrap-datepicker.js"></script>

    <!-- Bootstrap 5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="inscripcion.js"></script>

</body>
</html>
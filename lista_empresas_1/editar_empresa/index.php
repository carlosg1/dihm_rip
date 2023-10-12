<?php
    // Si el sitio está en mantenimiento
   include_once '../../include/mantenimiento.php';
    if ($mantenimiento) {
        // Redirigir a la página de mantenimiento
        header('Location: ../../mantenimiento/');
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
    <link rel="stylesheet" href="../../css/estilo.css">
    <link rel="stylesheet" href="../../css/registro.css">

    <!-- Preinscripcion -->
    <link rel="stylesheet" href="inscripcion.css">

    <!-- Tootip -->
    <link rel="stylesheet" href="../../css/tooltip.css">

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
                    <a class="nav-link" href="../">Salir</a>
                </li>
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
                        <img src="../../img/logo_min_economia.png" alt="Ministerio de Econom&iacute;a Hacienda y Finanzas" class="img-fluid">
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
        <h1 class="title titulo_inscripcion">Editar datos de una Empresa</h1>
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
                            <input disabled type="text" class="form-control cuit" id="cuit" name="cuit" style="font-weight: bold; font-size: 18pt; border:none;">
                        </div>
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
                                                <option value="P" selected>Pre-Inscripto</option>
                                                <option value="I">Inscripto</option>
                                                <option value="C">Certificado</option>
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
                                                <select class="form-select" name="opcRelTitDom" id="opcRelTitDom">
                                                <option value="0" selected>Seleccione</option>
                                                <option value="1">Alquiler</option>
                                                <option value="2">Comodato</option>
                                                <option value="3">Fiscal</option>
                                                <option value="4">Propiedad</option>
                                                <option value="5">Sucesion</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="row mt-3">
                                        <div class="col text-end">
                                            <button disabled id="btn_datos_empresa" type="button" class="btn btn-primary">Guardar</button>
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



            <!-- ********* -->
            <!-- Columna 2 Columna 2 Columna 2 -->
            <!-- ********* -->
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
            </div>
        </div>
    </div>

    <!-- <section> -->
    <div class="container">
        <!-- PASO 1 DATOS DE LA EMPRESA -->
        <!-- <div class="paso-1 transicion-1" style="display: block;"> -->
            <!-- <div class="row">
                <div class="col-xs-12 col-md-8"> -->
                    <!-- DATOS DE LA EMPRESA -->
                    <!-- <div class="row mt-2">
                        <div class="col">
                        <p class="titulo-1">01 - DATOS DE LA EMPRESA</p>
                        </div>
                    </div> -->

                    <!-- <div class="row"> -->
                        <!-- titulo: ordenamiento juridico -->
                        <!-- 
                        <div class="row mt-2">
                            <div class="col-xs-12 col-md-8">
                                <p class="titulo-2">Ordenamiento Jur&iacute;dico</p>
                            </div>
                        </div>
                        -->
                    <!-- </div> -->
                <!-- </div>
            </div> -->

            <!-- ORDENAMIENTO JURIDICO -->
            <!-- 
            <div class="row mt-2 ordenamiento_juridico">
                <div class="col-sm-12 col-md-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="radioOrdenamientoJuridico" id="personaHumana" value="personaHumana" />
                        <label class="form-check-label" for="personaHumana">Unipersonal</label>
                    </div>
                </div>
                
                <div class="col-sm-12 col-md-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="radioOrdenamientoJuridico" id="personaJuridica" value="personaJuridica" />
                        <label class="form-check-label" for="personaJuridica">Persona jur&iacute;dica</label>
                    </div>
                </div>
            </div>
            -->
            
            <!-- <div class="row datosDeLaEmpresa"> -->
                <!-- Razon social -->
                <!-- 
                <div class="row mt-2">
                    <div class="col-xs-12 col-md-8">
                        <div class="form-group">
                            <label class="titulo-3 mt-3" for="razonSocial">Raz&oacute;n social</label>
                            <input type="text" id="razonSocial" name="razonSocial" class="form-control" />
                        </div>
                    </div>
                </div>
                -->

                <!-- CUIT y Fecha inicio actividad -->
                <!-- 
                <div class="row mt-2">
                    
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <label class="titulo-3" for="cuit" id="lblCuit">CUIT</label>
                            <input type="text" id="cuit" name="cuit" class="form-control" />
                        </div>
                    </div>
                    
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <label class="titulo-3" for="fecha">Fecha inicio actividad</label>
                            <input type="text" id="fecha" name="fecha" class="form-control" />
                        </div>
                    </div>
                </div>
                --> 

                <!-- numeros de registro puertos y vias navegables -->
                <!-- 
                <div class="row">
                    <div class="col-xs-12 col-md-5">
                        <div class="form-group">
                            <label class="titulo-3 mt-3" for="txtDisposicion">Disposici&oacute;n de Subsec. de Puertos y Vías Navegables Nro: <span class="aclara-1"> (Para actividades de extracción de arena)</span></label>
                            <input type="text" class="form-control txtDisposicion" id="txtDisposicion">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3">
                        <div class="aclara-1">&nbsp;</div> 
                        <div class="form-group">
                            <label class="titulo-3 mt-1" for="fechaDisposicion">Fecha</label>
                            <input type="text" class="form-control" id="fechaDisposicion">
                        </div>
                    </div>
                </div>
                -->

                <!-- numeros de registro nacional minero -->
                <!-- 
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="form-group">
                            <label class="titulo-3 mt-3" for="regNacMinero">Registro nacional minero Nro</label>
                            <input type="text" class="form-control regNacMinero" id="regNacMinero">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="form-group">
                            <label class="titulo-3" for="fecharegNacMinero">Fecha</label>
                            <input type="text" class="form-control" id="fecharegNacMinero">
                        </div>
                    </div>
                </div>
                -->

                <!-- numeros de registro operadora de hidrocarburo y gas -->
                <!-- 
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-5">
                        <div class="form-group">
                            <label class="titulo-3 mt-3" for="regOperHidroYGas">Registro Operador Hidrocarburo y Gas Nro</label>
                            <input type="text" class="form-control regOperHidroYGas" id="regOperHidroYGas">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="form-group">
                            <label class="titulo-3" for="fecharegOperHidroYGas">Fecha</label>
                            <input type="text" class="form-control" id="fecharegOperHidroYGas">
                        </div>
                    </div>
                </div>
                
            </div>
            -->

            <!-- ACTIVIDADES -->
            <!-- <div class="row mt-3 actividades"> -->
                <!-- <p class="titulo-2">
                    Actividades
                    <i id="searchLink" class="fas fa-search" style="cursor:pointer; cursor:hand;" data-bs-toggle="modal" data-bs-target="#ciiuModal" title="Buscar CIIU"></i>
                </p> -->

                <!-- Agregar actividades -->
                <!-- <div class="row">
                    <div class="col-xs-12 col-md-9">
                        <button role="button" class="btn btn-primary agregarActividad">Agregar actividad</button>
                    </div>
                </div> -->
            <!-- </div> -->



            <!-- BOTONES PASO 1 -->
            <!-- <div class="row justify-content-evenly mt-4">
                <div class="col-6">
                    <button type="button" class="btn btn-secondary mb-4" onclick="window.location.href='../inicio'">
                            Salir <i class="fas fa-sign-out-alt mr-2"></i>
                    </button>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-primary mb-4 boton-1">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div> -->
            <!-- // BOTONES PASO 1 -->
        <!-- </div> -->
        <!-- // PASO 1 -->

        <!-- PASO 2 DATOS DEL TITULAR -->
        <div class="paso-2 transicion-1 sale-derecha" style="display: none;">

            <div class="row mt-3 datosDelTitular">
                <div class="row mb-4">
                    <div class="col-sm-12 col-md-8">
                        <p class="titulo-1">02- DATOS DEL TITULAR</p>
                    </div>
                </div>

                <!-- texto explicativo -->
                <div class="row">
                    <div class="col-12">
                        <div class="aclara-1">(Socios Gerente, Gerente General, Otros)</div>
                    </div>
                </div>

                <!-- apellido y nombre -->
                <div class="row">
                    <div class="col-sm-12 col-md-6 mt-2">
                        <div class="form-group">
                            <label class="titulo-3" for="apellidoYNombre">Apellido y Nombre
                                <input class="form-control apellidoYNombre" type="text" id="apellidoYNombre" name="apellidoYNombre" value=""/>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- cuit y telefono -->
                <div class="row">
                    <div class="col-sm-12 col-md-6 mt-1">
                        <div class="form-group mt-2">
                            <label class="titulo-3" for="cuitTitular">CUIT del Titular
                                <input class="form-control cuitTitular" type="text" name="cuitTitular" id="cuitTitular"/>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 mt-1">
                        <div class="form-group mt-2">
                            <label class="titulo-3" for="telefonoTitular">Tel&eacute;fono de contacto
                                <input class="form-control telefonoTitular" type="text" name="telefonoTitular" id="telefonoTitular"/>
                            </label>
                        </div>
                    </div>
                </div>
            </div> 

            <!-- BOTONES PASO 2 -->
            <div class="row justify-content-evenly mt-4">
                <div class="col-4">
                    <button type="button" class="btn btn-primary mb-4 boton-2-anterior">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                </div>
                <div class="col-4">
                    <button type="button" class="btn btn-primary mb-4 boton-2-siguiente">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div> 
            <!-- //BOTONES -->
        </div>
        <!-- // PASO 2  -->

        <!-- PASO 3 -->
        <div class="row paso-3 transicion-1 sale-derecha" style="display: none;">
            <div class="col-xs-12 col-md-8">

                <div class="row mt-3">
                    <div class="col">
                        <p class="titulo-1">04- PRODUCTOS</p>
                    </div>
                </div>

                <!-- variedad de productos -->
                <div class="row mb-4 wrap-05VariedadDeProductos">

                    <div class="col-8">
                        <p class="titulo-2">Variedad total de productos</p>
                    </div>

                    <!-- variedad de productos -->
                    <div class="form-group">
                        <label class="form-check-label form-check-inline">
                            <input class="form-check-input" type="radio" name="check-variedadProducto" id="variedadProducto1" value="1" autocomplete="off">
                            1 - 5
                        </label>
                        <label class="form-check-label form-check-inline">
                            <input class="form-check-input" type="radio" name="check-variedadProducto" id="variedadProducto2" value="2" autocomplete="off">
                            6 - 10
                        </label>
                        <label class="form-check-label form-check-inline">
                            <input class="form-check-input" type="radio" name="check-variedadProducto" id="variedadProducto3" value="3" autocomplete="off">
                            11 - 50 
                        </label>
                        <label class="form-check-label form-check-inline">
                            <input class="form-check-input" type="radio" name="check-variedadProducto" id="variedadProducto4" value="4" autocomplete="off">
                            +50
                        </label>
                    </div>
                    <!-- // variedad de productos -->
                </div>

                <!-- nombrar los principales productos -->
                <div class="row mt-3 wrap-05ListarPrincipalesProductos">
                    <div class="row">
                        <div class="col">
                            <p class="titulo-2">
                                Nombrar los principales productos, obras o servicios industriales y especializados
                                <br>
                                <span class="comentario-1">Describir los productos que mayor participación tienen en las ventas anuales</span>
                            </p>
                        </div>
                    </div>

                    <!-- fila 1 lista principales productos -->
                    <div class="titulo-2">Producto / Servicio 1</div>
                    <div class="row mb-1">
                        <!-- denominacion -->
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_denominacion_1">Denominaci&oacute;n</label>
                                <input class="form-control ppos_denominacion_1" type="text" name="ppos_denominacion_1" id="ppos_denominacion_1">
                            </div>
                        </div>

                        <div class="titulo-4 my-3">Real año anterior</div>

                        <!-- unidad de medida -->
                        <div class="col-sm-12 col-md-2">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_raa_unidadMedida_1">Unidad de medida</label>
                                <input class="form-control ppos_raa_unidadMedida_1" type="text" name="ppos_raa_unidadMedida_1" id="ppos_raa_unidadMedida_1">
                            </div>
                        </div>

                        <!-- cantindad mensual -->
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_raa_cantMensual_1">Cantidad mensual</label>
                                <input class="form-control ppos_raa_cantMensual_1" type="text" name="ppos_raa_cantMensual_1" id="ppos_raa_cantMensual_1">
                            </div>
                        </div>

                        <!-- cantindad anual -->
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_raa_cantAnual_1">Cantidad anual</label>
                                <input class="form-control ppos_raa_cantAnual_1" type="text" name="ppos_raa_cantAnual_1" id="ppos_raa_cantAnual_1">
                            </div>
                        </div>

                        <!-- % participacion -->
                        <div class="col-sm-12 col-md-2">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_raa_porcentaje_1">% Partic.</label>
                                <input class="form-control ppos_raa_porcentaje_1" type="text" name="ppos_raa_porcentaje_1" id="ppos_raa_porcentaje_1">
                            </div>
                        </div>

                        <div class="titulo-4 my-3">Proyectado año vigente</div>

                        <!-- cantindad mensual -->
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_pav_cantidadMensual_1">Cantidad mensual</label>
                                <input class="form-control ppos_pav_cantidadMensual_1" type="text" name="ppos_pav_cantidadMensual_1" id="ppos_pav_cantidadMensual_1">
                            </div>
                        </div>

                        <!-- cantindad anual -->
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_pav_cantidadAnual_1">Cantidad anual</label>
                                <input class="form-control ppos_pav_cantidadAnual_1" type="text" name="ppos_pav_cantidadAnual_1" id="ppos_pav_cantidadAnual_1">
                            </div>
                        </div>

                        <!-- % participacion -->
                        <div class="col-sm-12 col-md-2">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_pav_porcentaje_1">% Partic.</label>
                                <input class="form-control ppos_pav_porcentaje_1" type="text" name="ppos_pav_porcentaje_1" id="ppos_pav_porcentaje_1">
                            </div>
                        </div>
                    </div>
                    <!-- // fila 1 principales productos -->

                    <hr class="cel-linea-horiz-1 my-3">

                    <!-- fila 2 lista principales productos -->
                    <div class="row mb-1">
                        <!-- denominacion -->
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_denominacion_2">Denominaci&oacute;n</label>
                                <input class="form-control ppos_denominacion_2" type="text" name="ppos_denominacion_2" id="ppos_denominacion_2">
                            </div>
                        </div>

                        <div class="titulo-4 my-3">Real año anterior</div>

                        <!-- unidad de medida -->
                        <div class="col-sm-12 col-md-2">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_raa_unidadMedida_2">Unidad de medida</label>
                                <input class="form-control ppos_raa_unidadMedida_2" type="text" name="ppos_raa_unidadMedida_2" id="ppos_raa_unidadMedida_2">
                            </div>
                        </div>

                        <!-- cantindad mensual -->
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_raa_cantMensual_2">Cantidad mensual</label>
                                <input class="form-control ppos_raa_cantMensual_2" type="text" name="ppos_raa_cantMensual_2" id="ppos_raa_cantMensual_2">
                            </div>
                        </div>

                        <!-- cantindad anual -->
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_raa_cantAnual_2">Cantidad anual</label>
                                <input class="form-control ppos_raa_cantAnual_2" type="text" name="ppos_raa_cantAnual_2" id="ppos_raa_cantAnual_2">
                            </div>
                        </div>

                        <!-- % participacion -->
                        <div class="col-sm-12 col-md-2">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_raa_porcentaje_2">% Partic.</label>
                                <input class="form-control ppos_raa_porcentaje_2" type="text" name="ppos_raa_porcentaje_2" id="ppos_raa_porcentaje_2">
                            </div>
                        </div>

                        <div class="titulo-4 my-3">Proyectado año vigente</div>

                        <!-- cantindad mensual -->
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_pav_cantidadMensual_2">Cantidad mensual</label>
                                <input class="form-control ppos_pav_cantidadMensual_2" type="text" name="ppos_pav_cantidadMensual_2" id="ppos_pav_cantidadMensual_2">
                            </div>
                        </div>

                        <!-- cantindad anual -->
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_pav_cantidadAnual_2">Cantidad anual</label>
                                <input class="form-control ppos_pav_cantidadAnual_2" type="text" name="ppos_pav_cantidadAnual_2" id="ppos_pav_cantidadAnual_2">
                            </div>
                        </div>

                        <!-- % participacion -->
                        <div class="col-sm-12 col-md-2">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_pav_porcentaje_2">% Partic.</label>
                                <input class="form-control ppos_pav_porcentaje_2" type="text" name="ppos_pav_porcentaje_2" id="ppos_pav_porcentaje_2">
                            </div>
                        </div>
                    </div>
                    <!-- // fila 2 lista principales productos -->

                    <hr class="cel-linea-horiz-1 my-3">

                    <!-- fila 3 lista principales productos -->
                    <div class="row mb-1">
                        <!-- denominacion -->
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_denominacion_3">Denominaci&oacute;n</label>
                                <input class="form-control ppos_denominacion_3" type="text" name="ppos_denominacion_3" id="ppos_denominacion_3">
                            </div>
                        </div>

                        <div class="titulo-4 my-3">Real año anterior</div>

                        <!-- unidad de medida -->
                        <div class="col-sm-12 col-md-2">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_raa_unidadMedida_3">Unidad de medida</label>
                                <input class="form-control ppos_raa_unidadMedida_3" type="text" name="ppos_raa_unidadMedida_3" id="ppos_raa_unidadMedida_3">
                            </div>
                        </div>

                        <!-- cantindad mensual -->
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_raa_cantMensual_3">Cantidad mensual</label>
                                <input class="form-control ppos_raa_cantMensual_3" type="text" name="ppos_raa_cantMensual_3" id="ppos_raa_cantMensual_3">
                            </div>
                        </div>

                        <!-- cantindad anual -->
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_raa_cantAnual_3">Cantidad anual</label>
                                <input class="form-control ppos_raa_cantAnual_3" type="text" name="ppos_raa_cantAnual_3" id="ppos_raa_cantAnual_3">
                            </div>
                        </div>

                        <!-- % participacion -->
                        <div class="col-sm-12 col-md-2">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_raa_porcentaje_3">% Partic.</label>
                                <input class="form-control ppos_raa_porcentaje_3" type="text" name="ppos_raa_porcentaje_3" id="ppos_raa_porcentaje_3">
                            </div>
                        </div>

                        <div class="titulo-4 my-3">Proyectado año vigente</div>

                        <!-- cantindad mensual -->
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_pav_cantidadMensual_3">Cantidad mensual</label>
                                <input class="form-control ppos_pav_cantidadMensual_3" type="text" name="ppos_pav_cantidadMensual_3" id="ppos_pav_cantidadMensual_3">
                            </div>
                        </div>

                        <!-- cantindad anual -->
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_pav_cantidadAnual_3">Cantidad anual</label>
                                <input class="form-control ppos_pav_cantidadAnual_3" type="text" name="ppos_pav_cantidadAnual_3" id="ppos_pav_cantidadAnual_3">
                            </div>
                        </div>

                        <!-- % participacion -->
                        <div class="col-sm-12 col-md-2">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_pav_porcentaje_3">% Partic.</label>
                                <input class="form-control ppos_pav_porcentaje_3" type="text" name="ppos_pav_porcentaje_3" id="ppos_pav_porcentaje_3">
                            </div>
                        </div>
                    </div>
                    <!-- // fila 3 lista principales productos -->

                    <hr class="cel-linea-horiz-1 my-3">

                    <!-- fila 4 lista principales productos -->
                    <div class="row mb-1">
                        <!-- denominacion -->
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_denominacion_4">Denominaci&oacute;n</label>
                                <input class="form-control ppos_denominacion_4" type="text" name="ppos_denominacion_4" id="ppos_denominacion_4">
                            </div>
                        </div>

                        <div class="titulo-4 my-3">Real año anterior</div>

                        <!-- unidad de medida -->
                        <div class="col-sm-12 col-md-2">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_raa_unidadMedida_4">Unidad de medida</label>
                                <input class="form-control ppos_raa_unidadMedida_4" type="text" name="ppos_raa_unidadMedida_4" id="ppos_raa_unidadMedida_4">
                            </div>
                        </div>

                        <!-- cantindad mensual -->
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_raa_cantMensual_4">Cantidad mensual</label>
                                <input class="form-control ppos_raa_cantMensual_4" type="text" name="ppos_raa_cantMensual_4" id="ppos_raa_cantMensual_4">
                            </div>
                        </div>

                        <!-- cantindad anual -->
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_raa_cantAnual_4">Cantidad anual</label>
                                <input class="form-control ppos_raa_cantAnual_4" type="text" name="ppos_raa_cantAnual_4" id="ppos_raa_cantAnual_4">
                            </div>
                        </div>

                        <!-- % participacion -->
                        <div class="col-sm-12 col-md-2">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_raa_porcentaje_4">% Partic.</label>
                                <input class="form-control ppos_raa_porcentaje_4" type="text" name="ppos_raa_porcentaje_4" id="ppos_raa_porcentaje_4">
                            </div>
                        </div>

                        <div class="titulo-4 my-3">Proyectado año vigente</div>

                        <!-- cantindad mensual -->
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_pav_cantidadMensual_4">Cantidad mensual</label>
                                <input class="form-control ppos_pav_cantidadMensual_4" type="text" name="ppos_pav_cantidadMensual_4" id="ppos_pav_cantidadMensual_4">
                            </div>
                        </div>

                        <!-- cantindad anual -->
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_pav_cantidadAnual_4">Cantidad anual</label>
                                <input class="form-control ppos_pav_cantidadAnual_4" type="text" name="ppos_pav_cantidadAnual_4" id="ppos_pav_cantidadAnual_4">
                            </div>
                        </div>

                        <!-- % participacion -->
                        <div class="col-sm-12 col-md-2">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_pav_porcentaje_4">% Partic.</label>
                                <input class="form-control ppos_pav_porcentaje_4" type="text" name="ppos_pav_porcentaje_4" id="ppos_pav_porcentaje_4">
                            </div>
                        </div>
                    </div>
                    <!-- // fila 4 lista principales productos -->

                    <hr class="cel-linea-horiz-1 my-3">

                    <!-- fila 5 lista principales productos -->
                    <div class="row mb-1">
                        <!-- denominacion -->
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_denominacion_5">Denominaci&oacute;n</label>
                                <input class="form-control ppos_denominacion_5" type="text" name="ppos_denominacion_5" id="ppos_denominacion_5">
                            </div>
                        </div>

                        <div class="titulo-4 my-3">Real año anterior</div>

                        <!-- unidad de medida -->
                        <div class="col-sm-12 col-md-2">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_raa_unidadMedida_5">Unidad de medida</label>
                                <input class="form-control ppos_raa_unidadMedida_5" type="text" name="ppos_raa_unidadMedida_5" id="ppos_raa_unidadMedida_5">
                            </div>
                        </div>

                        <!-- cantindad mensual -->
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_raa_cantMensual_5">Cantidad mensual</label>
                                <input class="form-control ppos_raa_cantMensual_5" type="text" name="ppos_raa_cantMensual_5" id="ppos_raa_cantMensual_5">
                            </div>
                        </div>

                        <!-- cantindad anual -->
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_raa_cantAnual_5">Cantidad anual</label>
                                <input class="form-control ppos_raa_cantAnual_5" type="text" name="ppos_raa_cantAnual_5" id="ppos_raa_cantAnual_5">
                            </div>
                        </div>

                        <!-- % participacion -->
                        <div class="col-sm-12 col-md-2">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_raa_porcentaje_5">% Partic.</label>
                                <input class="form-control ppos_raa_porcentaje_5" type="text" name="ppos_raa_porcentaje_5" id="ppos_raa_porcentaje_5">
                            </div>
                        </div>

                        <div class="titulo-4 my-3">Proyectado año vigente</div>

                        <!-- cantindad mensual -->
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_pav_cantidadMensual_5">Cantidad mensual</label>
                                <input class="form-control ppos_pav_cantidadMensual_5" type="text" name="ppos_pav_cantidadMensual_5" id="ppos_pav_cantidadMensual_5">
                            </div>
                        </div>

                        <!-- cantindad anual -->
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_pav_cantidadAnual_5">Cantidad anual</label>
                                <input class="form-control ppos_pav_cantidadAnual_5" type="text" name="ppos_pav_cantidadAnual_5" id="ppos_pav_cantidadAnual_5">
                            </div>
                        </div>

                        <!-- % participacion -->
                        <div class="col-sm-12 col-md-2">
                            <div class="form-group">
                                <label class="titulo-3" for="ppos_pav_porcentaje_5">% Partic.</label>
                                <input class="form-control ppos_pav_porcentaje_5" type="text" name="ppos_pav_porcentaje_5" id="ppos_pav_porcentaje_5">
                            </div>
                        </div>
                    </div>
                    <!-- // fila 5 lista principales productos -->
                </div>

                <!-- BOTONES PASO 3 -->
                <div class="row justify-content-evenly mt-4">
                    <div class="col-4">
                        <button type="button" class="btn btn-primary mb-4 boton-3-anterior">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                    </div>
                    <div class="col-4">
                        <button type="button" class="btn btn-primary mb-4 boton-3-siguiente">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div> 
                <!-- // BOTONES PASO 3 -->
            </div>
        </div>
        <!-- // FIN PASO 3 --> 

        <!-- PASO 4 -->
        <div class="paso-4 transicion-1 sale-derecha" style="display: none;">

            <div class="row mt-3">
                <div class="col">
                    <div class="cel-titulo-1">05 - PRODUCCION</div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col">
                    <div class="titulo-2">5.1 Cantidad y distribución física de la planta industrial / obrador industrial</div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label class="titulo-3 mt-2" for="prod_cantObradores">Empresas constructoras (Especifique cantidad total de obradores en la provincia) Nro.:</label>
                        <input type="text" class="form-control" id="prod_cantObradores" name="prod_cantObradores">
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label class="titulo-3 mt-2" for="prod_cantPlanta">Empresas de otro tipo (Especifique cantidad de plantas industriales en la provincia) Nro.:</label>
                        <input type="text" class="form-control" id="prod_cantPlanta" name="prod_cantPlanta">
                    </div>
                </div>
            </div>

            
                <div class="row mt-3">
                    <div class="col">
                        <div class="titulo-2">Dimensiones de la planta industrial</div>
                        <div class="cel-aclara-1">(Especifique las siguientes medidas)</div>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label class="titulo-3">Superficie del terreno m<span class="cel-sup">2</span>
                                <input class="form-control" type="text" name="dpi_supTerreno" id="dpi_supTerreno">
                            </label>

                            <label class="titulo-3">Superficie cubierta m<span class="cel-sup">2</span>
                                <input class="form-control" type="text" name="dpi_supCubierta" id="dpi_supCubierta">
                            </label>

                            <label class="titulo-3">Superficie semi-cubierta m<span class="cel-sup">2</span>
                                <input class="form-control" type="text" name="dpi_supSemiCubierta" id="dpi_supSemiCubierta">
                            </label>
                        </div>
                    </div>
                </div>

                <hr class="cel-linea-horiz-1 my-3">

                <div class="row mt-2">
                    <div class="col-12">
                        <div class="cel-titulo-2">Capacidad instalada</div>
                        <div class="cel-aclara-1">c = (a / b) + 100</div>
                    </div>
                </div>

                <!-- Tarjeta Linea 1 -->
                <div class="card border shadow mt-4">
                    <div class="card-header">
                        <div class="cel-texto-linea">Línea 1</div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="cel-texto-campo-1" for="prodNombreLinea_1">Nombre de línea:</label>
                            <input type="text" class="form-control" id="prodNombreLinea_1" placeholder="Introduce el dato">
                        </div>
                        <div class="form-group">
                            <label class="cel-texto-campo-1" for="prodUnidadMedida_1">Unidad de medida</label>
                            <input type="text" class="form-control" id="prodUnidadMedida_1" placeholder="Introduce el valor">
                        </div>
                        <div class="form-group">
                            <label class="cel-texto-campo-1">Capacidad instalada mensual (a)</label>
                            <label class="titulo-3">Real año anterior 
                                <input type="text" class="form-control" id="prodCapaInstaladaRAA_1" placeholder="Introduce el valor">
                            </label>
                            <label class="titulo-3">Proyectado año actual 
                                <input type="text" class="form-control" id="prodCapaInstaladaPAA_1" placeholder="Introduce el valor">
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="cel-texto-campo-1">Nivel de producción (b)</label>
                            <label class="titulo-3">Real año anterior 
                                <input type="text" class="form-control" id="prodNivelProdRAA_1" placeholder="Introduce el valor">
                            </label>
                            <label class="titulo-3">Proyectado año actual
                                <input type="text" class="form-control" id="prodNivelProdPAA_1" placeholder="Introduce el valor">
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="cel-texto-campo-1">Aprovechamiento de la capacidad (c)</label>
                            <label class="titulo-3">Real año anterior 
                                <input type="text" class="form-control" id="prodAprovechamCapacRAA_1" placeholder="Introduce el valor">
                            </label>
                            <label class="titulo-3">Proyectado año actual
                                <input type="text" class="form-control" id="prodAprovechamCapacPAA_1" placeholder="Introduce el valor">
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta Linea 2 -->
                <div class="card border shadow mt3">
                    <div class="card-header">
                        <div class="cel-texto-linea">Línea 2</div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="cel-texto-campo-1" for="prodNombreLinea_2">Nombre de línea:</label>
                            <input type="text" class="form-control" id="prodNombreLinea_2" placeholder="Introduce el dato">
                        </div>
                        <div class="form-group">
                            <label class="cel-texto-campo-1" for="prodUnidadMedida_2">Unidad de medida</label>
                            <input type="text" class="form-control" id="prodUnidadMedida_2" placeholder="Introduce el valor">
                        </div>
                        <div class="form-group">
                            <label class="cel-texto-campo-1">Capacidad instalada mensual (a)</label>
                            <label class="titulo-3">Real año anterior 
                                <input type="text" class="form-control" id="prodCapaInstaladaRAA_2" placeholder="Introduce el valor">
                            </label>
                            <label class="titulo-3">Proyectado año actual 
                                <input type="text" class="form-control" id="prodCapaInstaladaPAA_2" placeholder="Introduce el valor">
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="cel-texto-campo-1">Nivel de producción (b)</label>
                            <label class="titulo-3">Real año anterior 
                                <input type="text" class="form-control" id="prodNivelProdRAA_2" placeholder="Introduce el valor">
                            </label>
                            <label class="titulo-3">Proyectado año actual
                                <input type="text" class="form-control" id="prodNivelProdPAA_2" placeholder="Introduce el valor">
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="cel-texto-campo-1">Aprovechamiento de la capacidad (c)</label>
                            <label class="titulo-3">Real año anterior 
                                <input type="text" class="form-control" id="prodAprovechamCapacRAA_2" placeholder="Introduce el valor">
                            </label>
                            <label class="titulo-3">Proyectado año actual
                                <input type="text" class="form-control" id="prodAprovechamCapacPAA_2" placeholder="Introduce el valor">
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta Linea 3 -->
                <div class="card border shadow mt-3">
                    <div class="card-header">
                        <div class="cel-texto-linea">Línea 3</div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="cel-texto-campo-1" for="prodNombreLinea_3">Nombre de línea:</label>
                            <input type="text" class="form-control" id="prodNombreLinea_3" placeholder="Introduce el dato">
                        </div>
                        <div class="form-group">
                            <label class="cel-texto-campo-1" for="prodUnidadMedida_3">Unidad de medida</label>
                            <input type="text" class="form-control" id="prodUnidadMedida_3" placeholder="Introduce el valor">
                        </div>
                        <div class="form-group">
                            <label class="cel-texto-campo-1">Capacidad instalada mensual (a)</label>
                            <label class="titulo-3">Real año anterior 
                                <input type="text" class="form-control" id="prodCapaInstaladaRAA_3" placeholder="Introduce el valor">
                            </label>
                            <label class="titulo-3">Proyectado año actual 
                                <input type="text" class="form-control" id="prodCapaInstaladaPAA_3" placeholder="Introduce el valor">
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="cel-texto-campo-1">Nivel de producción (b)</label>
                            <label class="titulo-3">Real año anterior 
                                <input type="text" class="form-control" id="prodNivelProdRAA_3" placeholder="Introduce el valor">
                            </label>
                            <label class="titulo-3">Proyectado año actual
                                <input type="text" class="form-control" id="prodNivelProdPAA_3" placeholder="Introduce el valor">
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="cel-texto-campo-1">Aprovechamiento de la capacidad (c)</label>
                            <label class="titulo-3">Real año anterior 
                                <input type="text" class="form-control" id="prodAprovechamCapacRAA_3" placeholder="Introduce el valor">
                            </label>
                            <label class="titulo-3">Proyectado año actual
                                <input type="text" class="form-control" id="prodAprovechamCapacPAA_3" placeholder="Introduce el valor">
                            </label>
                        </div>
                    </div>
                </div>

                <hr class="cel-linea-horiz-1">

                <!-- Maquinarias -->
                <div class="row mt-2">
                    <div class="col-12">
                        <div class="cel-titulo-2">Maquinarias</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label class="cel-texto-campo-1" for="cantidadMaquinas">Cantidad de m&aacute;quinas que posee</label>
                            <input type="text" class="form-control" id="cantidadMaquinas" name="cantidadMaquinas" placeholder="Valor num&eacute;rico">
                        </div>
                    </div>
                </div>

                <!-- Energia -->
                <div class="row mt-2">
                    <div class="col-12">
                        <div class="cel-titulo-2">Energ&iacute;a</div>
                    </div>
                </div>

                <!-- Potencia instalada -->
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label class="cel-texto-campo-1" for="potenciaInstalada">Potencia instalada</label>
                            <input type="text" class="form-control" id="potenciaInstalada" name="potenciaInstalada" placeholder="Valor en KW">
                            <span class="cel-aclara-1">Sumatoria en KW de la potencia de maquinarias y equipos instalados</span>
                        </div>
                    </div>
                </div>

                <!-- Consumo electrico -->
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label class="cel-texto-campo-1" for="consumoElectrico">Consumo el&eacute;ctrico</label>
                            <input type="text" class="form-control" id="consumoElectrico" name="consumoElectrico" placeholder="Valor en KW">
                            <span class="cel-aclara-1">Únidad de medida en KWh por mes obtenida de la factura de REFsa</span>
                        </div>
                    </div>
                </div>

                <!-- BOTONES PASO 4 -->
                <div class="row justify-content-evenly mt-4">
                    <div class="col-6">
                        <button class="btn btn-primary mb-4 boton-4-anterior" id="boton-4-anterior">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                    </div>
                    <div class="col-6">
                        <button class="btn btn-primary mb-4 boton-4-siguiente" id="boton-4-siguiente">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
                <!-- BOTONES PASO 4 -->
            <!-- </div> -->
            <!-- // CELULAR -->
            <!-- --------------------------------------------------------------------------------------- -->

            <!-- --------------------------------------------------------------------------------------- -->
            <!-- PC -->
            <div class="d-none row mb-4 fondo-formulario">
                <div class="col-xs-12 col-md-9">

                    <!-- titulo produccion -->
                    <div class="row mb-2">
                        <div class="col-xs-12 col-md-8">
                            <p class="titulo-1">
                                05- PRODUCCION
                            </p>
                        </div>
                    </div>

                    <!-- dimensiones de la planta industrial -->
                    <div class="row mb-2">
                        <div class="col-12">
                            <p class="titulo-2">Dimensiones de la planta industrial</p>
                        </div>
                    </div>

                    <!-- Superficie terreno, cubierta y semi-cubierta -->
                    <div class="row mb-3">
                        <div class="col-4">
                            <div class="form-outline">
                                <input class="form-control superficieTerreno" type="text" name="superficieTerreno" id="superficieTerreno">
                                <label class="form-label" for="superficieTerreno">Superficie terreno</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-outline">
                                <input class="form-control superficieCubierta" type="text" name="superficieCubierta" id="superficieCubierta">
                                <label class="form-label" for="superficieCubierta">Superficie cubierta</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-outline">
                                <input class="form-control superficieSemiCubierta" type="text" name="superficieSemiCubierta" id="superficieSemiCubierta">
                                <label class="form-label" for="superficieSemiCubierta">Sup. semi-cubierta</label>
                            </div>
                        </div>
                    </div>

                    <!-- Capacidad instalada -->
                    <div class="row mb-4">
                        <div class="col-12">
                            <p class="titulo-2">Capacidad instalada</p>
                        </div>
                    </div>

                    <!-- Capacidad instalada para celulares -->
                    <div class="row d-md-none">
                        <div class="col-12">
                            <p class="cel-titulo-2">Capacidad instalada</p>

                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12">
                                    <strong>L&iacute;nea 1</strong>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col marizq-5">
                                    <strong>Nombre de l&iacute;nea / actividad / servicio</strong>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col-12">
                                    <input class="input-sinborde" type="text">
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col marizq-5">
                                    <strong>Unidad de medida</strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 marizq-5">
                                    <input type="text" name="unidadDeMedida">
                                </div>
                            </div>

                            <!-- <div class="row">
                                <div class="col">
                                    <strong>Cantidad Mensual</strong>
                                </div>
                            </div> -->

                            <div class="row mt-2">
                                <div class="col">
                                    <strong>Capacidad instalada mensual (A)</strong>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 marizq-5">
                                    Real año anterior: 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12  marizq-5">
                                    <input type="text">
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col  marizq-5">
                                    Real año actual: 
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col-12 marizq-5">
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // Capacidad instalada para celulares -->

                    <!-- Capacidad instalada para pc o mayores -->
                    <div class="row d-md-none">
                        <div class="col-12">
                            <table class="tablaCapacidadInstalada">
                                <thead>
                                    <tr>
                                    <th style="border:0px;"></th>
                                    <th class="tablaCapIns--linea1" colspan="2">Línea 1</th>
                                    <th class="tablaCapIns--linea1" colspan="2">Línea 2</th>
                                    <th class="tablaCapIns--linea1" colspan="2">Línea 3</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="sin-salto tablaCapIns--borde pad-l">Nombre de línea / actividad / servicio</th>
                                        <td class="tablaCapIns--linea2" colspan="2"><input class="input-sinborde" type="text"></td>
                                        <td class="tablaCapIns--linea2" colspan="2"><input class="input-sinborde" type="text"></td>
                                        <td class="tablaCapIns--linea2" colspan="2"><input class="input-sinborde" type="text"></td>
                                    </tr>
                                    <tr>
                                        <th class="sin-salto tablaCapIns--borde pad-l">Unidad de medida</th>
                                        <td class="tablaCapIns--linea3" colspan="2">
                                            <select style="border: none; margin: 0; padding: 0;">
                                                <option value="hora">Hora</option>
                                                <option value="dia">Día</option>
                                                <option value="semana">Semana</option>
                                                <option value="mes">Mes</option>
                                            </select>
                                        </td>
                                        <td class="tablaCapIns--linea3" colspan="2">
                                            <select style="border: none; margin: 0; padding: 0;">
                                                <option value="hora">Hora</option>
                                                <option value="dia">Día</option>
                                                <option value="semana">Semana</option>
                                                <option value="mes">Mes</option>
                                            </select>
                                        </td>
                                        <td class="tablaCapIns--linea3" colspan="2">
                                            <select style="border: none; margin: 0; padding: 0;">
                                                <option value="hora">Hora</option>
                                                <option value="dia">Día</option>
                                                <option value="semana">Semana</option>
                                                <option value="mes">Mes</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="sin-salto tablaCapIns--borde pad-l">Cantidad mensual</th>
                                        <td class="tablaCapIns--linea4 ancho-1">Real año anterior</td>
                                        <td class="tablaCapIns--linea4 ancho-1">Proyectado año actual</td>
                                        <td class="tablaCapIns--linea4 ancho-1">Real año anterior</td>
                                        <td class="tablaCapIns--linea4 ancho-1">Proyectado año actual</td>
                                        <td class="tablaCapIns--linea4 ancho-1">Real año anterior</td>
                                        <td class="tablaCapIns--linea4 ancho-1">Proyectado año actual</td>
                                    </tr>
                                    <tr>
                                        <td class="sin-salto tablaCapIns--borde pad-l">Capacidad instalada mensual (A)</td>
                                        <td class="tablaCapIns--linea4"><input class="input-sinborde input-ancho-1" type="text"></td>
                                        <td class="tablaCapIns--linea4"><input class="input-sinborde input-ancho-1" type="text"></td>
                                        <td class="tablaCapIns--linea4"><input class="input-sinborde input-ancho-1" type="text"></td>
                                        <td class="tablaCapIns--linea4"><input class="input-sinborde input-ancho-1" type="text"></td>
                                        <td class="tablaCapIns--linea4"><input class="input-sinborde input-ancho-1" type="text"></td>
                                        <td class="tablaCapIns--linea4"><input class="input-sinborde input-ancho-1" type="text"></td>
                                    </tr>
                                    <tr>
                                        <td class="sin-salto tablaCapIns--borde pad-l">Nivel de producci&oacute;n (B)</td>
                                        <td class="tablaCapIns--linea4"><input class="input-sinborde input-ancho-1" type="text"></td>
                                        <td class="tablaCapIns--linea4"><input class="input-sinborde input-ancho-1" type="text"></td>
                                        <td class="tablaCapIns--linea4"><input class="input-sinborde input-ancho-1" type="text"></td>
                                        <td class="tablaCapIns--linea4"><input class="input-sinborde input-ancho-1" type="text"></td>
                                        <td class="tablaCapIns--linea4"><input class="input-sinborde input-ancho-1" type="text"></td>
                                        <td class="tablaCapIns--linea4"><input class="input-sinborde input-ancho-1" type="text"></td>
                                    </tr>
                                    <tr>
                                        <td class="sin-salto tablaCapIns--borde pad-l">Aprovechamiento de la capacidad (C)</td>
                                        <td class="tablaCapIns--linea4"><input class="input-sinborde input-ancho-1" type="text"></td>
                                        <td class="tablaCapIns--linea4"><input class="input-sinborde input-ancho-1" type="text"></td>
                                        <td class="tablaCapIns--linea4"><input class="input-sinborde input-ancho-1" type="text"></td>
                                        <td class="tablaCapIns--linea4"><input class="input-sinborde input-ancho-1" type="text"></td>
                                        <td class="tablaCapIns--linea4"><input class="input-sinborde input-ancho-1" type="text"></td>
                                        <td class="tablaCapIns--linea4"><input class="input-sinborde input-ancho-1" type="text"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- // Capacidad instalada para pc o mayores -->
                    
                    <!-- BOTONES PASO 4 -->
                    <div class="row justify-content-evenly mt-4">
                        <div class="col-4">
                            <button type="button" class="btn btn-primary mb-4 boton-4-anterior">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                        </div>
                        <div class="col-4">
                            <button type="button" class="btn btn-primary mb-4 boton-4-siguiente">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                    </div> 
                    <!-- // BOTONES PASO 4 -->
                </div>
                <div class="col-md-3"></div>
            </div>
            <!-- // PC -->
            <!-- --------------------------------------------------------------------------------------- -->
        </div>
        <!-- // PASO 4 -->

        <!-- PASO 5 -->
        <div class="row paso-5 transicion-1 sale-derecha" style="display: none;">
            <!-- --------------------------------------------------------------------------------------- -->
            <!-- CELULAR -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="cel-titulo-1">06 - COMERCIALIZACION</div>
                    </div>
                </div>

                <!-- Mercado -->
                <div class="row mt-2">
                    <div class="col-12">
                        <div class="cel-titulo-2">Mercado</div>
                    </div>
                </div>

                <!-- Opciones -->
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label>Opciones:</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input chkMercado" type="checkbox" id="chkMercado1" value="1">
                                <label class="form-check-label" for="chkMercado1">Misma localidad</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input chkMercado" type="checkbox" id="chkMercado2" value="2">
                                <label class="form-check-label" for="chkMercado2">Departamental</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input chkMercado" type="checkbox" id="chkMercado3" value="3">
                                <label class="form-check-label" for="chkMercado3">Formosa Cap.</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input chkMercado" type="checkbox" id="chkMercado4" value="4">
                                <label class="form-check-label" for="chkMercado4">Provincial</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input chkMercado" type="checkbox" id="chkMercado5" value="5">
                                <label class="form-check-label" for="chkMercado5">Regional NEA</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input chkMercado" type="checkbox" id="chkMercado6" value="6">
                                <label class="form-check-label" for="chkMercado6">Nacional</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input chkMercado" type="checkbox" id="chkMercado7" value="7">
                                <label class="form-check-label" for="chkMercado7">Internacional</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- VENTAS -->
                <div class="row mt-2">
                    <div class="col-12">
                        <div class="cel-titulo-2">Ventas</div>
                    </div>
                </div>

                <div class="row mt-1">
                    <div class="col-12">
                        <p>Del total de venta anual, indicar en porcentaje (%)</p>
                    </div>
                </div>

                <!-- porcentaje clientes consumidor final -->
                <div class="row mt-1">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label class="cel-texto-campo-1" for="clienteConsFinal">Clientes Cons. Final</label>
                            <input type="text" class="form-control" id="clienteConsFinal" name="clienteConsFinal" placeholder="Porcentaje">
                        </div>
                    </div>
                </div>

                <!-- Porcentaje clientes mayoristas -->
                <div class="row mt-1">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label class="cel-texto-campo-1" for="clienteMayorista">Cliente Mayorista</label>
                            <input type="text" class="form-control" id="clienteMayorista" name="clienteMayorista" placeholder="Porcentaje">
                        </div>
                    </div>
                </div>

                <!-- BOTONES PASO 5 -->
                <div class="row justify-content-evenly mt-4">
                    <div class="col-6">
                        <button class="btn btn-primary mb-4 boton-5-anterior">
                            <i class="fas fa-chevron-left"></i>
                        </button>

                    </div>
                    <div class="col-6">
                        <button class="btn btn-primary boton-5-siguiente">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
                <!-- // BOTONES PASO 5 -->
            </div>
            <!-- // CELULAR -->
            <!-- --------------------------------------------------------------------------------------- -->
        </div>
        <!-- // PASO 5 -->

        <!-- PASO 6 -->
        <div class="row paso-6 transicion-1 sale-derecha mt-3" style="display: none;">
            <div class="col-sm-12 col-md-10">
                <!-- titulo: 06- produccion -->
                <div class="row mb-3">
                    <div class="col-12">
                        <p class="titulo-1">07 - ADMINISTRACION</p>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <p class="titulo-2">RECURSOS HUMANOS</p>
                    </div>
                </div>

                <div class="row mb-1">
                    <div class="col-12">
                        <p class="titulo-2">
                            Cantidad de miembros de la empresa
                        </p>
                    </div>
                </div>

                <!-- total de empleados y cuantos son de la familia -->
                <div class="row mb-1">
                    <div class="col-sm-12 col-md-6">
                        <p class="cel-texto-campo-1">Total de empleados</p>
                        <div class="form-outline">
                            <input type="text" id="totalEmpleados" name="totalEmpleados" class="form-control" class="totalEmpleados" />
                            <label class="form-label" for="totalEmpleados">Cantidad</label>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <p class="cel-texto-campo-1">Del total de empleados, ¿cuandos son miembros de la familia?</p>
                        <div class="form-outline">
                            <input type="text" id="cantidadFamiliares" name="cantidadFamiliares" class="form-control" class="cantidadFamiliares" />
                            <label class="form-label" for="cantidadFamiliares">Cantidad de familiares</label>
                        </div>
                    </div>
                </div>

                <!-- Propietarios y Accionistas -->
                <div class="row mb-1">
                    <div class="col-sm-12 col-md-6">
                        <p class="cel-texto-campo-1">Propietario(s)</p>
                        <div class="form-outline">
                            <input type="text" id="cantidadPropietarios" name="cantidadPropietarios" class="form-control" class="cantidadPropietarios" />
                            <label class="form-label" for="cantidadPropietarios">Cantidad</label>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <p class="cel-texto-campo-1">Accionista(s)</p>
                        <div class="form-outline">
                            <input type="text" id="cantidadAccionistas" name="cantidadAccionistas" class="form-control" class="cantidadAccionistas" />
                            <label class="form-label" for="cantidadAccionistas">Cantidad</label>
                        </div>
                    </div>
                </div>

                <!-- BOTONES PASO 6 -->
                <div class="row justify-content-evenly mt-4">
                    <div class="col-6">
                        <button class="btn btn-primary boton-6-anterior">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                    </div>
                    <div class="col-6">
                        <button class="btn btn-primary boton-6-siguiente">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
                <!-- // BOTONES PASO 6 -->
            </div>
        </div>
        <!-- // PASO 6 -->

        <!-- PASO 7 -->
        <div class="paso-7 transicion-1 sale-derecha" style="display: none;">
            
            <div class="row my-3">
                <div class="col-12">
                    <div class="cel-titulo-1">10 - PROYECTOS DE MEJORA</div>
                    <div class="cel-aclara-1">Marque con X si su proyecto se encuentra en ejecución o en agenda y describa la información solicitada</div>
                </div>
            </div>

            <!-- 1. Ampliacion de la capacidad productiva -->
            <div class="container">
                <div class="row mt-3">
                    <div class="col-md-12 col-sm-6">
                        <label class="cel-texto-campo-1" for="nombre-linea">Ampliación de la capacidad productiva</label>
                    </div>
                </div>

                <form>
                    <!-- Estado del proyecto de mejora -->
                    <div class="row">
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora1" id="radioEnEjecucion1" value="1">
                                <label class="form-check-label" for="radioEnEjecucion1">En ejecución</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora1" id="radioEnAgenda1" value="2">
                                <label class="form-check-label" for="radioEnAgenda1">En agenda</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora1" id="radioNoSabe1" value="3">
                                <label class="form-check-label" for="radioNoSabe1">No sabe / No responde</label>
                            </div>
                        </div>
                    </div>

                    <!-- porcentaje de avance / plazo de implementacion -->
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="porcAvance_1">Porcentaje avance</label>
                            <input class="form-control proyMejora" type="number" name="porcAvance_1" id="porcAvance_1" placeholder="0.00">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="plazoImplementa_1">Plazo implementación</label>
                            <input class="form-control proyMejora" type="text" name="plazoImplementa_1" id="plazoImplementa_1">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="fuenteFinanciamiento_1">Fuente financiamiento</label>
                            <input class="form-control proyMejora" type="text" name="fuenteFinanciamiento_1" id="fuenteFinanciamiento_1">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="montoInversion_1">Monto estimado de la inversión</label>
                            <input class="form-control proyMejora" type="text" name="montoInversion_1" id="montoInversion_1">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="asistenciaTecnica_1">Asistencia técnica necesaria</label>
                            <input class="form-control proyMejora" type="text" name="asistenciaTecnica_1" id="asistenciaTecnica_1">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="necesidadRelevante_1">Necesidad más relevante</label>
                            <input class="form-control proyMejora" type="text" name="necesidadRelevante_1" id="necesidadRelevante_1">
                        </div>
                    </div>
                </form>
            </div>
            
            <hr class="cel-linea-horiz-1 mt-3">

            <!-- 2. Relocalizacion de la planta industrial -->
            <div class="container">
                <div class="row mt-3">
                    <div class="col-12">
                        <label class="cel-texto-campo-1" for="nombre-linea">Relocalizacion de la planta industrial</label>
                    </div>
                </div>

                <form>
                    <!-- Estado del proyecto de mejora -->
                    <div class="row">
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora2" id="radioEnEjecucion2" value="1">
                                <label class="form-check-label" for="radioEnEjecucion2">En ejecución</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora2" id="radioEnAgenda2" value="2">
                                <label class="form-check-label" for="radioEnAgenda2">En agenda</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora2" id="radioNoSabe2" value="3">
                                <label class="form-check-label" for="radioNoSabe2">No sabe / No responde</label>
                            </div>
                        </div>
                    </div>

                    <!-- porcentaje de avance / plazo de implementacion -->
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="porcAvance_2">Porcentaje avance</label>
                            <input class="form-control proyMejora" type="number" name="porcAvance_2" id="porcAvance_2" placeholder="0.00">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="plazoImplementa_2">Plazo implementación</label>
                            <input class="form-control proyMejora" type="text" name="plazoImplementa_2" id="plazoImplementa_2">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="fuenteFinanciamiento_2">Fuente financiamiento</label>
                            <input class="form-control proyMejora" type="text" name="fuenteFinanciamiento_2" id="fuenteFinanciamiento_2">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="montoInversion_2">Monto estimado de la inversión</label>
                            <input class="form-control proyMejora" type="text" name="montoInversion_2" id="montoInversion_2">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="asistenciaTecnica_2">Asistencia técnica necesaria</label>
                            <input class="form-control proyMejora" type="text" name="asistenciaTecnica_2" id="asistenciaTecnica_2">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="necesidadRelevante_2">Necesidad más relevante</label>
                            <input class="form-control proyMejora" type="text" name="necesidadRelevante_2" id="necesidadRelevante_2">
                        </div>
                    </div>
                </form>
            </div>
            
            <hr class="cel-linea-horiz-1 mt-3">

            <!-- 3. Relocalizacion al parque industrial -->
            <div class="container">
                <div class="row mt-3">
                    <div class="col-12">
                        <label class="cel-texto-campo-1" for="nombre-linea">Relocalizacion al parque industrial</label>
                    </div>
                </div>

                <form>
                    <!-- Estado del proyecto de mejora -->
                    <div class="row">
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora3" id="radioEnEjecucion3" value="1">
                                <label class="form-check-label" for="radioEnEjecucion3">En ejecución</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora3" id="radioEnAgenda3" value="2">
                                <label class="form-check-label" for="radioEnAgenda3">En agenda</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora3" id="radioNoSabe3" value="3">
                                <label class="form-check-label" for="radioNoSabe3">No sabe / No responde</label>
                            </div>
                        </div>
                    </div>

                    <!-- porcentaje de avance / plazo de implementacion -->
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="porcAvance_3">Porcentaje avance</label>
                            <input class="form-control proyMejora" type="number" name="porcAvance_3" id="porcAvance_3" placeholder="0.00">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="plazoImplementa_3">Plazo implementación</label>
                            <input class="form-control proyMejora" type="text" name="plazoImplementa_3" id="plazoImplementa_3">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="fuenteFinanciamiento_3">Fuente financiamiento</label>
                            <input class="form-control proyMejora" type="text" name="fuenteFinanciamiento_3" id="fuenteFinanciamiento_3">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="montoInversion_3">Monto estimado de la inversión</label>
                            <input class="form-control proyMejora" type="text" name="montoInversion_3" id="montoInversion_3">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="asistenciaTecnica_3">Asistencia técnica necesaria</label>
                            <input class="form-control proyMejora" type="text" name="asistenciaTecnica_3" id="asistenciaTecnica_3">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="necesidadRelevante_3">Necesidad más relevante</label>
                            <input class="form-control proyMejora" type="text" name="necesidadRelevante_3" id="necesidadRelevante_3">
                        </div>
                    </div>
                </form>
            </div>
            
            <hr class="cel-linea-horiz-1 mt-3">

            <!-- 4. Incorporación y/o actualización en tecnología -->
            <div class="container">
                <div class="row mt-3">
                    <div class="col-12">
                        <label class="cel-texto-campo-1" for="nombre-linea">Incorporación y/o actualización en tecnología</label>
                    </div>
                </div>

                <form>
                    <!-- Estado del proyecto de mejora -->
                    <div class="row">
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora4" id="radioEnEjecucion4" value="1">
                                <label class="form-check-label" for="radioEnEjecucion4">En ejecución</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora4" id="radioEnAgenda4" value="2">
                                <label class="form-check-label" for="radioEnAgenda4">En agenda</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora4" id="radioNoSabe4" value="3">
                                <label class="form-check-label" for="radioNoSabe4">No sabe / No responde</label>
                            </div>
                        </div>
                    </div>

                    <!-- porcentaje de avance / plazo de implementacion -->
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="porcAvance_4">Porcentaje avance</label>
                            <input class="form-control proyMejora" type="number" name="porcAvance_4" id="porcAvance_4" placeholder="0.00">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="plazoImplementa_4">Plazo implementación</label>
                            <input class="form-control proyMejora" type="text" name="plazoImplementa_4" id="plazoImplementa_4">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="fuenteFinanciamiento_4">Fuente financiamiento</label>
                            <input class="form-control proyMejora" type="text" name="fuenteFinanciamiento_4" id="fuenteFinanciamiento_4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="montoInversion_4">Monto estimado de la inversión</label>
                            <input class="form-control proyMejora" type="text" name="montoInversion_4" id="montoInversion_4">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="asistenciaTecnica_4">Asistencia técnica necesaria</label>
                            <input class="form-control proyMejora" type="text" name="asistenciaTecnica_4" id="asistenciaTecnica_4">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="necesidadRelevante_4">Necesidad más relevante</label>
                            <input class="form-control proyMejora" type="text" name="necesidadRelevante_4" id="necesidadRelevante_4">
                        </div>
                    </div>
                </form>
            </div>
            
            <hr class="cel-linea-horiz-1 mt-3">

            <!-- 5. Nuevos segmentos de mercado -->
            <div class="container">
                <div class="row mt-3">
                    <div class="col-12">
                        <label class="cel-texto-campo-1" for="nombre-linea">Nuevos segmentos de mercado</label>
                    </div>
                </div>

                <form>
                    <!-- Estado del proyecto de mejora -->
                    <div class="row">
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora5" id="radioEnEjecucion5" value="1">
                                <label class="form-check-label" for="radioEnEjecucion5">En ejecución</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora5" id="radioEnAgenda5" value="2">
                                <label class="form-check-label" for="radioEnAgenda5">En agenda</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora5" id="radioNoSabe5" value="3">
                                <label class="form-check-label" for="radioNoSabe5">No sabe / No responde</label>
                            </div>
                        </div>
                    </div>

                    <!-- porcentaje de avance / plazo de implementacion -->
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="porcAvance_5">Porcentaje avance</label>
                            <input class="form-control proyMejora" type="number" name="porcAvance_5" id="porcAvance_5" placeholder="0.00">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="plazoImplementa_5">Plazo implementación</label>
                            <input class="form-control proyMejora" type="text" name="plazoImplementa_5" id="plazoImplementa_5">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="fuenteFinanciamiento_5">Fuente financiamiento</label>
                            <input class="form-control proyMejora" type="text" name="fuenteFinanciamiento_5" id="fuenteFinanciamiento_5">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="montoInversion_5">Monto estimado de la inversión</label>
                            <input class="form-control proyMejora" type="text" name="montoInversion_5" id="montoInversion_5">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="asistenciaTecnica_5">Asistencia técnica necesaria</label>
                            <input class="form-control proyMejora" type="text" name="asistenciaTecnica_5" id="asistenciaTecnica_5">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="necesidadRelevante_5">Necesidad más relevante</label>
                            <input class="form-control proyMejora" type="text" name="necesidadRelevante_5" id="necesidadRelevante_5">
                        </div>
                    </div>
                </form>
            </div>

            <hr class="cel-linea-horiz-1 mt-3">

            <!-- 6. Sustitución de productos de origen extra-provincial -->
            <div class="container">
                <div class="row mt-3">
                    <div class="col-12">
                        <label class="cel-texto-campo-1" for="nombre-linea">Sustitución de productos de origen extra-provincial</label>
                    </div>
                </div>

                <form>
                    <!-- Estado del proyecto de mejora -->
                    <div class="row">
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora6" id="radioEnEjecucion6" value="1">
                                <label class="form-check-label" for="radioEnEjecucion6">En ejecución</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora6" id="radioEnAgenda6" value="2">
                                <label class="form-check-label" for="radioEnAgenda6">En agenda</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora6" id="radioNoSabe6" value="3">
                                <label class="form-check-label" for="radioNoSabe6">No sabe / No responde</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="porcAvance_6">Porcentaje avance</label>
                            <input class="form-control proyMejora" type="number" name="porcAvance_6" id="porcAvance_6" placeholder="0.00">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="plazoImplementa_6">Plazo implementación</label>
                            <input class="form-control proyMejora" type="text" name="plazoImplementa_6" id="plazoImplementa_6">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="fuenteFinanciamiento_6">Fuente financiamiento</label>
                            <input class="form-control proyMejora" type="text" name="fuenteFinanciamiento_6" id="fuenteFinanciamiento_6">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="montoInversion_6">Monto estimado de la inversión</label>
                            <input class="form-control proyMejora" type="text" name="montoInversion_6" id="montoInversion_6">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="asistenciaTecnica_6">Asistencia técnica necesaria</label>
                            <input class="form-control proyMejora" type="text" name="asistenciaTecnica_6" id="asistenciaTecnica_6">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="necesidadRelevante_6">Necesidad más relevante</label>
                            <input class="form-control proyMejora" type="text" name="necesidadRelevante_6" id="necesidadRelevante_6">
                        </div>
                    </div>
                </form>
            </div>

            <hr class="cel-linea-horiz-1 mt-3">

            <!-- 7. Sustitución de Importaciones -->
            <div class="container">
                <div class="row mt-3">
                    <div class="col-12">
                        <label class="cel-texto-campo-1" for="nombre-linea">Sustitución de Importaciones</label>
                    </div>
                </div>

                <form>
                    <div class="row">
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora7" id="radioEnEjecucion7" value="1">
                                <label class="form-check-label" for="radioEnEjecucion7">En ejecución</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora7" id="radioEnAgenda7" value="2">
                                <label class="form-check-label" for="radioEnAgenda7">En agenda</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora7" id="radioNoSabe7" value="3">
                                <label class="form-check-label" for="radioNoSabe7">No sabe / No responde</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="porcAvance_7">Porcentaje avance</label>
                            <input class="form-control proyMejora" type="number" name="porcAvance_7" id="porcAvance_7" placeholder="0.00">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="plazoImplementa_7">Plazo implementación</label>
                            <input class="form-control proyMejora" type="text" name="plazoImplementa_7" id="plazoImplementa_7">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="fuenteFinanciamiento_7">Fuente financiamiento</label>
                            <input class="form-control proyMejora" type="text" name="fuenteFinanciamiento_7" id="fuenteFinanciamiento_7">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="montoInversion_7">Monto estimado de la inversión</label>
                            <input class="form-control proyMejora" type="text" name="montoInversion_7" id="montoInversion_7">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="asistenciaTecnica_7">Asistencia técnica necesaria</label>
                            <input class="form-control proyMejora" type="text" name="asistenciaTecnica_7" id="asistenciaTecnica_7">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="necesidadRelevante_7">Necesidad más relevante</label>
                            <input class="form-control proyMejora" type="text" name="necesidadRelevante_7" id="necesidadRelevante_7">
                        </div>
                    </div>
                </form>
            </div>
            
            <hr class="cel-linea-horiz-1 mt-3">

            <!-- 8. Nuevos productos -->
            <div class="container">
                <div class="row mt-3">
                    <div class="col-12">
                        <label class="cel-texto-campo-1" for="nombre-linea">Nuevos productos</label>
                        <label class="cel-comentario-1" for="nombre-linea">(Franquicias, Alianzas, etc.)</label>
                    </div>
                </div>

                <form>
                    <div class="row">
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora8" id="radioEnEjecucion8" value="1">
                                <label class="form-check-label" for="radioEnEjecucion8">En ejecución</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora8" id="radioEnAgenda8" value="2">
                                <label class="form-check-label" for="radioEnAgenda8">En agenda</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora8" id="radioNoSabe8" value="3">
                                <label class="form-check-label" for="radioNoSabe8">No sabe / No responde</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="porcAvance_8">Porcentaje avance</label>
                            <input class="form-control proyMejora" type="number" name="porcAvance_8" id="porcAvance_8" placeholder="0.00">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="plazoImplementa_8">Plazo implementación</label>
                            <input class="form-control proyMejora" type="text" name="plazoImplementa_8" id="plazoImplementa_8">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="fuenteFinanciamiento_8">Fuente financiamiento</label>
                            <input class="form-control proyMejora" type="text" name="fuenteFinanciamiento_8" id="fuenteFinanciamiento_8">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="montoInversion_8">Monto estimado de la inversión</label>
                            <input class="form-control proyMejora" type="text" name="montoInversion_8" id="montoInversion_8">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="asistenciaTecnica_8">Asistencia técnica necesaria</label>
                            <input class="form-control proyMejora" type="text" name="asistenciaTecnica_8" id="asistenciaTecnica_8">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="necesidadRelevante_8">Necesidad más relevante</label>
                            <input class="form-control proyMejora" type="text" name="necesidadRelevante_8" id="necesidadRelevante_8">
                        </div>
                    </div>
                </form>
            </div>

            <hr class="cel-linea-horiz-1 mt-3">

            <!-- 9. Nuevas instalaciones industriales -->
            <div class="container">
                <div class="row mt-3">
                    <div class="col-12">
                        <label class="cel-texto-campo-1" for="nombre-linea">Nuevas instalaciones industriales</label>
                        <label class="cel-comentario-1" for="nombre-linea">(Dentro de la planta industrial)</label>
                    </div>
                </div>

                <form>
                    <div class="row">
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora9" id="radioEnEjecucion9" value="1">
                                <label class="form-check-label" for="radioEnEjecucion9">En ejecución</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora9" id="radioEnAgenda9" value="2">
                                <label class="form-check-label" for="radioEnAgenda9">En agenda</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora9" id="radioNoSabe9" value="3">
                                <label class="form-check-label" for="radioNoSabe9">No sabe / No responde</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="porcAvance_9">Porcentaje avance</label>
                            <input class="form-control proyMejora" type="number" name="porcAvance_9" id="porcAvance_9" placeholder="0.00">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="plazoImplementa_9">Plazo implementación</label>
                            <input class="form-control proyMejora" type="text" name="plazoImplementa_9" id="plazoImplementa_9">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="fuenteFinanciamiento_9">Fuente financiamiento</label>
                            <input class="form-control proyMejora" type="text" name="fuenteFinanciamiento_9" id="fuenteFinanciamiento_9">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="montoInversion_9">Monto estimado de la inversión</label>
                            <input class="form-control proyMejora" type="text" name="montoInversion_9" id="montoInversion_9">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="asistenciaTecnica_9">Asistencia técnica necesaria</label>
                            <input class="form-control proyMejora" type="text" name="asistenciaTecnica_9" id="asistenciaTecnica_9">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="necesidadRelevante_9">Necesidad más relevante</label>
                            <input class="form-control proyMejora" type="text" name="necesidadRelevante_9" id="necesidadRelevante_9">
                        </div>
                    </div>
                </form>
            </div>
            
            <hr class="cel-linea-horiz-1 mt-3">

            <!-- 10. Nuevas líneas de manufactura -->
            <div class="container">
                <div class="row mt-3">
                    <div class="col-12">
                        <label class="cel-texto-campo-1" for="nombre-linea">Nuevas líneas de manufactura</label>
                        <label class="cel-comentario-1" for="nombre-linea">(Dentro de la planta industrial)</label>
                    </div>
                </div>

                <form>
                    <div class="row">
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora10" id="radioEnEjecucion10" value="1">
                                <label class="form-check-label" for="radioEnEjecucion10">En ejecución</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora10" id="radioEnAgenda10" value="2">
                                <label class="form-check-label" for="radioEnAgenda10">En agenda</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora10" id="radioNoSabe10" value="3">
                                <label class="form-check-label" for="radioNoSabe10">No sabe / No responde</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="porcAvance_10">Porcentaje avance</label>
                            <input class="form-control proyMejora" type="number" name="porcAvance_10" id="porcAvance_10" placeholder="0.00">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="plazoImplementa_10">Plazo implementación</label>
                            <input class="form-control proyMejora" type="text" name="plazoImplementa_10" id="plazoImplementa_10">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="fuenteFinanciamiento_10">Fuente financiamiento</label>
                            <input class="form-control proyMejora" type="text" name="fuenteFinanciamiento_10" id="fuenteFinanciamiento_10">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="montoInversion_10">Monto estimado de la inversión</label>
                            <input class="form-control proyMejora" type="text" name="montoInversion_10" id="montoInversion_10">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="asistenciaTecnica_10">Asistencia técnica necesaria</label>
                            <input class="form-control proyMejora" type="text" name="asistenciaTecnica_10" id="asistenciaTecnica_10">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="necesidadRelevante_10">Necesidad más relevante</label>
                            <input class="form-control proyMejora" type="text" name="necesidadRelevante_10" id="necesidadRelevante_10">
                        </div>
                    </div>
                </form>
            </div>
            
            <hr class="cel-linea-horiz-1 mt-3">

            <!-- 11. Desarrollo de nuevos modelos de negocio -->
            <div class="container">
                <div class="row mt-3">
                    <div class="col-12">
                        <label class="cel-texto-campo-1" for="nombre-linea">Desarrollo de nuevos modelos de negocio</label>
                    </div>
                </div>

                <form>
                    <div class="row">
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora11" id="radioEnEjecucion11" value="1">
                                <label class="form-check-label" for="radioEnEjecucion11">En ejecución</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora11" id="radioEnAgenda11" value="2">
                                <label class="form-check-label" for="radioEnAgenda11">En agenda</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora11" id="radioNoSabe11" value="3">
                                <label class="form-check-label" for="radioNoSabe11">No sabe / No responde</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="porcAvance_11">Porcentaje avance</label>
                            <input class="form-control proyMejora" type="number" name="porcAvance_11" id="porcAvance_11" placeholder="0.00">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="plazoImplementa_11">Plazo implementación</label>
                            <input class="form-control proyMejora" type="text" name="plazoImplementa_11" id="plazoImplementa_11">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="fuenteFinanciamiento_11">Fuente financiamiento</label>
                            <input class="form-control proyMejora" type="text" name="fuenteFinanciamiento_11" id="fuenteFinanciamiento_11">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="montoInversion_11">Monto estimado de la inversión</label>
                            <input class="form-control proyMejora" type="text" name="montoInversion_11" id="montoInversion_11">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="asistenciaTecnica_11">Asistencia técnica necesaria</label>
                            <input class="form-control proyMejora" type="text" name="asistenciaTecnica_11" id="asistenciaTecnica_11">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="necesidadRelevante_11">Necesidad más relevante</label>
                            <input class="form-control proyMejora" type="text" name="necesidadRelevante_11" id="necesidadRelevante_11">
                        </div>
                    </div>
                </form>
            </div>
            
            <hr class="cel-linea-horiz-1 mt-3">

            <!-- 12. Proyectos de economía circular -->
            <div class="container">
                <div class="row mt-3">
                    <div class="col-12">
                        <label class="cel-texto-campo-1" for="nombre-linea">Proyectos de economía circular</label>
                    </div>
                </div>

                <form>
                    <div class="row">
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora12" id="radioEnEjecucion12" value="1">
                                <label class="form-check-label" for="radioEnEjecucion12">En ejecución</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora12" id="radioEnAgenda12" value="2">
                                <label class="form-check-label" for="radioEnAgenda12">En agenda</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora12" id="radioNoSabe12" value="3">
                                <label class="form-check-label" for="radioNoSabe12">No sabe / No responde</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="porcAvance_12">Porcentaje avance</label>
                            <input class="form-control proyMejora" type="number" name="porcAvance_12" id="porcAvance_12" placeholder="0.00">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="plazoImplementa_12">Plazo implementación</label>
                            <input class="form-control proyMejora" type="text" name="plazoImplementa_12" id="plazoImplementa_12">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="fuenteFinanciamiento_12">Fuente financiamiento</label>
                            <input class="form-control proyMejora" type="text" name="fuenteFinanciamiento_12" id="fuenteFinanciamiento_12">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="montoInversion_12">Monto estimado de la inversión</label>
                            <input class="form-control proyMejora" type="text" name="montoInversion_12" id="montoInversion_12">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="asistenciaTecnica_12">Asistencia técnica necesaria</label>
                            <input class="form-control proyMejora" type="text" name="asistenciaTecnica_12" id="asistenciaTecnica_12">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="necesidadRelevante_12">Necesidad más relevante</label>
                            <input class="form-control proyMejora" type="text" name="necesidadRelevante_12" id="necesidadRelevante_12">
                        </div>
                    </div>
                </form>
            </div>
            
            <hr class="cel-linea-horiz-1 mt-3">

            <!-- 13. Proyectos de inclusión y perspectiva de genero dentro de la empresa -->
            <div class="container">
                <div class="row mt-3">
                    <div class="col-12">
                        <label class="cel-texto-campo-1" for="nombre-linea">Proyectos de inclusión y perspectiva de genero dentro de la empresa</label>
                    </div>
                </div>

                <form>
                    <div class="row">
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora13" id="radioEnEjecucion13" value="1">
                                <label class="form-check-label" for="radioEnEjecucion13">En ejecución</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora13" id="radioEnAgenda13" value="2">
                                <label class="form-check-label" for="radioEnAgenda13">En agenda</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input proyMejora" type="radio" name="proyMejora13" id="radioNoSabe13" value="3">
                                <label class="form-check-label" for="radioNoSabe13">No sabe / No responde</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="porcAvance_13">Porcentaje avance</label>
                            <input class="form-control proyMejora" type="number" name="porcAvance_13" id="porcAvance_13" placeholder="0.00">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="plazoImplementa_13">Plazo implementación</label>
                            <input class="form-control proyMejora" type="text" name="plazoImplementa_13" id="plazoImplementa_13">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="fuenteFinanciamiento_13">Fuente financiamiento</label>
                            <input class="form-control proyMejora" type="text" name="fuenteFinanciamiento_13" id="fuenteFinanciamiento_13">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="montoInversion_13">Monto estimado de la inversión</label>
                            <input class="form-control proyMejora" type="text" name="montoInversion_13" id="montoInversion_13">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="asistenciaTecnica_13">Asistencia técnica necesaria</label>
                            <input class="form-control proyMejora" type="text" name="asistenciaTecnica_13" id="asistenciaTecnica_13">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="necesidadRelevante_13">Necesidad más relevante</label>
                            <input class="form-control proyMejora" type="text" name="necesidadRelevante_13" id="necesidadRelevante_13">
                        </div>
                    </div>
                </form>
            </div>

            <hr class="cel-linea-horiz-1 mt-3">

            <!-- BOTONES PASO 7 -->
            <div class="row justify-content-evenly mt-4">
                <div class="col-6">
                    <button type="button" class="btn btn-primary mb-4 boton-7-anterior">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-primary mb-4 boton-7-siguiente">
                        <i class="fas fa-check"></i>
                    </button>
                </div>
            </div>
            <!-- // BOTONES PASO 7 -->

        </div>
        <!-- // PASO 7 -->

        <!-- PASO 8 -->
        <!-- <div class="row paso-8 transicion-1 sale-derecha" style="display: none;">
            <div class="row justify-content-center align-items-center">
                <div class="col-sm-12 col-md-6">
                    <img src="../img/pulgar_arriba_verde_fondo_transparente.png" class="img-fluid mx-auto d-block" alt="Grabación OK">
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-sm-12 col-md-6">
                    <p class="text-center text-olive h2">Datos Grabados Correctamente</p>
                </div>
            </div>
            <div class="row justify-content-center mt-2">
                <div class="col-sm-12 col-md-6">
                    <button type="button" class="btn btn-primary mb-4 boton-8-siguiente">Ir al inicio</button>
                </div>
            </div>
        </div>   -->
        <!-- // PASO 8 -->
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
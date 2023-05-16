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
    <title>Pre-Inscripci&oacute;n al RIP</title>

    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
    <link rel="stylesheet" href="preinscripcion.css">

    <!-- Tootip -->
    <link rel="stylesheet" href="../css/tooltip.css">
</head>
<body>
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

    <!-- Titulo principal -->
    <div class="d-md-none container-fluid justify-content-center">
        <div class="row">
            <div class="col-12 text-center">
                <p class="titulo-principal">Preinscripci&oacute;n al <br/> Registro de Industria</p>
            </div>
        </div>
    </div>

    <!-- Pasos: Numeros dentro de circulos -->
    <div class="container mt-3">
      <div class="row justify-content-center align-items-center">
        <div class="col-auto">
          <div class="d-flex justify-content-center align-items-center rounded-circle paso-bg-activo text-white" id="secPaso1" style="width: 25px; height: 25px; font-family: 'Arimo', sans-serif; font-size: 22px; font-weight: 700;">1</div>
        </div>
        <div class="col-auto">
          <div class="d-flex justify-content-center align-items-center rounded-circle paso-bg-inactivo text-white" id="secPaso2" style="width: 25px; height: 25px; font-family: 'Arimo', sans-serif; font-size: 20px;">2</div>
        </div>
        <div class="col-auto">
          <div class="d-flex justify-content-center align-items-center rounded-circle paso-bg-inactivo text-white" id="secPaso3" style="width: 25px; height: 25px; font-family: 'Arimo', sans-serif; font-size: 20px;">3</div>
        </div>
        <div class="col-auto">
          <div class="d-flex justify-content-center align-items-center rounded-circle paso-bg-inactivo text-white" id="secPaso4" style="width: 25px; height: 25px; font-family: 'Arimo', sans-serif; font-size: 20px;">4</div>
        </div>
        <div class="col-auto">
          <div class="d-flex justify-content-center align-items-center rounded-circle paso-bg-inactivo text-white" id="secPaso5" style="width: 25px; height: 25px; font-family: 'Arimo', sans-serif; font-size: 20px;">5</div>
        </div>
        <div class="col-auto">
          <div class="d-flex justify-content-center align-items-center rounded-circle paso-bg-inactivo text-white" id="secPaso6" style="width: 25px; height: 25px; font-family: 'Arimo', sans-serif; font-size: 20px;">6</div>
        </div>
        <div class="col-auto">
          <div class="d-flex justify-content-center align-items-center rounded-circle paso-bg-inactivo text-white" id="secPaso7" style="width: 25px; height: 25px; font-family: 'Arimo', sans-serif; font-size: 20px;">7</div>
        </div>
      </div>
    </div>
    <!-- // Pasos: Numeros dentro de circulos -->

    <section>
        <div class="container">
            <div>
                <!-- PASO 1 DATOS DE LA EMPRESA -->
                <div class="paso-1 transicion-1" style="display: block;">
                    <div class="row">
                        <div class="col-xs-12 col-md-8">
                            <!-- DATOS DE LA EMPRESA -->
                            <div class="row mt-2">
                                <div class="col">
                                <p class="titulo-1">01 - DATOS DE LA EMPRESA</p>
                                </div>
                            </div>

                            <!-- <div class="row"> -->
                                <!-- titulo: ordenamiento juridico -->
                                <div class="row mt-2">
                                    <div class="col-xs-12 col-md-8">
                                        <p class="titulo-2">Ordenamiento Jur&iacute;dico</p>
                                    </div>
                                </div>
                            <!-- </div> -->
                        </div>
                    </div>

                    <!-- ORDENAMIENTO JURIDICO -->
                    <div class="row mt-2 ordenamiento_juridico">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="radioOrdenamientoJuridico" id="personaHumana" value="personaHumana" />
                                <label class="form-check-label" for="personaHumana">Persona humana</label>
                            </div>
                        </div>
                        
                        <div class="col-sm-12 col-md-6">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="radioOrdenamientoJuridico" id="personaJuridica" value="personaJuridica" />
                                <label class="form-check-label" for="personaJuridica">Persona jur&iacute;dica</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row datosDeLaEmpresa">
                        <!-- Razon social -->
                        <div class="row mt-2">
                            <div class="col-xs-12 col-md-8">
                                <div class="form-group">
                                    <label class="titulo-3 mt-3" for="razonSocial">Raz&oacute;n social</label>
                                    <input type="text" id="razonSocial" name="razonSocial" class="form-control" />
                                </div>
                            </div>
                        </div>
                        
                        <!-- CUIT y Fecha inicio actividad -->
                        <div class="row mt-2">
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="titulo-3" for="cuit">CUIT</label>
                                    <input type="text" id="cuit" name="cuit" class="form-control" />
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4 mt-2">
                                <div class="form-group">
                                    <label class="titulo-3" for="fecha">Fecha inicio actividad</label>
                                    <input type="text" id="fecha" name="fecha" class="form-control" />
                                </div>
                            </div>
                        </div>

                        <!-- numeros de registro puertos y vias navegables -->
                        <div class="row">
                            <div class="col-xs-12 col-md-5">
                                <div class="form-group">
                                    <label class="titulo-3 mt-3" for="txtDisposicion">Disposici&oacute;n de Subsec. de Puertos y Vías Navegables Nro: <span class="aclara-1"> (Para actividades de extracción de arena)</span></label>
                                    <input type="text" class="form-control txtDisposicion" id="txtDisposicion">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <!-- <div class="aclara-1">&nbsp;</div> -->
                                <div class="form-group">
                                    <label class="titulo-3 mt-1" for="fechaDisposicion">Fecha</label>
                                    <input type="text" class="form-control" id="fechaDisposicion">
                                </div>
                            </div>
                        </div>

                        <!-- numeros de registro nacional minero -->
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

                        <!-- numeros de registro operadora de hidrocarburo y gas -->
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

                    <!-- ACTIVIDADES -->
                    <div class="row mt-3 actividades">
                        <p class="titulo-2">Actividades</p>

                        <div class="row allActividades">

                            <p class="titulo-2">Actividad principal <span class="comentario-1">(Especificar actividad principal)</span></p>

                            <!-- actividad 1 -->
                            <div class="row row-activity wrap-actividad-1">
                                <div class="col-sm-12 col-md-2">
                                    <div class="form-group">
                                        <label class="mt-1" for="ciiu-1">C&oacute;digo CIIU</label>
                                        <input class="form-control ciiu-1" type="text" name="ciiu-1" id="ciiu-1" campo_actividad="actividad-1">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label class="mt-1" for="actividad-1">Texto de la actividad</label>
                                        <input class="form-control actividad-1" type="text" name="actividad-1" id="actividad-1" disabled>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-2">
                                    <div class="form-group">
                                        <label class="mt-1" for="facturacion-1">Facturaci&oacute;n anual en pesos</label>
                                        <input class="form-control text-end" type="text" name="facturacion-1" id="facturacion-1" class="facturacion-1" placeholder="0,00" required>
                                    </div>
                                </div>
                            </div>

                            <p class="titulo-2 mt-3">Otras Actividades <span class="comentario-1">(Actividades consideradas secundarias)</span></p>

                            <!-- actividad 2 -->
                            <div class="row row-activity wrap-actividad-2 mb-2">
                                <div class="col-sm-12 col-md-2">
                                    <div class="form-outline">
                                        <input class="form-control ciiu-2" name="ciiu-2" id="ciiu-2" type="text" campo_actividad="actividad-2">
                                        <label class="form-label" for="ciiu-2">C&oacute;digo CIIU</label>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-outline">
                                        <input class="form-control actividad-2" name="actividad-2" id="actividad-2" type="text" disabled>
                                        <label class="form-label" for="actividad-2"></label>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-2">
                                    <div class="form-outline">
                                        <input class="form-control text-end" type="text" name="facturacion-2" id="facturacion-2" class="facturacion-2" placeholder="0,00" required>
                                        <label class="form-label" for="facturacion-2">Facturaci&oacute;n anual</label>
                                    </div>
                                </div>
                            </div>

                            <!-- actividad 3 -->
                            <div class="row row-activity wrap-actividad-3 mb-2">
                                <div class="col-sm-12 col-md-2">
                                    <div class="form-outline">
                                        <input class="form-control ciiu-3" name="ciiu-3" id="ciiu-3" type="text" campo_actividad="actividad-3">
                                        <label class="form-label" for="ciiu-3">C&oacute;digo CIIU</label>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-outline">
                                        <input class="form-control actividad-3" name="actividad-3" id="actividad-3" type="text" disabled>
                                        <label class="form-label" for="actividad-3"></label>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-2">
                                    <div class="form-outline">
                                        <input class="form-control text-end" type="text" name="facturacion-3" id="facturacion-3" class="facturacion-3" placeholder="0,00" required>
                                        <label class="form-label" for="facturacion-3">Facturaci&oacute;n anual</label>
                                    </div>
                                </div>
                            </div>

                            <!-- actividad 4 -->
                            <div class="row row-activity wrap-actividad-4 mb-2">
                                <div class="col-sm-12 col-md-2">
                                    <div class="form-outline">
                                        <input class="form-control ciiu-4" name="ciiu-4" id="ciiu-4" type="text" campo_actividad="actividad-4">
                                        <label class="form-label" for="ciiu-4">C&oacute;digo CIIU</label>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <div class="form-outline">
                                        <input class="form-control actividad-4" name="actividad-4" id="actividad-4" type="text" disabled>
                                        <label class="form-label" for="actividad-4"></label>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-2">
                                    <div class="form-outline">
                                        <input class="form-control text-end" type="text" name="facturacion-4" id="facturacion-4" class="facturacion-4">
                                        <label class="form-label" for="facturacion-4">Facturaci&oacute;n anual</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Agregar actividades -->
                        <div class="row">
                            <div class="col-xs-12 col-md-9">
                                <!-- <a href="#" class="agregarActividad">Agregar actividad</a> -->
                                <button role="button" class="btn btn-primary agregarActividad">Agregar actividad</button>
                            </div>
                        </div>
                    </div>

                    <!-- ORGANIZACION JURIDICA -->
                    <div class="row wrap-organizacionJuridica">
                        <div class="titulo-2 mt-3">Formas de Organizaci&oacute;n Jur&iacute;dica</div>

                        <div class="col-sm-12 col-md-4">
                            <div class="form-group organizacionJuridica">
                                <label for="organizacionJuridica" class="titulo-3 mt-2">Seleccione una opci&oacute;n</label>
                                <select class="form-select" id="organizacionJuridica" aria-label="Floating label select">
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
                                    <option value="10">Ninguno</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <label class="titulo-3" for="organizacionJuridica-1">Escriba el tipo si no está listado</label>
                                <input class="form-control organizacionJuridica-1" type="text" name="organizacionJuridica-1" id="organizacionJuridica-1" disabled>
                            </div>
                        </div>
                    </div>

                    <!-- Domicilio planta industrial -->
                    <div class="row wrap-domicilioPlantaIndustrial">
                        
                        <div class="titulo-2 mt-3">Domicilio planta industrial / obrador principal</div>

                        <div class="row row-dpi-domicilio">
                            <div class="col-sm-12 col-md-8">
                                <div class="form-group">
                                    <label for="dpi-txtDomicilio" class="titulo-3">Domicilio</label>
                                    <input type="text" name="dpi-txtDomicilio" id="dpi-txtDomicilio" class="form-control dpi-txtDomicilio">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="dpi-localidad" class="titulo-3">Localidad</label>
                                    <input type="text" class="form-control dpi-localidad" name="dpi-localidad" id="dpi-localidad" value="Pirane">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="dpi-provincia" class="titulo-3">Provincia</label>
                                    <input type="text" class="form-control dpi-provincia" name="dpi-provincia" id="dpi-provincia" value="Formosa">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label for="dpi-codPostal" class="titulo-3">C&oacute;digo postal</label>
                                    <input type="text" class="form-control dpi-codPostal" name="dpi-codPostal" id="dpi-codPostal" value="3606">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label for="dpi-departamento" class="titulo-3">Departamento</label>
                                    <input type="text" class="form-control dpi-departamento" name="dpi-departamento" id="dpi-departamento" value="Pirane">
                                </div>
                            </div>
                        </div>

                        <!-- ingresos brutos, Hab. Municipal, Fecha -->
                        <div class="row">
                            <div class="col-sm-12 col-md-3">
                                <div class="form-group">
                                    <label for="nroIngresoBruto" class="titulo-3">Ing. Brutos</label>
                                    <input type="text" name="nroIngresoBruto" id="nroIngresoBruto" class="form-control nroIngresoBruto">
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-3">
                                <div class="form-group">
                                    <label for="habMunicipal" class="titulo-3">Hab. Municipal</label>
                                    <input type="text" name="habMunicipal" id="habMunicipal" class="form-control habMunicipal">
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-2">
                                <div class="form-group">
                                    <label for="fechaHabMunicipal" class="titulo-3">Fecha Hab.</label>
                                    <input type="text" name="fechaHabMunicipal" id="fechaHabMunicipal" class="form-control fechaHabMunicipal" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Relacion entre titular y domicilio de planta -->
                    <div class="row mt-2 wrap-relTitularYDomDeTitular">
                        <div class="titulo-2">Relaci&oacute;n entre el titular y el domicilio de planta</div>

                        <div class="row">
                            <div class="col-sm-12 col-md-8">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                    <input type="radio" name="opcRelTitDom" id="opcion1" value="1" autocomplete="off"> Alquiler
                                    </label>
                                    <label class="form-check-label">
                                    <input type="radio" name="opcRelTitDom" id="opcion2" value="2" autocomplete="off"> Comodato
                                    </label>
                                    <label class="form-check-label">
                                    <input type="radio" name="opcRelTitDom" id="opcion3" value="3" autocomplete="off"> Fiscal
                                    </label>
                                    <label class="form-check-label">
                                    <input type="radio" name="opcRelTitDom" id="opcion4" value="4" autocomplete="off"> Propiedad
                                    </label>
                                    <label class="form-check-label">
                                    <input type="radio" name="opcRelTitDom" id="opcion5" value="5" autocomplete="off"> Sucesión
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- BOTONES -->
                    <div class="row justify-content-evenly mt-4">
                        <div class="col-4">
                            <button type="button" class="btn btn-secondary mb-4" onclick="window.location.href='../inicio'"><i class="fas fa-sign-out-alt mr-2"></i> Salir</button>
                        </div>
                        <div class="col-4">
                            <button type="button" class="btn btn-primary mb-4 boton-1">Siguiente <i class="fas fa-chevron-right"></i></button>
                        </div>
                    </div>
                    <!-- //BOTONES -->
                </div>
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

                    <!-- BOTONES -->
                    <div class="row justify-content-evenly mt-4">
                        <div class="col-4">
                            <button type="button" class="btn btn-primary mb-4 boton-2-anterior"><i class="fas fa-chevron-left"></i> Anterior</button>
                        </div>
                        <div class="col-4">
                            <button type="button" class="btn btn-primary mb-4 boton-2-siguiente">Siguiente <i class="fas fa-chevron-right"></i></button>
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
                                <button type="button" class="btn btn-primary mb-4 boton-3-anterior"><i class="fas fa-chevron-left"></i> Anterior</button>
                            </div>
                            <div class="col-4">
                                <button type="button" class="btn btn-primary mb-4 boton-3-siguiente">Siguiente <i class="fas fa-chevron-right"></i></button>
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

                        <!-- botonera -->
                        <div class="row justify-content-center mt-3">
                            <div class="col-10 col-sm-6">
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-light boton-4-anterior" id="boton-4-anterior">
                                    <i class="fas fa-chevron-left"></i>
                                    </button>
                                    <button class="btn btn-light boton-4-siguiente" id="boton-4-siguiente">
                                    <i class="fas fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- botonera -->
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
                                    <button type="button" class="btn btn-primary mb-4 boton-4-anterior"><i class="fas fa-chevron-left"></i> Anterior</button>
                                </div>
                                <div class="col-4">
                                    <button type="button" class="btn btn-primary mb-4 boton-4-siguiente">Siguiente <i class="fas fa-chevron-right"></i></button>
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
                    <div class="container d-md-none">
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
                        <div class="row justify-content-center mt-3">
                            <div class="col-sm-12 col-md-9">
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-light">
                                    <i class="fas fa-chevron-left  boton-5-anterior"></i>
                                    </button>
                                    <button class="btn btn-light boton-5-siguiente">
                                    <i class="fas fa-chevron-right"></i>
                                    </button>
                                </div>
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
                        <div class="row justify-content-center mt-3">
                            <div class="col-10 col-sm-6">
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-light">
                                    <i class="fas fa-chevron-left  boton-6-anterior"></i>
                                    </button>
                                    <button class="btn btn-light boton-6-siguiente">
                                    <i class="fas fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- // BOTONES PASO 6 -->
                    </div>
                </div>
                <!-- // PASO 6 -->

                <!-- PASO 7 -->
                <div class="row paso-7 transicion-1 sale-derecha" style="display: none;">
                    
                    <div class="row my-3">
                        <div class="col-12">
                            <div class="cel-titulo-1">10 - PROYECTOS DE MEJORA</div>
                            <div class="cel-aclara-1">Marque con X si su proyecto se encuentra en ejecución o en agenda y describa la información solicitada</div>
                        </div>
                    </div>

                    <!-- Ampliacion de la capacidad productiva -->
                    <div class="container">
                        <div class="row mt-3">
                            <div class="col-12">
                                <label class="cel-texto-campo-1" for="nombre-linea">Ampliación de la capacidad productiva</label>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="amCapProd" id="acpEnEjecucion" value="En ejecucion" />
                                    <label class="form-check-label" for="acpEnEjecucion">EN EJECUCIÓN</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="amCapProd" id="acpEnAgenda" value="En agenda" />
                                    <label class="form-check-label" for="acpEnAgenda">EN AGENDA</label>
                                </div>
                            </div>
                        </div>

                        <!-- plazo implementacion, fuente de financiamiento, monto estimado de la inversion, asistencia tecnica necesaria -->
                        <div class="row mt-2">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-outline">
                                    <input class="form-control plazoImplementa_1" type="text" id="plazoImplementa_1">
                                    <label class="form-label" for="plazoImplementa_1">Plazo implementación</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 mt-2">
                                <div class="form-outline">
                                    <input class="form-control fuenteFinanciamiento_1" type="text" id="fuenteFinanciamiento_1">
                                    <label class="form-label" for="fuenteFinanciamiento_1">Fuente financiamiento</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-outline">
                                    <input class="form-control montoInversion_1" type="text" id="montoInversion_1">
                                    <label class="form-label" for="montoInversion_1">Monto estimado de la inversión</label>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-2">
                                <div class="form-outline">
                                    <input class="form-control asistenciaTecnica_1" type="text" id="asistenciaTecnica_1">
                                    <label class="form-label" for="asistenciaTecnica_1">Asistencia técnica necesaria</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <hr class="cel-linea-horiz-1 mt-3">

                    <!-- Relocalizacion de la planta industrial -->
                    <div class="container">
                        <div class="row mt-3">
                            <div class="col-12">
                                <label class="cel-texto-campo-1" for="nombre-linea">Relocalizacion de la planta industrial</label>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pmAmpliaCapProd" id="pmAmpliaCapProd" value="En ejecucion" />
                                    <label class="form-check-label" for="pmAmpliaCapProd">EN EJECUCIÓN</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pmAmpliaCapProd" id="pmAmpliaCapProd" value="En agenda" />
                                    <label class="form-check-label" for="pmAmpliaCapProd">EN AGENDA</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-outline">
                                    <input class="form-control plazoImplementa_2" type="text" id="plazoImplementa_2">
                                    <label class="form-label" for="plazoImplementa_2">Plazo implementación</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 mt-2">
                                <div class="form-outline">
                                    <input class="form-control fuenteFinanciamiento_2" type="text" id="fuenteFinanciamiento_2">
                                    <label class="form-label" for="fuenteFinanciamiento_2">Fuente financiamiento</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-outline">
                                    <input class="form-control montoInversion_2" type="text" id="montoInversion_2">
                                    <label class="form-label" for="montoInversion_2">Monto estimado de la inversión</label>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-2">
                                <div class="form-outline">
                                    <input class="form-control asistenciaTecnica_2" type="text" id="asistenciaTecnica_2">
                                    <label class="form-label" for="asistenciaTecnica_2">Asistencia técnica necesaria</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <hr class="cel-linea-horiz-1 mt-3">

                    <!-- Relocalizacion al parque industrial -->
                    <div class="container">
                        <div class="row mt-3">
                            <div class="col-12">
                                <label class="cel-texto-campo-1" for="nombre-linea">Relocalizacion al parque industrial</label>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pmAmpliaCapProd" id="pmAmpliaCapProd" value="En ejecucion" />
                                    <label class="form-check-label" for="pmAmpliaCapProd">EN EJECUCIÓN</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pmAmpliaCapProd" id="pmAmpliaCapProd" value="En agenda" />
                                    <label class="form-check-label" for="pmAmpliaCapProd">EN AGENDA</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-outline">
                                    <input class="form-control plazoImplementa_3" type="text" id="plazoImplementa_3">
                                    <label class="form-label" for="plazoImplementa_3">Plazo implementación</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 mt-2">
                                <div class="form-outline">
                                    <input class="form-control fuenteFinanciamiento_3" type="text" id="fuenteFinanciamiento_3">
                                    <label class="form-label" for="fuenteFinanciamiento_3">Fuente financiamiento</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-2">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-outline">
                                    <input class="form-control montoInversion_3" type="text" id="montoInversion_3">
                                    <label class="form-label" for="montoInversion_3">Monto estimado de la inversión</label>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-2">
                                <div class="form-outline">
                                    <input class="form-control asistenciaTecnica_3" type="text" id="asistenciaTecnica_3">
                                    <label class="form-label" for="asistenciaTecnica_3">Asistencia técnica necesaria</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <hr class="cel-linea-horiz-1 mt-3">

                    <!-- Incorporación y/o actualización en tecnología -->
                    <div class="container">
                        <div class="row mt-3">
                            <div class="col-12">
                                <label class="cel-texto-campo-1" for="nombre-linea">Incorporación y/o actualización en tecnología</label>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pmAmpliaCapProd" id="pmAmpliaCapProd" value="En ejecucion" />
                                    <label class="form-check-label" for="pmAmpliaCapProd">EN EJECUCIÓN</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pmAmpliaCapProd" id="pmAmpliaCapProd" value="En agenda" />
                                    <label class="form-check-label" for="pmAmpliaCapProd">EN AGENDA</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-outline">
                                    <input class="form-control plazoImplementa_4" type="text" id="plazoImplementa_4">
                                    <label class="form-label" for="plazoImplementa_4">Plazo implementación</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 mt-2">
                                <div class="form-outline">
                                    <input class="form-control fuenteFinanciamiento_4" type="text" id="fuenteFinanciamiento_4">
                                    <label class="form-label" for="fuenteFinanciamiento_4">Fuente financiamiento</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-2">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-outline">
                                    <input class="form-control montoInversion_4" type="text" id="montoInversion_4">
                                    <label class="form-label" for="montoInversion_4">Monto estimado de la inversión</label>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-2">
                                <div class="form-outline">
                                    <input class="form-control asistenciaTecnica_4" type="text" id="asistenciaTecnica_4">
                                    <label class="form-label" for="asistenciaTecnica_4">Asistencia técnica necesaria</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <hr class="cel-linea-horiz-1 mt-3">

                    <!-- Nuevos segmentos de mercado -->
                    <div class="container">
                        <div class="row mt-3">
                            <div class="col-12">
                                <label class="cel-texto-campo-1" for="nombre-linea">Nuevos segmentos de mercado</label>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pmAmpliaCapProd" id="pmAmpliaCapProd" value="En ejecucion" />
                                    <label class="form-check-label" for="pmAmpliaCapProd">EN EJECUCIÓN</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pmAmpliaCapProd" id="pmAmpliaCapProd" value="En agenda" />
                                    <label class="form-check-label" for="pmAmpliaCapProd">EN AGENDA</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-outline">
                                    <input class="form-control plazoImplementa_5" type="text" id="plazoImplementa_5">
                                    <label class="form-label" for="plazoImplementa_5">Plazo implementación</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 mt-2">
                                <div class="form-outline">
                                    <input class="form-control fuenteFinanciamiento_5" type="text" id="fuenteFinanciamiento_5">
                                    <label class="form-label" for="fuenteFinanciamiento_5">Fuente financiamiento</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-2">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-outline">
                                    <input class="form-control montoInversion_5" type="text" id="montoInversion_5">
                                    <label class="form-label" for="montoInversion_5">Monto estimado de la inversión</label>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-2">
                                <div class="form-outline">
                                    <input class="form-control asistenciaTecnica_5" type="text" id="asistenciaTecnica_5">
                                    <label class="form-label" for="asistenciaTecnica_5">Asistencia técnica necesaria</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <hr class="cel-linea-horiz-1 mt-3">

                    <!-- Sustitución de productos de origen extra-provincial -->
                    <div class="container">
                        <div class="row mt-3">
                            <div class="col-12">
                                <label class="cel-texto-campo-1" for="nombre-linea">Sustitución de productos de origen extra-provincial</label>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pmAmpliaCapProd" id="pmAmpliaCapProd" value="En ejecucion" />
                                    <label class="form-check-label" for="pmAmpliaCapProd">EN EJECUCIÓN</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pmAmpliaCapProd" id="pmAmpliaCapProd" value="En agenda" />
                                    <label class="form-check-label" for="pmAmpliaCapProd">EN AGENDA</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-outline">
                                    <input class="form-control plazoImplementa" type="text" id="plazoImplementa">
                                    <label class="form-label" for="plazoImplementa">Plazo implementación</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 mt-2">
                                <div class="form-outline">
                                    <input class="form-control fuenteFinanciamiento" type="text" id="fuenteFinanciamiento">
                                    <label class="form-label" for="fuenteFinanciamiento">Fuente financiamiento</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-2">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-outline">
                                    <input class="form-control montoInversion" type="text" id="montoInversion">
                                    <label class="form-label" for="montoInversion">Monto estimado de la inversión</label>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-2">
                                <div class="form-outline">
                                    <input class="form-control asistenciaTecnica" type="text" id="asistenciaTecnica">
                                    <label class="form-label" for="asistenciaTecnica">Asistencia técnica necesaria</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <hr class="cel-linea-horiz-1 mt-3">

                    <!-- Sustitución de Importaciones -->
                    <div class="container">
                        <div class="row mt-3">
                            <div class="col-12">
                                <label class="cel-texto-campo-1" for="nombre-linea">Sustitución de Importaciones</label>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pmAmpliaCapProd" id="pmAmpliaCapProd" value="En ejecucion" />
                                    <label class="form-check-label" for="pmAmpliaCapProd">EN EJECUCIÓN</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pmAmpliaCapProd" id="pmAmpliaCapProd" value="En agenda" />
                                    <label class="form-check-label" for="pmAmpliaCapProd">EN AGENDA</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-outline">
                                    <input class="form-control plazoImplementa" type="text" id="plazoImplementa">
                                    <label class="form-label" for="plazoImplementa">Plazo implementación</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 mt-2">
                                <div class="form-outline">
                                    <input class="form-control fuenteFinanciamiento" type="text" id="fuenteFinanciamiento">
                                    <label class="form-label" for="fuenteFinanciamiento">Fuente financiamiento</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-2">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-outline">
                                    <input class="form-control montoInversion" type="text" id="montoInversion">
                                    <label class="form-label" for="montoInversion">Monto estimado de la inversión</label>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-2">
                                <div class="form-outline">
                                    <input class="form-control asistenciaTecnica" type="text" id="asistenciaTecnica">
                                    <label class="form-label" for="asistenciaTecnica">Asistencia técnica necesaria</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <hr class="cel-linea-horiz-1 mt-3">

                    <!-- Nuevos productos -->
                    <div class="container">
                        <div class="row mt-3">
                            <div class="col-12">
                                <label class="cel-texto-campo-1" for="nombre-linea">Nuevos productos</label>
                                <label class="cel-comentario-1" for="nombre-linea">(Franquicias, Alianzas, etc.)</label>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pmAmpliaCapProd" id="pmAmpliaCapProd" value="En ejecucion" />
                                    <label class="form-check-label" for="pmAmpliaCapProd">EN EJECUCIÓN</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pmAmpliaCapProd" id="pmAmpliaCapProd" value="En agenda" />
                                    <label class="form-check-label" for="pmAmpliaCapProd">EN AGENDA</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-outline">
                                    <input class="form-control plazoImplementa" type="text" id="plazoImplementa">
                                    <label class="form-label" for="plazoImplementa">Plazo implementación</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 mt-2">
                                <div class="form-outline">
                                    <input class="form-control fuenteFinanciamiento" type="text" id="fuenteFinanciamiento">
                                    <label class="form-label" for="fuenteFinanciamiento">Fuente financiamiento</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-2">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-outline">
                                    <input class="form-control montoInversion" type="text" id="montoInversion">
                                    <label class="form-label" for="montoInversion">Monto estimado de la inversión</label>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-2">
                                <div class="form-outline">
                                    <input class="form-control asistenciaTecnica" type="text" id="asistenciaTecnica">
                                    <label class="form-label" for="asistenciaTecnica">Asistencia técnica necesaria</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <hr class="cel-linea-horiz-1 mt-3">

                    <!-- Nuevas instalaciones industriales -->
                    <div class="container">
                        <div class="row mt-3">
                            <div class="col-12">
                                <label class="cel-texto-campo-1" for="nombre-linea">Nuevas instalaciones industriales</label>
                                <label class="cel-comentario-1" for="nombre-linea">(Dentro de la planta industrial)</label>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pmAmpliaCapProd" id="pmAmpliaCapProd" value="En ejecucion" />
                                    <label class="form-check-label" for="pmAmpliaCapProd">EN EJECUCIÓN</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pmAmpliaCapProd" id="pmAmpliaCapProd" value="En agenda" />
                                    <label class="form-check-label" for="pmAmpliaCapProd">EN AGENDA</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-outline">
                                    <input class="form-control plazoImplementa" type="text" id="plazoImplementa">
                                    <label class="form-label" for="plazoImplementa">Plazo implementación</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 mt-2">
                                <div class="form-outline">
                                    <input class="form-control fuenteFinanciamiento" type="text" id="fuenteFinanciamiento">
                                    <label class="form-label" for="fuenteFinanciamiento">Fuente financiamiento</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-2">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-outline">
                                    <input class="form-control montoInversion" type="text" id="montoInversion">
                                    <label class="form-label" for="montoInversion">Monto estimado de la inversión</label>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-2">
                                <div class="form-outline">
                                    <input class="form-control asistenciaTecnica" type="text" id="asistenciaTecnica">
                                    <label class="form-label" for="asistenciaTecnica">Asistencia técnica necesaria</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <hr class="cel-linea-horiz-1 mt-3">

                    <!-- Nuevas líneas de manufactura -->
                    <div class="container">
                        <div class="row mt-3">
                            <div class="col-12">
                                <label class="cel-texto-campo-1" for="nombre-linea">Nuevas líneas de manufactura</label>
                                <label class="cel-comentario-1" for="nombre-linea">(Dentro de la planta industrial)</label>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pmAmpliaCapProd" id="pmAmpliaCapProd" value="En ejecucion" />
                                    <label class="form-check-label" for="pmAmpliaCapProd">EN EJECUCIÓN</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pmAmpliaCapProd" id="pmAmpliaCapProd" value="En agenda" />
                                    <label class="form-check-label" for="pmAmpliaCapProd">EN AGENDA</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-outline">
                                    <input class="form-control plazoImplementa" type="text" id="plazoImplementa">
                                    <label class="form-label" for="plazoImplementa">Plazo implementación</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 mt-2">
                                <div class="form-outline">
                                    <input class="form-control fuenteFinanciamiento" type="text" id="fuenteFinanciamiento">
                                    <label class="form-label" for="fuenteFinanciamiento">Fuente financiamiento</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-2">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-outline">
                                    <input class="form-control montoInversion" type="text" id="montoInversion">
                                    <label class="form-label" for="montoInversion">Monto estimado de la inversión</label>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-2">
                                <div class="form-outline">
                                    <input class="form-control asistenciaTecnica" type="text" id="asistenciaTecnica">
                                    <label class="form-label" for="asistenciaTecnica">Asistencia técnica necesaria</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <hr class="cel-linea-horiz-1 mt-3">

                    <!-- Desarrollo de nuevos modelos de negocio -->
                    <div class="container">
                        <div class="row mt-3">
                            <div class="col-12">
                                <label class="cel-texto-campo-1" for="nombre-linea">Desarrollo de nuevos modelos de negocio</label>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pmAmpliaCapProd" id="pmAmpliaCapProd" value="En ejecucion" />
                                    <label class="form-check-label" for="pmAmpliaCapProd">EN EJECUCIÓN</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pmAmpliaCapProd" id="pmAmpliaCapProd" value="En agenda" />
                                    <label class="form-check-label" for="pmAmpliaCapProd">EN AGENDA</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-outline">
                                    <input class="form-control plazoImplementa" type="text" id="plazoImplementa">
                                    <label class="form-label" for="plazoImplementa">Plazo implementación</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 mt-2">
                                <div class="form-outline">
                                    <input class="form-control fuenteFinanciamiento" type="text" id="fuenteFinanciamiento">
                                    <label class="form-label" for="fuenteFinanciamiento">Fuente financiamiento</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-2">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-outline">
                                    <input class="form-control montoInversion" type="text" id="montoInversion">
                                    <label class="form-label" for="montoInversion">Monto estimado de la inversión</label>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-2">
                                <div class="form-outline">
                                    <input class="form-control asistenciaTecnica" type="text" id="asistenciaTecnica">
                                    <label class="form-label" for="asistenciaTecnica">Asistencia técnica necesaria</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <hr class="cel-linea-horiz-1 mt-3">

                    <!-- Proyectos de economía circular -->
                    <div class="container">
                        <div class="row mt-3">
                            <div class="col-12">
                                <label class="cel-texto-campo-1" for="nombre-linea">Proyectos de economía circular</label>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pmAmpliaCapProd" id="pmAmpliaCapProd" value="En ejecucion" />
                                    <label class="form-check-label" for="pmAmpliaCapProd">EN EJECUCIÓN</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pmAmpliaCapProd" id="pmAmpliaCapProd" value="En agenda" />
                                    <label class="form-check-label" for="pmAmpliaCapProd">EN AGENDA</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-outline">
                                    <input class="form-control plazoImplementa" type="text" id="plazoImplementa">
                                    <label class="form-label" for="plazoImplementa">Plazo implementación</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 mt-2">
                                <div class="form-outline">
                                    <input class="form-control fuenteFinanciamiento" type="text" id="fuenteFinanciamiento">
                                    <label class="form-label" for="fuenteFinanciamiento">Fuente financiamiento</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-2">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-outline">
                                    <input class="form-control montoInversion" type="text" id="montoInversion">
                                    <label class="form-label" for="montoInversion">Monto estimado de la inversión</label>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-2">
                                <div class="form-outline">
                                    <input class="form-control asistenciaTecnica" type="text" id="asistenciaTecnica">
                                    <label class="form-label" for="asistenciaTecnica">Asistencia técnica necesaria</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <hr class="cel-linea-horiz-1 mt-3">

                    <!-- Proyectos de inclusión y perspectiva de genero dentro de la empresa -->
                    <div class="container">
                        <div class="row mt-3">
                            <div class="col-12">
                                <label class="cel-texto-campo-1" for="nombre-linea">Proyectos de inclusión y perspectiva de genero dentro de la empresa</label>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pmAmpliaCapProd" id="pmAmpliaCapProd" value="En ejecucion" />
                                    <label class="form-check-label" for="pmAmpliaCapProd">EN EJECUCIÓN</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pmAmpliaCapProd" id="pmAmpliaCapProd" value="En agenda" />
                                    <label class="form-check-label" for="pmAmpliaCapProd">EN AGENDA</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-outline">
                                    <input class="form-control plazoImplementa" type="text" id="plazoImplementa">
                                    <label class="form-label" for="plazoImplementa">Plazo implementación</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 mt-2">
                                <div class="form-outline">
                                    <input class="form-control fuenteFinanciamiento" type="text" id="fuenteFinanciamiento">
                                    <label class="form-label" for="fuenteFinanciamiento">Fuente financiamiento</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-2">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-outline">
                                    <input class="form-control montoInversion" type="text" id="montoInversion">
                                    <label class="form-label" for="montoInversion">Monto estimado de la inversión</label>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-2">
                                <div class="form-outline">
                                    <input class="form-control asistenciaTecnica" type="text" id="asistenciaTecnica">
                                    <label class="form-label" for="asistenciaTecnica">Asistencia técnica necesaria</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <hr class="cel-linea-horiz-1 mt-3">

                    <!-- BOTONES PASO 7 -->
                    <div class="row justify-content-center mt-5">
                        <div class="col-6">
                            <button type="button" class="btn btn-primary mb-4 boton-7-anterior"> < Anterior</button>
                        </div>
                        <div class="col-6">
                            <button type="button" class="btn btn-primary mb-4 boton-7-siguiente">Terminar</button>
                        </div>
                    </div>
                    <!-- // BOTONES PASO 7 -->
                    
                </div>
                <!-- // PASO 7 -->

                <!-- PASO 8 -->
                <div class="row paso-8 transicion-1 sale-derecha" style="display: none;">
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
                </div>  
                <!-- // PASO 8 -->
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <!-- 
    <div style="height: 125px;">.</div>
    <div class="d-md-none container-fluid fixed-bottom" style="background-color: #003763; ">
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
    
    <!-- Jquery -->
    <script src="https://cdn-www.formosa.gob.ar/js/jquery.min.js"></script>
	<script src="https://cdn-www.formosa.gob.ar/js/jquery-migrate-1.2.1.js"></script>
	<script src="https://cdn-www.formosa.gob.ar/js/jquery-ui.min.js"></script>
    <script src="https://cdn-www.formosa.gob.ar/js/bootstrap-datepicker.js"></script>

    <!-- Bootstrap 5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
    <script src="preinscripcion.js"></script>
</body>
</html>
<?php
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
    <div class="container-fluid d-md-none">
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-auto text-center">
                <p class="h2">Preinscripci&oacute;n al Registro de Industria</p>
            </div>
        </div>
    </div>

    <!-- Pasos: Numeros dentro de circulos -->
    <div class="container mt-2">
      <div class="row justify-content-center align-items-center">
        <div class="col-auto">
          <div class="d-flex justify-content-center align-items-center rounded-circle paso-bg-activo text-white" style="width: 50px; height: 50px; font-family: 'Arimo', sans-serif; font-size: 24px; font-weight: 700;">1</div>
        </div>
        <div class="col-auto">
          <div class="d-flex justify-content-center align-items-center rounded-circle paso-bg-inactivo text-white" style="width: 40px; height: 40px; font-family: 'Arimo', sans-serif; font-size: 20px;">2</div>
        </div>
        <div class="col-auto">
          <div class="d-flex justify-content-center align-items-center rounded-circle paso-bg-inactivo text-white" style="width: 40px; height: 40px; font-family: 'Arimo', sans-serif; font-size: 20px;">3</div>
        </div>
        <div class="col-auto">
          <div class="d-flex justify-content-center align-items-center rounded-circle paso-bg-inactivo text-white" style="width: 40px; height: 40px; font-family: 'Arimo', sans-serif; font-size: 20px;">4</div>
        </div>
        <div class="col-auto">
          <div class="d-flex justify-content-center align-items-center rounded-circle paso-bg-inactivo text-white" style="width: 40px; height: 40px; font-family: 'Arimo', sans-serif; font-size: 20px;">5</div>
        </div>
      </div>
    </div>
    <!-- // Pasos: Numeros dentro de circulos -->

    <section>
        <div class="container">
           
            <div>
                <form> 
                    <!-- PASO 1 DATOS DE LA EMPRESA -->
                    <div class="paso-1 transicion-1" style="display: block;">

                        <div class="row">
                            <div class="col-xs-12 col-md-8">

                                <!-- DATOS DE LA EMPRESA -->
                                <div class="row mb-4">
                                    <div class="col">
                                    <p class="titulo-1">01- DATOS DE LA EMPRESA</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- titulo: ordenamiento juridico -->
                                    <div class="row mb-1">
                                        <div class="col-xs-12 col-md-8">
                                            <p class="titulo-2">Ordenamiento Jur&iacute;dico</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ORDENAMIENTO JURIDICO -->
                        <div class="row mb-4 ordenamiento_juridico">
                            <div class="col-4 pl-2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="personaHumana" value="personaHumana" />
                                    <label class="form-check-label" for="personaHumana">Persona humana</label>
                                </div>
                            </div>
                            
                            <div class="col-4 pl-2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="personaJuridica" value="personaJuridica" />
                                    <label class="form-check-label" for="personaJuridica">Persona jur&iacute;dica</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row datosDeLaEmpresa">
                            <!-- Razon social -->
                            <div class="row mb-2">
                                <div class="col-xs-12 col-md-8">
                                    <div class="form-outline">
                                        <input type="text" id="razonSocial" class="form-control" />
                                        <label class="form-label" for="razonSocial">Raz&oacute;n social</label>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- CUIT y Fecha inicio actividad -->
                            <div class="row mb-2">
                                <div class="col-xs-12 col-md-4">
                                    <div class="form-outline">
                                        <input type="text" id="cuit" class="form-control" />
                                        <label class="form-label" for="cuit">CUIT</label>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-4">
                                    <div class="form-outline">
                                        <input type="text" id="fecha" class="form-control" />
                                        <label class="form-label" for="fecha">Fecha inicio actividad</label>
                                    </div>
                                </div>
                            </div>

                            <!-- numeros de registro puertos y vias navegables -->
                            <div class="row mb-2 mt-4">
                                <div class="col-xs-12 col-md-5">
                                    <div class="aclara-1">Para actividades de extracción de arena</div>
                                    <div class="form-outline">
                                        <input type="text" class="form-control txtDisposicion" id="txtDisposicion">
                                        <label class="form-label" for="txtDisposicion">Disposici&oacute;n de Subsec. de Puertos y Vías Navegables Nro:</label>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-3">
                                    <div class="aclara-1">&nbsp;</div>
                                    <div class="form-outline">
                                        <input type="text" class="form-control" id="fechaDisposicion">
                                        <label class="form-label" for="fechaDisposicion">Fecha</label>
                                    </div>
                                </div>
                            </div>

                            <!-- numeros de registro nacional minero -->
                            <div class="row mb-2">
                                <div class="col-xs-12 col-md-5">
                                    <div class="form-outline">
                                        <input type="text" class="form-control regNacMinero" id="regNacMinero">
                                        <label class="form-label" for="regNacMinero">Registro nacional minero Nro:</label>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-3">
                                    <div class="form-outline">
                                        <input type="text" class="form-control" id="fecharegNacMinero">
                                        <label class="form-label" for="fecharegNacMinero">Fecha</label>
                                    </div>
                                </div>
                            </div>

                            <!-- numeros de registro operadora de hidrocarburo y gas -->
                            <div class="row mb-2">
                                <div class="col-xs-12 col-md-5">
                                    <div class="form-outline">
                                        <input type="text" class="form-control regOperHidroYGas" id="regOperHidroYGas">
                                        <label class="form-label" for="regOperHidroYGas">Registro Operador Hidrocarburo y Gas Nro:</label>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-3">
                                    <div class="form-outline">
                                        <input type="text" class="form-control" id="fecharegOperHidroYGas">
                                        <label class="form-label" for="fecharegOperHidroYGas">Fecha</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ACTIVIDADES -->
                        <div class="row actividades">
                            <p class="titulo-2 mt-2">Actividades</p>

                            <div class="row mb-2 allActividades">

                                <p class="titulo-2">Actividad principal <span class="comentario-1">(Especificar actividad principal)</span></p>

                                <!-- actividad 1 -->
                                <div class="row row-activity wrap-actividad-1 mb-4">
                                    <div class="col-xs-12 col-md-2">
                                        <div class="form-outline">
                                            <input class="form-control ciiu-1" type="text" name="ciiu-1" id="ciiu-1">
                                            <label class="form-label" for="ciiu-1">C&oacute;digo CIIU</label>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-md-4">
                                        <div class="form-outline">
                                            <input class="form-control actividad-1" type="text" name="actividad-1" id="actividad-1" disabled>
                                            <label class="form-label" for="actividad-1">Actividad</label>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-md-2">
                                        <div class="form-outline">
                                            <input class="form-control text-end" type="text" name="facturacion-1" id="facturacion-1" class="facturacion-1">
                                            <label class="form-label" for="facturacion-1">Facturaci&oacute;n anual</label>
                                        </div>
                                    </div>
                                </div>

                                <p class="titulo-2">Otras Actividades <span class="comentario-1">(Actividades consideradas secundarias)</span></p>

                                <!-- actividad 2 -->
                                <div class="row row-activity wrap-actividad-2 mb-2">
                                    <div class="col-xs-12 col-md-2">
                                        <div class="form-outline">
                                            <input class="form-control ciiu-2" name="ciiu-2" id="ciiu-2" type="text">
                                            <label class="form-label" for="ciiu-2">C&oacute;digo CIIU</label>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-md-4">
                                        <div class="form-outline">
                                            <input class="form-control actividad-2" name="actividad-2" id="actividad-2" type="text" disabled>
                                            <label class="form-label" for="actividad-2">Actividad</label>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-md-2">
                                        <div class="form-outline">
                                            <input class="form-control text-end" type="text" name="facturacion-2" id="facturacion-2" class="facturacion-2">
                                            <label class="form-label" for="facturacion-2">Facturaci&oacute;n anual</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- actividad 3 -->
                                <div class="row row-activity wrap-actividad-3 mb-2">
                                    <div class="col-xs-12 col-md-2">
                                        <div class="form-outline">
                                            <input class="form-control ciiu-3" name="ciiu-3" id="ciiu-3" type="text">
                                            <label class="form-label" for="ciiu-3">C&oacute;digo CIIU</label>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-md-4">
                                        <div class="form-outline">
                                            <input class="form-control actividad-3" name="actividad-3" id="actividad-3" type="text" disabled>
                                            <label class="form-label" for="actividad-3">Actividad</label>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-md-2">
                                        <div class="form-outline">
                                            <input class="form-control text-end" type="text" name="facturacion-3" id="facturacion-3" class="facturacion-3">
                                            <label class="form-label" for="facturacion-3">Facturaci&oacute;n anual</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- actividad 4 -->
                                <div class="row row-activity wrap-actividad-4 mb-2">
                                    <div class="col-xs-12 col-md-2">
                                        <div class="form-outline">
                                            <input class="form-control ciiu-4" name="ciiu-4" id="ciiu-4" type="text">
                                            <label class="form-label" for="ciiu-4">C&oacute;digo CIIU</label>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-md-4">
                                        <div class="form-outline">
                                            <input class="form-control actividad-4" name="actividad-4" id="actividad-4" type="text" disabled>
                                            <label class="form-label" for="actividad-4">Actividad</label>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-md-2">
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
                            <p class="titulo-2 mt-2">Formas de Organizaci&oacute;n Jur&iacute;dica</p>

                            <div class="col-xs-12 col-md-4">
                                <div class="form-floating organizacionJuridica">
                                    <select class="form-select" id="organizacionJuridica" aria-label="Floating label select example">
                                        <option value="0" selected>Seleccione una opci&oacute;n</option>
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
                                    <!-- <label for="organizacionJuridica">Organizaci&oacute;n Jur&iacute;dica</label> -->
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="form-outline">
                                    <input class="form-control organizacionJuridica-1" type="text" name="organizacionJuridica-1" id="organizacionJuridica-1" disabled>
                                    <label class="form-label" for="organizacionJuridica-1">Escriba el tipo si no está listado</label>
                                </div>
                            </div>
                        </div>

                        <!-- Domicilio planta industrial -->
                        <div class="row wrap-domicilioPlantaIndustrial mt-4">
                            
                            <p class="titulo-2 mt-2">Domicilio planta industrial / obrador principal</p>

                            <div class="row row-dpi-domicilio">
                                <div class="col-xs-12 col-md-8">
                                    <div class="form-outline">
                                        <input type="text" name="dpi-txtDomicilio" id="dpi-txtDomicilio" class="form-control dpi-txtDomicilio">
                                        <label for="dpi-txtDomicilio" class="form-label">Domicilio</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mt-2">
                                <div class="col-xs-12 col-md-4">
                                    <div class="form-outline">
                                        <input type="text" class="form-control dpi-localidad" name="dpi-localidad" id="dpi-localidad">
                                        <label for="dpi-localidad" class="form-label">Localidad</label>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-4">
                                    <div class="form-outline">
                                        <input type="text" class="form-control dpi-localidad" name="dpi-provincia" id="dpi-provincia">
                                        <label for="dpi-provincia" class="form-label">Provincia</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mt-2">
                                <div class="col-xs-12 col-md-4">
                                    <div class="form-outline">
                                        <input type="text" class="form-control dpi-codPostal" name="dpi-codPostal" id="dpi-codPostal">
                                        <label for="dpi-codPostal" class="form-label">C&oacute;digo postal</label>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-4">
                                    <div class="form-outline">
                                        <input type="text" class="form-control dpi-departamento" name="dpi-departamento" id="dpi-departamento">
                                        <label for="dpi-departamento" class="form-label">Departamento</label>
                                    </div>
                                </div>
                            </div>

                            <!-- ingresos brutos, Hab. Municipal, Fecha -->
                            <div class="row mt-2">
                                <div class="col-xs-12 col-md-3">
                                    <div class="form-outline">
                                        <input type="text" name="codPostalPlanta" id="codPostalPlanta" class="form-control codPostalPlanta">
                                        <label for="codPostalPlanta" class="form-label">Ing. Brutos</label>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-3">
                                    <div class="form-outline">
                                        <input type="text" name="deptoPlanta" id="deptoPlanta" class="form-control deptoPlanta">
                                        <label for="deptoPlanta" class="form-label">Hab. Municipal</label>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-2">
                                    <div class="form-outline">
                                        <input type="text" name="deptoPlanta" id="deptoPlanta" class="form-control deptoPlanta">
                                        <label for="deptoPlanta" class="form-label">Fecha Hab.</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Relacion entre titular y domicilio de planta -->
                        <div class="row wrap-relTitularYDomDeTitular mt-4">
                            <p class="titulo-2 mt-2">Relaci&oacute;n entre el titular y el domicilio de planta</p>

                            <div class="row">
                                <div class="col-xs-12 col-md-9">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary">
                                        <input type="radio" name="opcRelTitDom" id="opcion1" value="Alquiler" autocomplete="off"> Alquiler
                                        </label>
                                        <label class="btn btn-secondary">
                                        <input type="radio" name="opcRelTitDom" id="opcion2" value="Comodato" autocomplete="off"> Comodato
                                        </label>
                                        <label class="btn btn-secondary">
                                        <input type="radio" name="opcRelTitDom" id="opcion3" value="Fiscal" autocomplete="off"> Fiscal
                                        </label>
                                        <label class="btn btn-secondary">
                                        <input type="radio" name="opcRelTitDom" id="opcion4" value="Propiedad" autocomplete="off"> Propiedad
                                        </label>
                                        <label class="btn btn-secondary">
                                        <input type="radio" name="opcRelTitDom" id="opcion5" value="Sucesion" autocomplete="off"> Sucesión
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

                        <div class="row datosDelTitular">
                            <div class="row mb-4">
                                <div class="col-xs-12 col-md-8">
                                    <p class="titulo-1">02- DATOS DEL TITULAR</p>
                                </div>
                            </div>

                            <!-- texto explicativo -->
                            <div class="row">
                                <div class="col-9">
                                    <div class="aclara-1">(Socios Gerente, Gerente General, Otros)</div>
                                </div>
                            </div>

                            <!-- apellido y nombre -->
                            <div class="row mb-2">
                                <div class="col-xs-12 col-md-8">
                                    <div class="form-outline">
                                        <input type="text" id="apellidoYNombre" name="apellidoYNombre" class="form-control" class="apellidoYNombre" />
                                        <label class="form-label" for="apellidoYNombre">Apellido y Nombre</label>
                                    </div>
                                </div>
                            </div>

                            <!-- cuit y telefono -->
                            <div class="row mb-4">
                                <div class="col-xs-12 col-md-4">
                                    <div class="form-outline">
                                        <input type="text" name="cuitTitular" id="cuitTitular" class="form-control cuitTitular">
                                        <label for="cuitTitular" class="form-label">CUIT del Titular</label>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-4">
                                    <div class="form-outline">
                                        <input type="text" name="telefonoTitular" id="telefonoTitular" class="form-control telefonoTitular">
                                        <label for="telefonoTitular" class="form-label">Telefono de contacto</label>
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
                    <div class="row paso-3 transicion-1 sale-derecha fondo-formulario" style="display: none;">
                        <div class="col-xs-12 col-md-8">

                            <div class="row mb-3">
                                <div class="col">
                                    <p class="titulo-1">04- PRODUCTOS</p>
                                </div>
                            </div>

                            <!-- variedad de productos -->
                            <div class="row mb-4 wrap-05VariedadDeProductos">

                                <div class="col-8">
                                    <p class="titulo-2">Variedad total de productos</p>
                                </div>

                                <!-- Variedad de productos -->
                                <div class="row mt-2">
                                    <div class="col-12">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-secondary">
                                            <input type="radio" name="check-variedadProducto" id="variedadProducto1" value="1" autocomplete="off"> 1 - 5
                                            </label>
                                            <label class="btn btn-secondary">
                                            <input type="radio" name="check-variedadProducto" id="variedadProducto1" value="2" autocomplete="off"> 6 - 10
                                            </label>
                                            <label class="btn btn-secondary">
                                            <input type="radio" name="check-variedadProducto" id="variedadProducto1" value="3" autocomplete="off"> 11 - 50
                                            </label>
                                            <label class="btn btn-secondary">
                                            <input type="radio" name="check-variedadProducto" id="variedadProducto1" value="4" autocomplete="off"> +50
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- // variedad de productos -->

                            <!-- nombrar los principales productos -->
                            <div class="row mb-2 wrap-05ListarPrincipalesProductos">
                                <div class="row">
                                    <div class="col">
                                        <p class="titulo-2">
                                            Nombrar los principales productos, obras o servicios industriales y especializados
                                            <br>
                                            <span class="comentario-1">(Los que representan el 70% o más de las ventas respecto al total anual)</span>
                                        </p>
                                    </div>
                                </div>

                                <!-- fila 1 lista principales productos -->
                                <div class="row mb-1">
                                    <!-- denominacion -->
                                    <div class="col-xs-12 col-md-6">
                                        <div class="form-outline">
                                            <input class="form-control listaProductoDenominacion1" type="text" name="listaProductoDenominacion1" id="listaProductoDenominacion1">
                                            <label class="form-label" for="listaProductoDenominacion1">Denominaci&oacute;n</label>
                                        </div>
                                    </div>

                                    <!-- unidad de medida -->
                                    <div class="col-xs-12 col-md-2">
                                        <div class="form-outline">
                                            <input class="form-control listaProductoUnidad1" type="text" name="listaProductoUnidad1" id="listaProductoUnidad1">
                                            <label class="form-label" for="listaProductoUnidad1">Unidad de medida</label>
                                        </div>
                                    </div>

                                    <!-- cantindad -->
                                    <div class="col-xs-12 col-md-2">
                                        <div class="form-outline">
                                            <input class="form-control listaProductoCantidad1" type="text" name="listaProductoCantidad1" id="listaProductoCantidad1">
                                            <label class="form-label" for="listaProductoCantidad1">Cantidad</label>
                                        </div>
                                    </div>

                                    <!-- % participacion -->
                                    <div class="col-xs-12 col-md-2">
                                        <div class="form-outline">
                                            <input class="form-control listaProductoPorcentaje1" type="text" name="listaProductoPorcentaje1" id="listaProductoPorcentaje1">
                                            <label class="form-label" for="listaProductoPorcentaje1">% Partic.</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- fila 2 lista principales productos -->
                                <div class="row mb-1">
                                    <!-- denominacion -->
                                    <div class="col-xs-12 col-md-6">
                                        <div class="form-outline">
                                            <input class="form-control listaProductoDenominacion2" type="text" name="listaProductoDenominacion2" id="listaProductoDenominacion2">
                                            <label class="form-label" for="listaProductoDenominacion2">Denominaci&oacute;n</label>
                                        </div>
                                    </div>

                                    <!-- unidad de medida -->
                                    <div class="col-xs-12 col-md-2">
                                        <div class="form-outline">
                                            <input class="form-control listaProductoUnidad2" type="text" name="listaProductoUnidad2" id="listaProductoUnidad2">
                                            <label class="form-label" for="listaProductoUnidad2">Unidad de medida</label>
                                        </div>
                                    </div>

                                    <!-- cantindad -->
                                    <div class="col-xs-12 col-md-2">
                                        <div class="form-outline">
                                            <input class="form-control listaProductoCantidad2" type="text" name="listaProductoCantidad2" id="listaProductoCantidad2">
                                            <label class="form-label" for="listaProductoCantidad2">Cantidad</label>
                                        </div>
                                    </div>

                                    <!-- % participacion -->
                                    <div class="col-xs-12 col-md-2">
                                        <div class="form-outline">
                                            <input class="form-control listaProductoPorcentaje2" type="text" name="listaProductoPorcentaje2" id="listaProductoPorcentaje2">
                                            <label class="form-label" for="listaProductoPorcentaje2">% Partic.</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- fila 3 lista principales productos -->
                                <div class="row mb-1">
                                    <!-- denominacion -->
                                    <div class="col-xs-12 col-md-6">
                                        <div class="form-outline">
                                            <input class="form-control listaProductoDenominacion3" type="text" name="listaProductoDenominacion3" id="listaProductoDenominacion3">
                                            <label class="form-label" for="listaProductoDenominacion3">Denominaci&oacute;n</label>
                                        </div>
                                    </div>

                                    <!-- unidad de medida -->
                                    <div class="col-xs-12 col-md-2">
                                        <div class="form-outline">
                                            <input class="form-control listaProductoUnidad3" type="text" name="listaProductoUnidad3" id="listaProductoUnidad3">
                                            <label class="form-label" for="listaProductoUnidad3">Unidad de medida</label>
                                        </div>
                                    </div>

                                    <!-- cantindad -->
                                    <div class="col-xs-12 col-md-2">
                                        <div class="form-outline">
                                            <input class="form-control listaProductoCantidad3" type="text" name="listaProductoCantidad3" id="listaProductoCantidad3">
                                            <label class="form-label" for="listaProductoCantidad3">Cantidad</label>
                                        </div>
                                    </div>

                                    <!-- % participacion -->
                                    <div class="col-xs-12 col-md-2">
                                        <div class="form-outline">
                                            <input class="form-control listaProductoPorcentaje3" type="text" name="listaProductoPorcentaje3" id="listaProductoPorcentaje3">
                                            <label class="form-label" for="listaProductoPorcentaje3">% Partic.</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- fila 4 lista principales productos -->
                                <div class="row mb-1">
                                    <!-- denominacion -->
                                    <div class="col-xs-12 col-md-6">
                                        <div class="form-outline">
                                            <input class="form-control listaProductoDenominacion4" type="text" name="listaProductoDenominacion4" id="listaProductoDenominacion4">
                                            <label class="form-label" for="listaProductoDenominacion4">Denominaci&oacute;n</label>
                                        </div>
                                    </div>

                                    <!-- unidad de medida -->
                                    <div class="col-xs-12 col-md-2">
                                        <div class="form-outline">
                                            <input class="form-control listaProductoUnidad4" type="text" name="listaProductoUnidad4" id="listaProductoUnidad4">
                                            <label class="form-label" for="listaProductoUnidad4">Unidad de medida</label>
                                        </div>
                                    </div>

                                    <!-- cantindad -->
                                    <div class="col-xs-12 col-md-2">
                                        <div class="form-outline">
                                            <input class="form-control listaProductoCantidad4" type="text" name="listaProductoCantidad4" id="listaProductoCantidad4">
                                            <label class="form-label" for="listaProductoCantidad4">Cantidad</label>
                                        </div>
                                    </div>

                                    <!-- % participacion -->
                                    <div class="col-xs-12 col-md-2">
                                        <div class="form-outline">
                                            <input class="form-control listaProductoPorcentaje4" type="text" name="listaProductoPorcentaje4" id="listaProductoPorcentaje4">
                                            <label class="form-label" for="listaProductoPorcentaje4">% Partic.</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- fila 5 lista principales productos -->
                                <div class="row mb-1">
                                    <!-- denominacion -->
                                    <div class="col-xs-12 col-md-6">
                                        <div class="form-outline">
                                            <input class="form-control listaProductoDenominacion5" type="text" name="listaProductoDenominacion5" id="listaProductoDenominacion5">
                                            <label class="form-label" for="listaProductoDenominacion5">Denominaci&oacute;n</label>
                                        </div>
                                    </div>

                                    <!-- unidad de medida -->
                                    <div class="col-xs-12 col-md-2">
                                        <div class="form-outline">
                                            <input class="form-control listaProductoUnidad5" type="text" name="listaProductoUnidad5" id="listaProductoUnidad5">
                                            <label class="form-label" for="listaProductoUnidad5">Unidad de medida</label>
                                        </div>
                                    </div>

                                    <!-- cantindad -->
                                    <div class="col-xs-12 col-md-2">
                                        <div class="form-outline">
                                            <input class="form-control listaProductoCantidad5" type="text" name="listaProductoCantidad5" id="listaProductoCantidad5">
                                            <label class="form-label" for="listaProductoCantidad5">Cantidad</label>
                                        </div>
                                    </div>

                                    <!-- % participacion -->
                                    <div class="col-xs-12 col-md-2">
                                        <div class="form-outline">
                                            <input class="form-control listaProductoPorcentaje5" type="text" name="listaProductoPorcentaje5" id="listaProductoPorcentaje5">
                                            <label class="form-label" for="listaProductoPorcentaje5">% Partic.</label>
                                        </div>
                                    </div>
                                </div>
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

                    <!-- PASO 4 ACTIVIDAD -->
                    <div class="paso-4 transicion-1 sale-derecha" style="display: none;">

                        <!-- --------------------------------------------------------------------------------------- -->
                        <!-- CELULAR -->
                        <div class="container d-md-none">
                            <!--  -->

                            <div class="row">
                                <div class="col-12">
                                    <div class="cel-titulo-1">05 - PRODUCCION</div>
                                    <div class="cel-titulo-2">Dimensiones de la planta industrial</div>
                                    <div class="cel-aclara-1">(Especifique las siguientes medidas)</div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <p class="cel-texto-campo-1">Superficie del terreno m<span class="cel-sup">2</span></p>
                                    <input class="form-control" type="text" name="" id="">

                                    <p class="cel-texto-campo-1">Superficie cubierta m<span class="cel-sup">2</span></p>
                                    <input class="form-control" type="text" name="" id="">

                                    <p class="cel-texto-campo-1">Superficie semi-cubierta m<span class="cel-sup">2</span></p>
                                    <input class="form-control" type="text" name="" id="">
                                </div>
                            </div>

                            <hr class="cel-linea-horiz-1">

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
                                        <label class="cel-texto-campo-1" for="nombre-linea">Nombre de línea:</label>
                                        <input type="text" class="form-control" id="nombre-linea" placeholder="Introduce el dato">
                                    </div>
                                    <div class="form-group">
                                        <label class="cel-texto-campo-1" for="unidad-medida">Unidad de medida</label>
                                        <input type="text" class="form-control" id="unidad-medida" placeholder="Introduce el valor">
                                    </div>
                                    <div class="form-group">
                                        <label class="cel-texto-campo-1" for="unidad-medida">Capacidad instalada mensual (a)</label>
                                        <input type="text" class="form-control" id="unidad-medida" placeholder="Introduce el valor">
                                    </div>
                                    <div class="form-group">
                                        <label class="cel-texto-campo-1" for="unidad-medida">Nivel de producción (b)</label>
                                        <input type="text" class="form-control" id="unidad-medida" placeholder="Introduce el valor">
                                    </div>
                                    <div class="form-group">
                                        <label class="cel-texto-campo-1" for="unidad-medida">Aprovechamiento de la capacidad (c)</label>
                                        <input type="text" class="form-control" id="unidad-medida" placeholder="Introduce el valor">
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
                                        <label class="cel-texto-campo-1" for="nombre-linea">Nombre de línea:</label>
                                        <input type="text" class="form-control" id="nombre-linea" placeholder="Introduce el dato">
                                    </div>
                                    <div class="form-group">
                                        <label class="cel-texto-campo-1" for="unidad-medida">Unidad de medida</label>
                                        <input type="text" class="form-control" id="unidad-medida" placeholder="Introduce el valor">
                                    </div>
                                    <div class="form-group">
                                        <label class="cel-texto-campo-1" for="unidad-medida">Capacidad instalada mensual (a)</label>
                                        <input type="text" class="form-control" id="unidad-medida" placeholder="Introduce el valor">
                                    </div>
                                    <div class="form-group">
                                        <label class="cel-texto-campo-1" for="unidad-medida">Nivel de producción (b)</label>
                                        <input type="text" class="form-control" id="unidad-medida" placeholder="Introduce el valor">
                                    </div>
                                    <div class="form-group">
                                        <label class="cel-texto-campo-1" for="unidad-medida">Aprovechamiento de la capacidad (c)</label>
                                        <input type="text" class="form-control" id="unidad-medida" placeholder="Introduce el valor">
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
                                        <label class="cel-texto-campo-1" for="nombre-linea">Nombre de línea:</label>
                                        <input type="text" class="form-control" id="nombre-linea" placeholder="Introduce el dato">
                                    </div>
                                    <div class="form-group">
                                        <label class="cel-texto-campo-1" for="unidad-medida">Unidad de medida</label>
                                        <input type="text" class="form-control" id="unidad-medida" placeholder="Introduce el valor">
                                    </div>
                                    <div class="form-group">
                                        <label class="cel-texto-campo-1" for="unidad-medida">Capacidad instalada mensual (a)</label>
                                        <input type="text" class="form-control" id="unidad-medida" placeholder="Introduce el valor">
                                    </div>
                                    <div class="form-group">
                                        <label class="cel-texto-campo-1" for="unidad-medida">Nivel de producción (b)</label>
                                        <input type="text" class="form-control" id="unidad-medida" placeholder="Introduce el valor">
                                    </div>
                                    <div class="form-group">
                                        <label class="cel-texto-campo-1" for="unidad-medida">Aprovechamiento de la capacidad (c)</label>
                                        <input type="text" class="form-control" id="unidad-medida" placeholder="Introduce el valor">
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
                            <div class="row justify-content-center">
                                <div class="col-10 col-sm-6">
                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-light">
                                        <i class="fas fa-chevron-left  boton-4-anterior"></i>
                                        </button>
                                        <button class="btn btn-light boton-4-siguiente">
                                        <i class="fas fa-chevron-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- botonera -->
                        </div>
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
                                <div class="row d-none">
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

                            <!-- botonera -->
                            <div class="row justify-content-center">
                                <div class="col-10 col-sm-6">
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
                            <!-- botonera -->
                        </div>
                        <!-- // CELULAR -->
                        <!-- --------------------------------------------------------------------------------------- -->
                    </div>
                    <!-- // PASO 5 -->

                    <!-- PASO 6 -->
                    <div class="row paso-6 transicion-1 sale-derecha" style="display: none;">
                        <div class="col-xs-12 col-md-8">
                            <!-- titulo: 06- produccion -->
                            <div class="row mb-3">
                                <div class="col-12">
                                    <p class="titulo-1">06- PRODUCCION</p>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <p class="titulo-2">PROCESO DE PRODUCCION</p>
                                </div>
                            </div>

                            <div class="row mb-1">
                                <div class="col">
                                    <p class="titulo-2">
                                        Organizaci&oacute;n de la producci&oacute;n
                                        <span class="comentario-1">¿Qu&eacute; sistema de producci&oacute;n aplica?</span>
                                    </p>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="check-orgProduccion" id="orgProduccion1" value="1">
                                        <label class="form-check-label" for="orgProduccion1">Lote</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="check-orgProduccion" id="orgProduccion2" value="2">
                                        <label class="form-check-label" for="orgProduccion2">A pedido</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="check-orgProduccion" id="orgProduccion3" value="3">
                                        <label class="form-check-label" for="orgProduccion3">En serie</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-1">
                                <div class="col">
                                    <p class="titulo-2">
                                        ¿Cu&aacute;ntas l&iacute;neas de producci&oacute;n posee?
                                        <span class="comentario-1">(Conjunto de operaciones de fabricación destinadas a lograr un producto)</span>
                                    </p>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <input class="form-control" type="number" name="cantLineaProduccion" id="cantLineaProduccion" min="1" max="100" step="1" value="1">
                                        <label class="form-label" for="cantLineaProduccion">Denominaci&oacute;n</label>
                                    </div>
                                </div>
                            </div>

                            <!-- BOTONES PASO 6 -->
                            <div class="row justify-content-evenly">
                                <div class="col">
                                    <button type="button" class="btn btn-primary mb-4 boton-6-anterior">... Anterior</button>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-primary mb-4 boton-6-siguiente">Siguiente ...</button>
                                </div>
                            </div>
                            <!-- BOTONES PASO 6 -->
                        </div>
                    </div>
                    <!-- // PASO 6 -->

                    <!-- PASO 7 COMERCIALIZACION -->
                    <div class="row mb-4 paso-7 transicion-1 sale-derecha" style="display: none;">
                        <div class="col-xs-12 col-md-8">
                            <div class="row mb-3">
                                <div class="col">
                                    <p class="titulo-1">07- COMERCIALIZACION</p>
                                </div>
                            </div>

                            <div class="row mb-1">
                                <div class="col">
                                    <p class="titulo-2">
                                        Mercado
                                        <span class="comentario-1">(Destino geogr&aacute;fico de los productos vendidos)</span>
                                    </p>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="check-comerMercado" id="comerMercado1" value="1">
                                        <label class="form-check-label" for="comerMercado1">Misma localidad</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="check-comerMercado" id="comerMercado2" value="2">
                                        <label class="form-check-label" for="comerMercado2">Departamental</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="check-comerMercado" id="comerMercado3" value="3">
                                        <label class="form-check-label" for="comerMercado3">Capital Fsa.</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="check-comerMercado" id="comerMercado4" value="4">
                                        <label class="form-check-label" for="comerMercado4">Provincial</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="check-comerMercado" id="comerMercado5" value="5">
                                        <label class="form-check-label" for="comerMercado5">Regional</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="check-comerMercado" id="comerMercado6" value="6">
                                        <label class="form-check-label" for="comerMercado6">Nacional</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="check-comerMercado" id="comerMercado7" value="7">
                                        <label class="form-check-label" for="comerMercado7">Internacional</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col">
                                    <p class="titulo-2">
                                        Clientes
                                        <span class="comentario-1">(Escriba la cantidad aproximada por tipo de cliente, un campo cero o sin dato se considera que no comercializa con ese tipo de cliente)</span>
                                    </p>
                                </div>
                            </div>

                            <!-- cantidad por tipo de cliente -->
                            <div class="row mb-3">
                                <div class="col-12 mb-2">
                                    <div class="form-outline">
                                        <input class="form-control" type="number" name="cantLineaProduccion" id="cantLineaProduccion" min="1" step="1" value="0">
                                        <label class="form-label" for="cantLineaProduccion">Cons. Final</label>
                                    </div>
                                </div>
                                <div class="col-6 mb-2">
                                    <div class="form-outline">
                                        <input class="form-control" type="number" name="cantLineaProduccion" id="cantLineaProduccion" min="1" step="1" value="0">
                                        <label class="form-label" for="cantLineaProduccion">Emp. Minorista</label>
                                    </div>
                                </div>
                                <div class="col-6 mb-2">
                                    <div class="form-outline">
                                        <input class="form-control" type="number" name="cantLineaProduccion" id="cantLineaProduccion" min="1" step="1" value="0">
                                        <label class="form-label" for="cantLineaProduccion">Emp. Mayorista</label>
                                    </div>
                                </div>
                                <div class="col-4 mb-2">
                                    <div class="form-outline">
                                        <input class="form-control" type="number" name="cantLineaProduccion" id="cantLineaProduccion" min="1" step="1" value="0">
                                        <label class="form-label" for="cantLineaProduccion">Gob. Municipal</label>
                                    </div>
                                </div>
                                <div class="col-4 mb-2">
                                    <div class="form-outline">
                                        <input class="form-control" type="number" name="cantLineaProduccion" id="cantLineaProduccion" min="1" step="1" value="0">
                                        <label class="form-label" for="cantLineaProduccion">Gob. Provincial</label>
                                    </div>
                                </div>
                                <div class="col-4 mb-2">
                                    <div class="form-outline">
                                        <input class="form-control" type="number" name="cantLineaProduccion" id="cantLineaProduccion" min="1" step="1" value="0">
                                        <label class="form-label" for="cantLineaProduccion">Gob. Nacional</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-outline">
                                        <input class="form-control" type="number" name="cantLineaProduccion" id="cantLineaProduccion" min="1" step="1" value="0">
                                        <label class="form-label" for="cantLineaProduccion">Otro</label>
                                    </div>
                                </div>
                            </div>

                            <!-- BOTONES PASO 6 -->
                            <div class="row justify-content-evenly">
                                <div class="col">
                                    <button type="button" class="btn btn-primary mb-4 boton-7-anterior">... Anterior</button>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-primary mb-4 boton-7-siguiente">Siguiente ...</button>
                                </div>
                            </div>
                            <!-- BOTONES PASO 6 -->
                        </div>
                    </div>
                    <!-- // PASO 7 COMERCIALIZACION -->

                    <!-- PASO 8 ADMINISTRACION -->
                    <div class="row mb-4 paso-8 transicion-1" style="display: none;">
                        <div class="col-xs-12 col-md-8">
                            <div class="row mb-3">
                                <div class="col">
                                    <p class="titulo-1">08- ADMINISTRACION</p>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col">
                                    <p class="titulo-2">RECURSOS HUMANOS</p>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col">
                                    <p class="titulo-3">Cantidad de miembros de la empresa</p>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-xs-6 col-md-3">
                                    <div class="form-outline">
                                        <input class="form-instr form-control dihm-tooltip" type="number" name="rrhhTotal" id="rrhhTotal" min="1" step="1" value="0">
                                        <label class="form-label" for="rrhhTotal">Total</label>
                                        <span class="dihm-tooltip bottom">
                                            <span class="dihm-tiptext">Texto del tooltip</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-md-3">
                                    <div class="form-outline">
                                        <input class="form-control" type="number" name="rrhhTotalFlia" id="rrhhTotalFlia" min="1" step="1" value="0">
                                        <label class="form-label" for="rrhhTotalFlia">¿Cuantos son miembros de la familia?</label>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-md-3">
                                    <div class="form-outline">
                                        <input class="form-control" type="number" name="rrhhTotalFlia" id="rrhhTotalFlia" min="1" step="1" value="0">
                                        <label class="form-label" for="rrhhTotalFlia">Propietarios</label>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-md-3">
                                    <div class="form-outline">
                                        <input class="form-control" type="number" name="rrhhTotalFlia" id="rrhhTotalFlia" min="1" step="1" value="0">
                                        <label class="form-label" for="rrhhTotalFlia">Accionistas</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // PASO 8 ADMINISTRACION -->
                </form>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
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
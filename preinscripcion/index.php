<?php
    session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Pre Inscripci&oacute;n</title>

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
    <script src="https://kit.fontawesome.com/4c72def62b.js" crossorigin="anonymous"></script>

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400;0,500;0,600;0,700;1,500;1,700&family=Roboto+Slab:wght@300&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

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
    <section>
        <div class="container">
            <div class="row mb-4">
                <div class="col-xs-12 col-md-8">
                    <p class="h2">Inicio de tramite al registro de industria</p>
                </div>
            </div>

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
                        </div>

                        <!-- ACTIVIDADES -->
                        <div class="row actividades">
                            <p class="titulo-2 mt-2">Actividades</p>

                            <div class="row mb-2 allActividades">

                                <p class="titulo-2">Actividad principal <span class="comentario-1">(Especificar actividad principal)</span></p>

                                <!-- actividad 1 -->
                                <div class="row wrap-actividad-1 mb-4">
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
                                <div class="row wrap-actividad-2 mb-2">
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
                                <div class="row wrap-actividad-3 mb-2">
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
                                <div class="row wrap-actividad-3 mb-2">
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
                                <div class="col">
                                    <a href="#" class="agregarActividad" onclick="javascript:alert('En breve podra agregar mas actividades, nosotros le avisaremos cuando.');">Agregar actividad</a>
                                </div>
                            </div>
                        </div>

                        <!-- ORGANIZACION JURIDICA -->
                        <div class="row wrap-organizacionJuridica">
                            <p class="titulo-2 mt-2">Organizaci&oacute;n Jur&iacute;dica</p>

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
                                    <label for="organizacionJuridica">Organizaci&oacute;n Jur&iacute;dica</label>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="form-outline">
                                    <input class="form-control organizacionJuridica-1" type="text" name="organizacionJuridica-1" id="organizacionJuridica-1" disabled>
                                    <label class="form-label" for="organizacionJuridica-1">Escriba el tipo si no está listado</label>
                                </div>
                            </div>
                        </div>

                        <!-- BOTONES -->
                        <div class="row justify-content-evenly mt-4">
                            <div class="col-4">
                            <button type="button" class="btn btn-secondary mb-4" onclick="window.location.href='../inicio'">Salir</button>
                            </div>
                            <div class="col-4">
                                <button type="button" class="btn btn-primary mb-4 boton-1">Siguiente ...</button>
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

                            <!-- titulo nivel 2 -->
                            <div class="row mb-2">
                                <div class="col-xs 12">
                                    <p class="titulo-2">DOMICILIO LEGAL DE LA EMPRESA</p>
                                </div>
                            </div>

                            <!-- domicilio Empresa -->
                            <div class="row mb-2">
                                <div class="col-xs 12 col-md-8">
                                    <div class="form-outline">
                                        <input type="text" name="domicilioEmpresa" id="domicilioEmpresa" class="form-control domicilioEmpresa">
                                        <label for="domicilioEmpresa" class="form-label">Domicilio</label>
                                    </div>
                                </div>
                            </div>

                            <!-- provincia y localidad -->
                            <div class="row mb-2">
                                <div class="col-xs 12 col-md-4">
                                    <div class="form-outline">
                                        <input type="text" name="provinciaEmpresa" id="provinciaEmpresa" class="form-control provinciaEmpresa">
                                        <label for="provinciaEmpresa" class="form-label">Provincia</label>
                                    </div>
                                </div>
                                <div class="col-xs 12 col-md-4">
                                    <div class="form-outline">
                                        <input type="text" name="LocalidadEmpresa" id="LocalidadEmpresa" class="form-control LocalidadEmpresa">
                                        <label for="LocalidadEmpresa" class="form-label">Localidad</label>
                                    </div>
                                </div>
                            </div>

                            <!-- codigo postal, departamento y telefono -->
                            <div class="row mb-2">
                                <div class="col-xs 12 col-md-2">
                                    <div class="form-outline">
                                        <input type="text" name="codPostalEmpresa" id="codPostalEmpresa" class="form-control codPostalEmpresa">
                                        <label for="codPostalEmpresa" class="form-label">C&oacute;digo Postal</label>
                                    </div>
                                </div>
                                <div class="col-xs 12 col-md-3">
                                    <div class="form-outline">
                                        <input type="text" name="deptoEmpresa" id="deptoEmpresa" class="form-control deptoEmpresa">
                                        <label for="deptoEmpresa" class="form-label">Departamento</label>
                                    </div>
                                </div>
                                <div class="col-xs 12 col-md-3">
                                    <div class="form-outline">
                                        <input type="text" name="telEmpresa" id="telEmpresa" class="form-control telEmpresa">
                                        <label for="telEmpresa" class="form-label">Tel&eacute;fono</label>
                                    </div>
                                </div>
                            </div>

                            <!-- email Empresa -->
                            <div class="row mb-4">
                                <div class="col-xs 12 col-md-8">
                                    <div class="form-outline">
                                        <input type="email" name="emailEmpresa" id="emailEmpresa" class="form-control emailEmpresa">
                                        <label for="emailEmpresa" class="form-label">Email</label>
                                    </div>
                                </div>
                            </div>

                            <!-- titulo nivel 2 -->
                            <div class="row mb-2">
                                <div class="col-xs 12">
                                    <p class="titulo-2">
                                        DOMICILIO DE PLANTA INDUSTRIAL / OBRADOR PRINCIPAL
                                        <span class="comentario-1">(Donde desarrolla el proceso de manufactura / Si es diferente al domicilio legal)</span>
                                    </p>
                                </div>
                            </div>

                            <!-- domicilio planta -->
                            <div class="row mb-2">
                                <div class="col-xs 12 col-md-8">
                                    <div class="form-outline">
                                        <input type="text" name="domicilioPlanta" id="domicilioPlanta" class="form-control domicilioPlanta">
                                        <label for="domicilioPlanta" class="form-label">Domicilio</label>
                                    </div>
                                </div>
                            </div>

                            <!-- provincia y localidad -->
                            <div class="row mb-2">
                                <div class="col-xs 12 col-md-4">
                                    <div class="form-outline">
                                        <input type="text" name="provinciaPlanta" id="provinciaPlanta" class="form-control provinciaPlanta">
                                        <label for="provinciaPlanta" class="form-label">Provincia</label>
                                    </div>
                                </div>
                                <div class="col-xs 12 col-md-4">
                                    <div class="form-outline">
                                        <input type="text" name="localidadPlanta" id="localidadPlanta" class="form-control localidadPlanta">
                                        <label for="localidadPlanta" class="form-label">Localidad</label>
                                    </div>
                                </div>
                            </div>

                            <!-- codigo postal, departamento -->
                            <div class="row mb-4">
                                <div class="col-xs 12 col-md-2">
                                    <div class="form-outline">
                                        <input type="text" name="codPostalPlanta" id="codPostalPlanta" class="form-control codPostalPlanta">
                                        <label for="codPostalPlanta" class="form-label">C&oacute;digo Postal</label>
                                    </div>
                                </div>
                                <div class="col-xs 12 col-md-4">
                                    <div class="form-outline">
                                        <input type="text" name="deptoPlanta" id="deptoPlanta" class="form-control deptoPlanta">
                                        <label for="deptoPlanta" class="form-label">Departamento</label>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- //datosDelTitular --> 

                        <!-- BOTONES -->
                        <div class="row justify-content-evenly mt-4">
                            <div class="col-4">
                            <button type="button" class="btn btn-primary mb-4 boton-2-anterior">... Anterior</button>
                            </div>
                            <div class="col-4">
                                <button type="button" class="btn btn-primary mb-4 boton-2-siguiente">Siguiente ...</button>
                            </div>
                        </div> 
                        <!-- //BOTONES -->
                    </div>
                    <!-- // PASO 2  -->

                    <!-- PASO 3 DATOS DEL REPRESENTANTE -->
                    <div class="paso-3 transicion-1 sale-derecha" style="display: none;">
                        <div class="row mb-4">
                            <div class="col-xs-12 col-md-8">
                                <!-- DATOS DEL REPRESENTANTE -->
                                <div class="row datosDelRepresentante">
                                    <div class="row mb-4">
                                        <div class="col-xs-12 col-md-8">
                                            <p class="titulo-1">
                                                03- DATOS DEL REPRESENTANTE
                                                <span class="comentario-1">(si corresponde)</span>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-xs-12 col-md-8">
                                            <p class="titulo-2">
                                                Relación con la Empresa
                                            </p>
                                        </div>
                                    </div>

                                    <!-- relacion con la empresa -->
                                    <div class="row mb-2 wrap-relacionConLaEmpresa">
                                        <div class="col-xs-12 col-md-12">
                                            <div class="row mb-2">
                                                <div class="col-xs-12 col-md-12">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="check-relacionConLaEmpresa" id="relacionConLaEmpresa1" value="1">
                                                        <label class="form-check-label" for="relacionConLaEmpresa1">Gestor</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="check-relacionConLaEmpresa" id="relacionConLaEmpresa2" value="2">
                                                        <label class="form-check-label" for="relacionConLaEmpresa2">Apoderado</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="check-relacionConLaEmpresa" id="relacionConLaEmpresa3" value="3">
                                                        <label class="form-check-label" for="relacionConLaEmpresa3">Administrador</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input relacionConLaEmpresa100" type="radio" name="check-relacionConLaEmpresa" id="relacionConLaEmpresa100" value="100">
                                                        <label class="form-check-label" for="relacionConLaEmpresa100">Otro</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- campo otro input -->
                                            <div class="row">
                                                <div class="col-xs-12 col-md-12">
                                                    <div class="form-outline">
                                                        <input type="text" id="relacionEmpresaOtro" class="form-control relacionEmpresaOtro" disabled/>
                                                        <label class="form-label" for="relacionEmpresaOtro">Otro tipo de relaci&oacute;n</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- apellido y nombre del representante -->
                                    <div class="row mb-2 wrap-nombreRepresentante">
                                        <div class="col-xs-12 col-md-12">
                                            <div class="form-outline">
                                                <input type="text" name="nombreRepresentante" id="nombreRepresentante" class="form-control nombreRepresentante">
                                                <label class="form-label" for="nombreRepresentante">Apellido y Nombre del representante</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- domicilio del representante -->
                                    <div class="row mb-2 wrap-domicilioRepresentante">
                                        <div class="col-xs-12 col-md-12">
                                            <div class="form-outline">
                                                <input type="text" name="domicilioRepresentante" id="domicilioRepresentante" class="form-control domicilioRepresentante">
                                                <label class="form-label" for="domicilioRepresentante">Domicilio del representante</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- provincia, localidad, CP -->
                                    <div class="row mb-2 wrap-provLocCodPostalRepresentante">
                                        <div class="col-xs-12 col-md-4">
                                            <div class="form-outline">
                                                <input type="text" name="provinciaRepresentante" id="provinciaRepresentante" class="form-control provinciaRepresentante">
                                                <label class="form-label" for="provinciaRepresentante">Provincia</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-4">
                                            <div class="form-outline">
                                                <input type="text" name="localidadRepresentante" id="localidadRepresentante" class="form-control localidadRepresentante">
                                                <label class="form-label" for="localidadRepresentante">Localidad</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-4">
                                            <div class="form-outline">
                                                <input type="text" name="codPostalRepresentante" id="codPostalRepresentante" class="form-control codPostalRepresentante">
                                                <label class="form-label" for="codPostalRepresentante">C&oacute;digo Postal</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Depto, Telefono, Email -->
                                    <div class="row mb-4 wrap-deptoTelEmailRepresentante">
                                        <div class="col-xs-12 col-md-4">
                                            <div class="form-outline">
                                                <input type="text" name="deptoRepresentante" id="deptoRepresentante" class="form-control deptoRepresentante">
                                                <label class="form-label" for="deptoRepresentante">Departamento</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-4">
                                            <div class="form-outline">
                                                <input type="text" name="telefonoRepresentante" id="telefonoRepresentante" class="form-control telefonoRepresentante">
                                                <label class="form-label" for="telefonoRepresentante">Telefono</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-4">
                                            <div class="form-outline">
                                                <input type="text" name="emailRepresentante" id="emailRepresentante" class="form-control emailRepresentante">
                                                <label class="form-label" for="emailRepresentante">Email</label>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- DATOS DEL REPRESENTANTE --> 

                                <!-- BOTONES PASO 3 -->
                                <div class="row justify-content-evenly mt-4">
                                    <div class="col-4">
                                        <button type="button" class="btn btn-primary mb-4 boton-3-anterior">... Anterior</button>
                                    </div>
                                    <div class="col-4">
                                        <button type="button" class="btn btn-primary mb-4 boton-3-siguiente">Siguiente ...</button>
                                    </div>
                                </div> 
                                <!-- // BOTONES PASO 3 -->
                            </div>
                        </div>
                    </div>
                    <!-- // PASO 3 --> 

                    <!-- PASO 4 ACTIVIDAD -->
                    <div class="paso-4 transicion-1 sale-derecha" style="display: none;">
                        <div class="row mb-4">
                            <div class="col-xs-12 col-md-8">
                                <div class="row actividad">
                                    <div class="col-xs-12 col-md-8">
                                        <p class="titulo-1">
                                            04- ACTIVIDAD
                                        </p>
                                    </div>

                                    <!-- rubro al que pertenece -->
                                    <div class="row mb-1">
                                        <div class="col">
                                            <p class="titulo-2">
                                                Rubro al que pertenece
                                            </p>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col">
                                            <div>
                                                <table>
                                                    <tr>
                                                        <td>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="check-rubroActividad" id="rubroActividad1" value="1">
                                                            <label class="form-check-label" for="rubroActividad">Agroindustrial</label>
                                                        </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="check-rubroActividad" id="rubroActividad2" value="2">
                                                                <label class="form-check-label" for="rubroActividad">Forestoindustrial</label>
                                                            </div>
                                                        </td>
                                                        <td>   
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="check-rubroActividad" id="rubroActividad100" value="100">
                                                                <label class="form-check-label" for="rubroActividad100">Otro</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <input class="form-control rubroActividadOtro" type="text" name="rubroActividadOtro" id="rubroActividadOtro" style="width: 100%;" disabled>
                                                        </td>
                                                    </tr>
                                                </table>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <!-- tipo de actividadd -->
                                    <div class="row mb-1">
                                        <div class="col">
                                            <p class="titulo-2">
                                                Tipo de actividad
                                            </p>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col">
                                                <div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="check-tipoActividad" id="tipoActividad1" value="1">
                                                        <label class="form-check-label" for="tipoActividad1">Manufactura</label>
                                                    </div>
                                                           
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="check-tipoActividad" id="tipoActividad2" value="2">
                                                        <label class="form-check-label" for="tipoActividad2">Construcci&oacute;n</label>
                                                    </div>
                                                            
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="check-tipoActividad" id="tipoActividad3" value="3">
                                                        <label class="form-check-label" for="tipoActividad3">Miner&iacute;a</label>
                                                    </div>
                                                            
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="check-tipoActividad" id="tipoActividad4" value="4">
                                                        <label class="form-check-label" for="tipoActividad">Hidrocarburo</label>
                                                    </div>
                                                            
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="check-tipoActividad" id="tipoActividad5" value="5">
                                                        <label class="form-check-label" for="tipoActividad5">Econom&iacute;a del conocimiento</label>
                                                    </div>
                                                            
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="check-tipoActividad" id="tipoActividad6" value="6">
                                                        <label class="form-check-label" for="tipoActividad6">Servicios industriales y especializados</label>
                                                    </div>
                                                            
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="check-tipoActividad" id="tipoActividad100" value="100">
                                                        <label class="form-check-label" for="tipoActividad100">Otro</label>
                                                    </div>
                                                </div>

                                                <div>
                                                    <input class="form-control tipoActividadOtro" type="text" name="tipoActividadOtro" id="tipoActividadOtro" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- BOTONES PASO 4 -->
                                <div class="row justify-content-evenly mt-4">
                                    <div class="col-4">
                                        <button type="button" class="btn btn-primary mb-4 boton-4-anterior">... Anterior</button>
                                    </div>
                                    <div class="col-4">
                                        <button type="button" class="btn btn-primary mb-4 boton-4-siguiente">Siguiente ...</button>
                                    </div>
                                </div> 
                                <!-- // BOTONES PASO 4 -->
                            </div>
                        </div>
                    </div>
                    <!-- // PASO 4 -->

                    <!-- PASO 5 PRODUCTOS -->
                    <row class="paso-5 transicion-1 sale-derecha" style="display: none;">
                        <div class="col-xs-12 col-md-8">
                            <div class="row mb-3">
                                <div class="col">
                                    <p class="titulo-1">05- PRODUCTOS</p>
                                </div>
                            </div>

                            <!-- variedad de productos -->
                            <div class="row mb-2 wrap-05VariedadDeProductos">
                                <div class="col-4">
                                    <p class="titulo-2">Variedad total de productos</p>
                                </div>
                                
                                <div class="col-8">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="check-variedadProducto" id="variedadProducto1" value="1">
                                        <label class="form-check-label" for="variedadProducto1">1 - 5</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="check-variedadProducto" id="variedadProducto2" value="2">
                                        <label class="form-check-label" for="variedadProducto2">6 - 10</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="check-variedadProducto" id="variedadProducto3" value="3">
                                        <label class="form-check-label" for="variedadProducto3">11 - 50</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="check-variedadProducto" id="variedadProducto4" value="4">
                                        <label class="form-check-label" for="variedadProducto4">+50</label>
                                    </div>
                                </div>
                            </div>

                            <!-- listar los principales productos -->
                            <div class="row mb-2 wrap-05ListarPrincipalesProductos">
                                <div class="row">
                                    <div class="col">
                                        <p class="titulo-2">
                                            Nombrar los principales productos, obras o servicios industriales y especializados
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

                             <!-- BOTONES PASO 5 -->
                            <div class="row justify-content-evenly mt-4">
                                <div class="col-4">
                                    <button type="button" class="btn btn-primary mb-4 boton-5-anterior">... Anterior</button>
                                </div>
                                <div class="col-4">
                                    <button type="button" class="btn btn-primary mb-4 boton-5-siguiente">Siguiente ...</button>
                                </div>
                            </div> 
                            <!-- // BOTONES PASO 5 -->
                        </div>
                    </row>
                    <!-- // PASO 5 -->

                    <!-- PASO 6 PRODUCCION -->
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
                    <!-- // PASO 6 PRODUCCION -->

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

    <article>
        <section>
            
        </section>
    </article>

    
    

    
    <!-- Jquery -->
    <script src="https://cdn-www.formosa.gob.ar/js/jquery.min.js"></script>
	<script src="https://cdn-www.formosa.gob.ar/js/jquery-migrate-1.2.1.js"></script>
	<script src="https://cdn-www.formosa.gob.ar/js/jquery-ui.min.js"></script>
    <script src="https://cdn-www.formosa.gob.ar/js/bootstrap-datepicker.js"></script>

    <!-- Bootstrap 5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#fecha').datepicker({
                format: 'dd/mm/yyyy'
            });
        });
    </script>
    <script src="preinscripcion.js"></script>
</body>
</html>
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
</head>
<body>
    <section>
        <div class="container">
            <h1>Pre-Inscripci&oacute;n</h1>
            <div>
                

                <form action="">

                    <p class="titulo-1">ORDENAMIENTO JURIDICO</p>

                    <!-- ORDENAMIENTO JURIDICO -->
                    <div class="row mb-2 ordenamiento_juridico">
                        <div class="col-4">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" />
                                <label class="form-check-label" for="inlineRadio1">Persona humana</label>
                            </div>
                        </div>
                        
                        <div class="col-4">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                                <label class="form-check-label" for="inlineRadio2">Persona jurídica</label>
                            </div>
                        </div>
                    </div>

                    <!-- DATOS DE LA EMPRESA -->
                    <div class="row datosDeLaEmpresa">
                        <p class="h3">01- DATOS DE LA EMPRESA</p>

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
                        <p class="h4 mt-2">Actividades</p>

                        <div class="row mb-2 allActividades">

                            <p class="h5">Actividad principal <span class="comentario-1">(Especificar actividad principal)</span></p>

                            <!-- actividad 1 -->
                            <div class="row wrap-actividad-1 mb-2">
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

                            <p class="h5 mt-2">Otras Actividades <span class="comentario-1">(Actividades consideradas secundarias)</span></p>

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
                        <p class="h4 mt-2">Organizaci&oacute;n Jur&iacute;dica</p>

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
                        <button type="submit" class="btn btn-secondary mb-4">Salir</button>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary mb-4">Siguiente ...</button>
                        </div>
                    </div>
                        
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
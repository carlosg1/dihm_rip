<?php
    session_name('dihm420');
    session_start();

    // cuando vence la sesion va al login
    if(!isset($_SESSION['token'])) {
        header('location: ../');
    } 
//    var_dump($_SESSION);

    require_once "../../include/obj_conexion.php";

    function sel_sector_industrial($conexion) {
        $result = $conexion->query("SELECT * FROM `sys_dihm_01_sector_industrial`;");

        if ($result === false) {
            echo '<option value="' . '-1' . '">' . 'Error de lectura' . '</option>';
        } else {
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // Acceder a los valores de la fila
                    $id = $row["codigo_sector"];
                    $nombre = utf8_encode($row["sector_industrial"]);

                    // Hacer algo con los valores
                    echo '<option value="' . $id . '">' . $nombre . '</option>';
                }
            } else {
                echo '<option value="' . '0' . '">' . 'No se encontraron resultados.' . '</option>';
            }
        }
        // Liberar la memoria asociada al resultado
        unset($id, $nombre);
        $result->free_result();
    }

?><!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Alta x Relevamiento</title>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="keywords" content="dihm, dirección de industria hidrocarburo y mineria, formosa tu ciudad, hidrocarburo, mineria, registro de industria">
        <meta name="description" content="Información institucional, consultas, trámites, registro de industria">
        <meta name="robots" content="FOLLOW,INDEX">
        <meta name="author" content="Gobierno de la Provincia de Formosa">

        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <div class="container">
            <div class="row py-3">
                <div class="col">
                    <p class="h2">Alta por relevamiento</p>
                    <p class="h4">Usuario: <?php echo $_SESSION['apellido'] . ', ' . $_SESSION['nombre']; ?></p>
                </div>
            </div>
        </div>

        <div class="container mb-3">
            <div class="row">
                <div class="col">
                    <div class="card rounded" style="border: solid 1px #859222;">
                        <div class="card-body">
                            <h5 class="card-title">Carga de datos</h5>
                            <p class="card-text">
                                Ingrese los datos de los siguientes campos, luego toque el boton <strong>Guardar</strong>
                            </p>
                            <form>
                                <!-- fecha relevamiento -->
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="fechaReleva" class="col-sm-4 col-form-label">Fecha relevamiento</label>
                                        <input type="date" class="form-control fechaReleva" id="fechaReleva" name="fechaReleva" placeholder="dd/mm/aaaa">
                                    </div>
                                </div>
                                <dov class="row mt-5">
                                    <div class="col-12">
                                        <p class="h3">Datos de la empresa</p>
                                    </div>
                                </dov>
                                <!-- cuit / cuil / dni -->
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="cuit" class="col-sm-4 col-form-label">CUIT / CUIL/ DNI</label>
                                        <input type="number" class="form-control nombreEmpresa" id="cuit" name="cuit" title="CUIT / CUIL / DNI">
                                    </div>
                                </div>
                                <!-- razon social -->
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="razon_social" class="col-sm-4 col-form-label">Raz&oacute;n Social</label>
                                        <input type="text" class="form-control razon_social" id="razon_social" name="razon_social" title="Raz&oacute;n Social">
                                    </div>
                                </div>
                                <!-- sector industrial -->
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="sector_industrial" class="col-sm-4 col-form-label">Rubro</label>
                                        <select name="sector_industrial" id="sector_industrial" class="form-select" title="Sector industrial">
                                            <?php sel_sector_industrial($conDB); ?> 
                                        </select>
                                    </div>
                                </div>
                                <!-- domicilio -->
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="domicilio" class="col-sm-4 col-form-label">Domicilio</label>
                                        <input type="text" class="form-control domicilio" id="domicilio" name="domicilio" title="Domicilio">
                                    </div>
                                </div>
                                <!-- telefono -->
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="telefono" class="col-sm-4 col-form-label">Telefono</label>
                                        <input type="number" class="form-control telefono" id="telefono" name="telefono" title="Telefono">
                                    </div>
                                </div>
                                <!-- email -->
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="email" class="col-sm-4 col-form-label">email</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                </div>
                                <!-- nombre y apellido del contacto -->
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="nombreContacto" class="col-sm-4 col-form-label">Nombre y Apellido del contacto</label>
                                        <input type="text" class="form-control nombreContacto" id="nombreContacto" name="nombreContacto" title="Nombre y Apellido del contacto">
                                    </div>
                                </div>
                                <!-- dni del contacto -->
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="dniContacto" class="col-sm-4 col-form-label">DNI del contacto</label>
                                        <input type="number" class="form-control" id="dniContacto" name="dniContacto">
                                    </div>
                                </div>
                                <!-- puesto del contacto -->
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="puestoContacto" class="col-sm-4 col-form-label">Puesto del contacto</label>
                                        <input type="text" class="form-control" id="puestoContacto" name="puestoContacto">
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-primary" id="btnGrabaVisita">Grabar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->
        <div class="container fondo70 text-white">
            <div class="py-5">
                <div class="row">
                    <div class="col">
                        Direcci&oacute;n de Industria, Hidrocarburo y Miner&iacute;a
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    </body>
    </html>

    <?php 
        $conDB->close();
    ?>


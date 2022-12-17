<?php 
/**
 * archivo: obj_conexion.php
 * fecha creacion: 20/10/2022
 * fecha actualizacion: 9/12/2022 
 *  conexion utilizando el objeto mysqli
 */

header('Content-Type: text/html; charset=utf-8');

mysqli_report(MYSQLI_REPORT_ERROR ^ MYSQLI_REPORT_STRICT);

require_once('base_de_datos.php');

try {

    $conDB = new mysqli(DIHM_SERVER, DIHM_USER, DIHM_PASSWORD, DIHM_DATABASE);

}
catch(Exception $e) {
    echo 'Excepcion capturada: ', "<br />";

    switch($e->getCode()){
        case 1044:

            echo 'Acceso denegado a la base de datos DIHM, consulte con el Administrador del Sistema';
            break;

            case 1045:

                echo 'Acceso denegado al servidor DIHM, consulte con el Administrador del Sistema';
                break;

            default:

                echo 'Nro: ', $e->getCode(), "\n";

                echo 'Mensaje', $e->getMessage(), "\n";
                break;
    }

    exit;

}

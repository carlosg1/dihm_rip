<?php 

    session_name('dihm');
    session_start();

    header("Content-type: application/json; charset=utf-8");

    require_once('../../include/tablas.php');
    require_once('../../include/obj_conexion.php');

    $datos = $_REQUEST;

    $login = true;

    $data = [
        
        "login"    => $login,
       
    ];

    echo json_encode($data);

    unset($datos);


    exit;

?>


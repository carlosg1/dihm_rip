<?php
include_once "../../include/base_de_datos.php";
include_once "../../include/obj_conexion.php";

// *** FALTA TERMINAR ESTE CODIGO PARA MOSTRAR EL PUNTO 01 DE LA PREINSCRIPCION *** //

// Consulta SQL para obtener los datos de la vista
// $sql = "SELECT * FROM v_cant_empresa_x_localidad";
// $result = $conDB->query($sql);

$stmt_exl = $conDB->prepare('SELECT * FROM v_cant_empresa_x_localidad');
$stmt_exl->execute();
$stmt_exl->store_result();
$stmt_exl->bind_result($localidad, $cantidad);

$datos = array();

  while ($stmt_exl->fetch()) {
    //$loc = array_map('utf8_encode', $localidad);
    //$cant = array_map('utf8_encode', $cantidad);
    $datos[] = [
        'localidad' => $localidad,
        'cantidad' => $cantidad
    ];
  }

// Devolver los datos en formato JSON
echo json_encode(array('data' => $datos));







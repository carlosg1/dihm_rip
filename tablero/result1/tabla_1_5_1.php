<?php
include_once "../../include/base_de_datos.php";
include_once "../../include/obj_conexion.php";

/* BORRAR DESDE ACA */
$datos = array();

$datos[] = ['localidad' => 'Pirane', 'cantidad' => '30' ];
$datos[] = ['localidad' => 'Palo Santo', 'cantidad' => '19' ];
$datos[] = ['localidad' => 'Parque Industrial', 'cantidad' => '5' ];
$datos[] = ['localidad' => 'Capital', 'cantidad' => '4' ];
$datos[] = ['localidad' => 'TOTAL', 'cantidad' => '58' ];

echo json_encode(array('data' => $datos));

exit;

/* BORRAR HASTA ACA */

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







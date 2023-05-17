<?php
// conexion a la base de datos
require_once '../include/base_de_datos.php';
require_once '../include/obj_conexion.php';

// Realiza la consulta a la tabla sys_dihm_01_cab_empresa
$resultado = mysqli_query($conDB, 'SELECT * FROM sys_dihm_01_cab_empresa');

// Prepara el arreglo de resultados
$registros = array();
while ($fila = mysqli_fetch_assoc($resultado)) {
    $registros[] = $fila;
}

// Devuelve los resultados en formato JSON
echo json_encode(array('data' => $registros));

// Cierra la conexión a la base de datos
mysqli_close($conDB);
?>

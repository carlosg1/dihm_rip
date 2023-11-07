<?php
header("Content-type: application/json; charset=utf-8");

// conexion a la base de datos
require_once '../include/base_de_datos.php';
require_once '../include/obj_conexion.php';

// Realiza la consulta a la tabla sys_dihm_01_cab_empresa
/*
$str = "SELECT *
FROM `v_lista_empresa_certificada` `t3`
WHERE ((YEAR(DATE(t3.ano_estado_registro))) = (YEAR(CURRENT_DATE())))";
*/


$str = "SELECT *
FROM `v_lista_empresa_certificada` `t3`
ORDER BY t3.ano_estado_registro DESC";


$resultado = mysqli_query($conDB, $str);


// $resultado = mysqli_query($conDB, 'SELECT * FROM v_lista_empresa_certificada');

// Prepara el arreglo de resultados
$registros = array();
while ($fila = mysqli_fetch_assoc($resultado)) {
    $fila = array_map('utf8_encode', $fila);
    $registros[] = $fila;
}

// Devuelve los resultados en formato JSON
echo json_encode(array('data' => $registros));

// Cierra la conexión a la base de datos
mysqli_close($conDB);
?>

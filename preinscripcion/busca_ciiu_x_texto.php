<?php
// Establecer la conexión con la base de datos
include_once "../include/base_de_datos.php";
include_once "../include/obj_conexion.php";

$valor = (isset($_REQUEST['searchText']) && $_REQUEST['searchText'] != '') ? $_REQUEST['searchText'] : '&&';    

// Realizar la consulta
$sql = "SELECT t1.syspubl01_codigo, t1.syspubl01_desc_corta, t1.syspubl01_desc_larga FROM sys_publ_01_dihm_ciiu_f883 AS t1 WHERE upper(t1.syspubl01_desc_larga) LIKE upper('%$valor%')";
$result = $conDB->query($sql);

$data = array();

// Obtener los datos de la consulta
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Cerrar la conexión
$conn->close();

// Devolver los datos en formato JSON
echo json_encode($data);
?>

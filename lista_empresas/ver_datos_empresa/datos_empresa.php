<?php
include_once "../../include/base_de_datos.php";
include_once "../../include/obj_conexion.php";

// *** FALTA TERMINAR ESTE CODIGO PARA MOSTRAR EL PUNTO 01 DE LA PREINSCRIPCION *** //

// Consulta SQL para obtener los datos de la vista
$sql = "SELECT * FROM v_dihm_lista_full";
$result = $conDB->query($sql);

$stmt_ver_dato = $conDB->prepare('SELECT * FROM v_dihm_lista_full');

$data = array();
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $data[] = $row;
  }
}

// Cerrar conexión
$conn->close();

// Devolver los datos en formato JSON
echo json_encode($data);
?>

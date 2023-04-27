<?php
// Establecemos la conexión con la base de datos
// $host = "localhost";
// $user = "industria_fsa";
// $password = "XbD28Uj8";
// $dbname = "industrias";

// $conexion = mysqli_connect($host, $user, $password, $dbname);

// // Verificamos si se ha producido un error en la conexión
// if (!$conexion) {
//     die("La conexión ha fallado: " . mysqli_connect_error());
// }

header('Content-Type: text/html; charset=utf-8');

$c = isset($_GET['c']) ? $_GET['c'] : '';

include_once('../include/obj_conexion.php');

// Creamos la consulta SQL para obtener los datos de la tabla
$sql = "SELECT syspubl01_desc_larga FROM sys_publ_01_dihm_ciiu_f883 WHERE syspubl01_codigo = '$c'";

// Ejecutamos la consulta SQL y obtenemos los resultados
$resultado = $conDB->query($sql);

// Verificar si la consulta arrojó resultados
if ($resultado->num_rows > 0) {

    $fila = $resultado->fetch_assoc();

} else {

    $fila['syspubl01_desc_larga'] = 'Sin resultado';

}

// Cerramos la conexión con la base de datos
$conDB->close();

echo utf8_encode($fila['syspubl01_desc_larga']);

?>
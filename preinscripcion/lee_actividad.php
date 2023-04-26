<?php
// Establecemos la conexión con la base de datos
$host = "localhost";
$user = "industria_fsa";
$password = "XbD28Uj8";
$dbname = "industrias";

$conexion = mysqli_connect($host, $user, $password, $dbname);

// Verificamos si se ha producido un error en la conexión
if (!$conexion) {
    die("La conexión ha fallado: " . mysqli_connect_error());
}

$c = $_GET['c'];

// Creamos la consulta SQL para obtener los datos de la tabla
$sql = "SELECT syspubl01_desc_larga FROM sys_publ_01_dihm_ciiu_f883 WHERE syspubl01_codigo = '$c'";

// Ejecutamos la consulta SQL y obtenemos los resultados
$resultado = mysqli_query($conexion, $sql);

// Creamos un array para almacenar los resultados
$actividades = array();

$fila = mysqli_fetch_assoc($resultado);

$actividades['descripcion'] = $fila['syspubl01_desc_larga'];


// Iteramos sobre los resultados y los almacenamos en el array
// while ($fila = mysqli_fetch_assoc($resultado)) {
//     $actividades['descripcion'] = $fila['syspubl01_desc_larga'];
// }

// Cerramos la conexión con la base de datos
mysqli_close($conexion);

// Convertimos el array en formato JSON
// $actividades_json = json_encode($actividades);

// Devolvemos el resultado en formato JSON utilizando la función echo de PHP
// echo $actividades_json;

echo $actividades['descripcion'];

?>
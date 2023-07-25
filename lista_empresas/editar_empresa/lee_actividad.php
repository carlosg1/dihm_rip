<?php
session_name('industrias4');
session_start();
header('Content-Type: text/html; charset=utf-8');

if(isset($_REQUEST['codigo'])){
    $c = $_REQUEST['codigo'];
} else {
    if(isset($_GET['codigo']) ){
        $c = $_GET['codigo'];
    } else {
        if(isset($_POST['codigo']) ){
            $c = $_POST['codigo'];
        } else {
            $c = '0';
        }
    }
}

// $c = isset($_REQUEST['codigo']) ? $_REQUEST['codigo'] : '';
// $c = isset($_POST['codigo']) ? $_POST['codigo'] : '';

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
//$conDB->close();

echo utf8_encode($fila['syspubl01_desc_larga']);

?>
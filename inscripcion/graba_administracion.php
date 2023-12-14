<?php
session_name('industrias4');
session_start();

// conexion a la base de datos
require_once '../include/base_de_datos.php';
require_once '../include/obj_conexion.php';
// Incluir archivo con las distintas clases
require_once '../clases/administracion.php';
//
// ---
$param = array(
  'cuit' => isset($_GET['cuit']) ? $_GET['cuit'] : null,
  'total_empleado' => isset($_GET['total_empleado']) ? $_GET['total_empleado'] : null,
  'miembro_familia' => isset($_GET['miembro_familia']) ? $_GET['miembro_familia'] : null,
  'propietario' => isset($_GET['propietario']) ? $_GET['propietario'] : null,
  'accionista' => isset($_GET['accionista']) ? $_GET['accionista'] : null,
);
//
//
// graba datos de sys_dihm_01_produccion
//
$admin = new Administracion($conDB);
$admin->insertarRegistro($param);
//
// Verificar si hubo algún error
if ($admin->codigoError != 0) {
  // Mostrar mensaje de error
  echo "Error: " . $admin->textoError;
} else {
  // Mostrar mensaje de éxito
  echo "Registro insertado con éxito";
}
//
// liberamos recursos
unset($admin);
?>

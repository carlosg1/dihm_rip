<?php
session_name('industrias4');
session_start();

// conexion a la base de datos
require_once '../include/base_de_datos.php';
require_once '../include/obj_conexion.php';
// Incluir archivo con las distintas clases
require_once '../clases/comercializacion.php';
//
// ---
$cuit = isset($_GET['cuit']) ? $_GET['cuit'] : null;
$param = array(
  'cuit' => isset($_GET['cuit']) ? $_GET['cuit'] : null,
  'tipo_mercado' => isset($_GET['tipo_mercado']) ? $_GET['tipo_mercado'] : null,
  'porcentaje_venta_consumidor_final' => isset($_GET['porcentaje_venta_consumidor_final']) ? $_GET['porcentaje_venta_consumidor_final'] : null,
  'porcentaje_venta_mayorista' => isset($_GET['porcentaje_venta_mayorista']) ? $_GET['porcentaje_venta_mayorista'] : null,
);
//
//
// graba datos de sys_dihm_01_produccion
//
$comer = new Comercializacion($conDB);
$comer->insertarRegistro($param);
//
// Verificar si hubo algún error
if ($comer->codigoError != 0) {
  // Mostrar mensaje de error
  echo "Error: " . $comer->textoError;
} else {
  // Mostrar mensaje de éxito
  echo "Registro insertado con éxito";
}
//
// liberamos recursos
unset($comer);
?>

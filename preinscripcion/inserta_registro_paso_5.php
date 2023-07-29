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
$param_plataforma_venta = array(
  'cuit' => isset($_GET['cuit']) ? $_GET['cuit'] : '',
  'propio' => isset($_GET['propio']) ? $_GET['propio'] : 0,
  'de_tercero' => isset($_GET['de_tercero']) ? $_GET['de_tercero'] : 0,
  'en_fabrica' => isset($_GET['en_fabrica']) ? $_GET['en_fabrica'] : 0,
  'tiktok' => isset($_GET['tiktok']) ? $_GET['tiktok'] : 0,
  'facebook' => isset($_GET['facebook']) ? $_GET['facebook'] : 0,
  'instagram' => isset($_GET['instagram']) ? $_GET['instagram'] : 0,
  'whatsapp' => isset($_GET['whatsapp']) ? $_GET['whatsapp'] : 0,
  'otros' => isset($_GET['otros']) ? $_GET['otros'] : 0,
  'virtual_propia' => isset($_GET['virtual_propia']) ? $_GET['virtual_propia'] : 0,
  'virtual_de_tercero' => isset($_GET['virtual_de_tercero']) ? $_GET['virtual_de_tercero'] : 0,
);
//
//
// graba datos de sys_dihm_01_produccion
//
$comer = new Comercializacion($conDB);
$comer->insertarRegistro($param); // actualiza mercado y ventas
$comer->actualizaPuntoVenta($param); // actualiza punto de venta

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

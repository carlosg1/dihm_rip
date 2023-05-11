<?php
session_name('industrias4');
session_start();

// conexion a la base de datos
require_once '../include/base_de_datos.php';
require_once '../include/obj_conexion.php';
// Incluir archivo con las distintas clases
require_once '../clases/producto.php';

// variables tabla 'variedad_producto'
$cuit = isset($_GET['cuit']) ? $_GET['cuit'] : null;
$variedad_producto = isset($_GET['variedad_producto']) ? $_GET['variedad_producto'] : null;
$variedad_prod_desc = isset($_GET['variedad_prod_desc']) ? $_GET['variedad_prod_desc'] : null;

$desc_producto = isset($_GET['ppos_denominacion_1']) ? $_GET['ppos_denominacion_1'] : null;
$unidad_medida = isset($_GET['ppos_raa_unidadMedida_1']) ? $_GET['ppos_raa_unidadMedida_1'] : null;
$cantidad_mensual = isset($_GET['ppos_raa_cantMensual_1']) ? $_GET['ppos_raa_cantMensual_1'] : null;
$cantidad_anual = isset($_GET['ppos_raa_cantAnual_1']) ? $_GET['ppos_raa_cantAnual_1'] : null;
$porcentaje = isset($_GET['ppos_raa_porcentaje_1']) ? $_GET['ppos_raa_porcentaje_1'] : null;
$cant_mensual_proyec = isset($_GET['ppos_pav_cantidadMensual_1']) ? $_GET['ppos_pav_cantidadMensual_1'] : null;
$cant_anual_proy = isset($_GET['ppos_pav_cantidadAnual_1']) ? $_GET['ppos_pav_cantidadAnual_1'] : null;
$porcentaje_proyec = isset($_GET['ppos_pav_porcentaje_1']) ? $_GET['ppos_pav_porcentaje_1'] : null;

//
// graba datos de producto
// 
$producto = new Producto($conDB);
$producto->insertarRegistro($cuit, $variedad_producto, $variedad_prod_desc, $desc_producto, $unidad_medida, $cantidad_mensual, $cantidad_anual, $porcentaje, $cant_mensual_proyec, $cant_anual_proy, $porcentaje_proyec);

// Verificar si hubo algún error
if ($titular->codigoError != 0) {
  // Mostrar mensaje de error
  echo "Error: " . $cabEmpresa->textoError;
} else {
  // Mostrar mensaje de éxito
  echo "Registro insertado con éxito";
}

// liberamos recursos
unset($producto);
?>

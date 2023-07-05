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

try {
  $principales_productos = array(
    '1' => array(
      "denominacion" => isset($_GET['ppos_denominacion_1']) ? $_GET['ppos_denominacion_1'] : "",
      "unidad_medida" => isset($_GET['ppos_raa_unidadMedida_1']) ? $_GET['ppos_raa_unidadMedida_1'] : null,
      "real_anio_anterior" => array(
        "cant_mensual" => isset($_GET['ppos_raa_cantMensual_1']) ? $_GET['ppos_raa_cantMensual_1'] : null,
        "cant_anual"   => isset($_GET['ppos_raa_cantAnual_1']) ? $_GET['ppos_raa_cantAnual_1'] : null,
        "porc_partic"   => isset($_GET['ppos_raa_porcentaje_1']) ? $_GET['ppos_raa_porcentaje_1'] : null
      ),
      "proyectado_anio_vigente" => array(
        "cant_mensual" => isset($_GET['ppos_pav_cantidadMensual_1']) ? $_GET['ppos_pav_cantidadMensual_1'] : null,
        "cant_anual"   => isset($_GET['ppos_pav_cantidadAnual_1']) ? $_GET['ppos_pav_cantidadAnual_1'] : null,
        "porc_partic"   => isset($_GET['ppos_pav_porcentaje_1']) ? $_GET['ppos_pav_porcentaje_1'] : null
      )
    ),
    '2' => array(
      "denominacion" => isset($_GET['ppos_denominacion_2']) ? $_GET['ppos_denominacion_2'] : "",
      "unidad_medida" => isset($_GET['ppos_raa_unidadMedida_2']) ? $_GET['ppos_raa_unidadMedida_2'] : null,
      "real_anio_anterior" => array(
        "cant_mensual" => isset($_GET['ppos_raa_cantMensual_2']) ? $_GET['ppos_raa_cantMensual_2'] : null,
        "cant_anual"   => isset($_GET['ppos_raa_cantAnual_2']) ? $_GET['ppos_raa_cantAnual_2'] : null,
        "porc_partic"   => isset($_GET['ppos_raa_porcentaje_2']) ? $_GET['ppos_raa_porcentaje_2'] : null
      ),
      "proyectado_anio_vigente" => array(
        "cant_mensual" => isset($_GET['ppos_pav_cantidadMensual_2']) ? $_GET['ppos_pav_cantidadMensual_2'] : null,
        "cant_anual"   => isset($_GET['ppos_pav_cantidadAnual_2']) ? $_GET['ppos_pav_cantidadAnual_2'] : null,
        "porc_partic"   => isset($_GET['ppos_pav_porcentaje_2']) ? $_GET['ppos_pav_porcentaje_2'] : null
      )
    ),
    '3' => array(
      "denominacion" => isset($_GET['ppos_denominacion_3']) ? $_GET['ppos_denominacion_3'] : "",
      "unidad_medida" => isset($_GET['ppos_raa_unidadMedida_3']) ? $_GET['ppos_raa_unidadMedida_3'] : null,
      "real_anio_anterior" => array(
        "cant_mensual" => isset($_GET['ppos_raa_cantMensual_3']) ? $_GET['ppos_raa_cantMensual_3'] : null,
        "cant_anual"   => isset($_GET['ppos_raa_cantAnual_3']) ? $_GET['ppos_raa_cantAnual_3'] : null,
        "porc_partic"   => isset($_GET['ppos_raa_porcentaje_3']) ? $_GET['ppos_raa_porcentaje_3'] : null
      ),
      "proyectado_anio_vigente" => array(
        "cant_mensual" => isset($_GET['ppos_pav_cantidadMensual_3']) ? $_GET['ppos_pav_cantidadMensual_3'] : null,
        "cant_anual"   => isset($_GET['ppos_pav_cantidadAnual_3']) ? $_GET['ppos_pav_cantidadAnual_3'] : null,
        "porc_partic"   => isset($_GET['ppos_pav_porcentaje_3']) ? $_GET['ppos_pav_porcentaje_3'] : null
      )
    ),
    '4' => array(
      "denominacion" => isset($_GET['ppos_denominacion_4']) ? $_GET['ppos_denominacion_4'] : "",
      "unidad_medida" => isset($_GET['ppos_raa_unidadMedida_4']) ? $_GET['ppos_raa_unidadMedida_4'] : null,
      "real_anio_anterior" => array(
        "cant_mensual" => isset($_GET['ppos_raa_cantMensual_4']) ? $_GET['ppos_raa_cantMensual_4'] : null,
        "cant_anual"   => isset($_GET['ppos_raa_cantAnual_4']) ? $_GET['ppos_raa_cantAnual_4'] : null,
        "porc_partic"   => isset($_GET['ppos_raa_porcentaje_4']) ? $_GET['ppos_raa_porcentaje_4'] : null
      ),
      "proyectado_anio_vigente" => array(
        "cant_mensual" => isset($_GET['ppos_pav_cantidadMensual_4']) ? $_GET['ppos_pav_cantidadMensual_4'] : null,
        "cant_anual"   => isset($_GET['ppos_pav_cantidadAnual_4']) ? $_GET['ppos_pav_cantidadAnual_4'] : null,
        "porc_partic"   => isset($_GET['ppos_pav_porcentaje_4']) ? $_GET['ppos_pav_porcentaje_4'] : null
      )
    ),
    '5' => array(
      "denominacion" => isset($_GET['ppos_denominacion_5']) ? $_GET['ppos_denominacion_5'] : "",
      "unidad_medida" => isset($_GET['ppos_raa_unidadMedida_5']) ? $_GET['ppos_raa_unidadMedida_5'] : null,
      "real_anio_anterior" => array(
        "cant_mensual" => isset($_GET['ppos_raa_cantMensual_5']) ? $_GET['ppos_raa_cantMensual_5'] : null,
        "cant_anual"   => isset($_GET['ppos_raa_cantAnual_5']) ? $_GET['ppos_raa_cantAnual_5'] : null,
        "porc_partic"   => isset($_GET['ppos_raa_porcentaje_5']) ? $_GET['ppos_raa_porcentaje_5'] : null
      ),
      "proyectado_anio_vigente" => array(
        "cant_mensual" => isset($_GET['ppos_pav_cantidadMensual_5']) ? $_GET['ppos_pav_cantidadMensual_5'] : null,
        "cant_anual"   => isset($_GET['ppos_pav_cantidadAnual_5']) ? $_GET['ppos_pav_cantidadAnual_5'] : null,
        "porc_partic"   => isset($_GET['ppos_pav_porcentaje_5']) ? $_GET['ppos_pav_porcentaje_5'] : null
      )
    )
  );

//
// graba datos de producto
// 
$producto = new Producto($conDB);

// esta es la primer llamada al metodo insertarRegistro, la reemplazo por la otra que pasa parametros como array
// $producto->insertarRegistro($cuit, $variedad_producto, $variedad_prod_desc, $desc_producto, $unidad_medida, $cantidad_mensual, $cantidad_anual, $porcentaje, $cant_mensual_proyec, $cant_anual_proy, $porcentaje_proyec);

// esta llamada pasa parametros como array
$producto->insertarRegistro($cuit, $variedad_producto, $variedad_prod_desc, $principales_productos);

} catch (Exeption $e) {
  echo $e->getCode(), $e->getMessage();
  exit();
}
?>
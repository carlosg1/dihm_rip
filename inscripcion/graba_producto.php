<?php
session_name('industrias4');
session_start();

// conexion a la base de datos
require_once '../include/base_de_datos.php';
require_once '../include/obj_conexion.php';

require_once '../clases/producto.php';

$datos = $_REQUEST;
$iterar = 0;

$param = array(
  "cuit" => $datos['cuit'],
  "razonSocial"         => $datos['razonSocial'],
  "inicio_actividad"    => $datos['inicio_actividad'],
  "relTitularDomic"     => $datos['relTitularDomic'],
  "variedad_producto"   => $datos['variedad_producto']
);

for($ix = 1; $ix <= $datos['c']; $ix++){
  $v = explode('|*', $datos['d' . ($ix)]);

  if($v[0] != ""){
    $param["productos"][$ix] = [
     
        "denominacion"    => $v[0],
        "unidad"          => $v[1],
        "anio_anterior"   => [
            "cantidad_mes"        => $v[2],
            "cantidad_anio"       => $v[3],
            "porc_participacion"  => $v[4]
        ],
        "anio_vigente"    => [
            "cantidad_mes"        => $v[5],
            "cantidad_anio"       => $v[6],
            "porc_participacion"  => $v[7]
        ]
    ];
  }
}

$param["cant_producto"] = count($param["productos"]);

$oProducto = new Producto($conDB);
$oProducto->grabaDatosArray($param);

// Verificar si hubo algún error
if ($oProducto->codigoError != 0) {
    // Mostrar mensaje de error
    echo "Error: " . $oProducto->textoError;
  } else {
    // Mostrar mensaje de éxito
    echo "Registro Actualizado con éxito";
  }
  //
  // liberamos recursos
  unset($oProducto);


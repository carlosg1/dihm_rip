<?php
session_name('industrias4');
session_start();

// conexion a la base de datos
require_once '../include/base_de_datos.php';
require_once '../include/obj_conexion.php';
require_once '../clases/actividad.php';

$cuit = $_REQUEST['cuit'];

$acti = explode('|', $_REQUEST['actividad']);
$param = []; 

foreach($acti as $clave => $valor) {
    $val = explode('**', $valor);

    $param[] = [
        "ciiu"              => $val[0],
        "actividad_tipo"    => $val[1],
        "facturacion_anual" => $val[2]
    ];
}


$oActividad = new Actividad($conDB);
$oActividad->actualizaActividad($cuit, $param);

// Verificar si hubo algún error
if ($oActividad->codigoError != 0) {
    // Mostrar mensaje de error
    echo "Error: " . $oInsc->textoError;
  } else {
    // Mostrar mensaje de éxito
    echo "Registro Actualizado con éxito";
  }
  //
  // liberamos recursos
  unset($oActividad);





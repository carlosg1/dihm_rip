<?php
session_name('industrias4');
session_start();

// conexion a la base de datos
require_once '../include/base_de_datos.php';
require_once '../include/obj_conexion.php';
require_once '../clases/inscripcion.php';

$param = array(
    "cuit" => $_REQUEST['cuit'],
    "razon_social" => $_REQUEST['razon_social'],
    "inicio_actividad" => $_REQUEST['fecha_actividad'],
    "relacion_titular_planta" => $_REQUEST['relacion_titular_planta']
); 

$oInsc = new Inscripcion($conDB);
$oInsc->actualizaDatosDeLaEmpresa($param);

// Verificar si hubo algún error
if ($oInsc->codigoError != 0) {
    // Mostrar mensaje de error
    echo "Error: " . $oInsc->textoError;
  } else {
    // Mostrar mensaje de éxito
    echo "Registro Actualizado con éxito";
  }
  //
  // liberamos recursos
  unset($oInsc);


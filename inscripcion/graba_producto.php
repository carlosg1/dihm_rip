<?php
session_name('industrias4');
session_start();

// conexion a la base de datos
require_once '../include/base_de_datos.php';
require_once '../include/obj_conexion.php';

require_once '../clases/producto.php';

$oProducto = new Producto($conDB);
$oProducto->insertarRegistro($_REQUEST['cuit'], $_REQUEST['nombre_titular'], $_REQUEST['nombre_titular'], $_REQUEST['telefono_titular'], $_REQUEST['cuit']);

// Verificar si hubo algún error
if ($oTitular->codigoError != 0) {
    // Mostrar mensaje de error
    echo "Error: " . $oTitular->textoError;
  } else {
    // Mostrar mensaje de éxito
    echo "Registro Actualizado con éxito";
  }
  //
  // liberamos recursos
  unset($oTitular);


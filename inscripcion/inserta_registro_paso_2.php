<?php
session_name('industrias4');
session_start();

// conexion a la base de datos
require_once '../include/base_de_datos.php';
require_once '../include/obj_conexion.php';
// Incluir archivo con las distintas clases
require_once '../clases/titular.php';

// Obtener los datos por GET
$cuit = isset($_GET['cuit']) ? $_GET['cuit'] : null;
$cuit_titular = isset($_GET['cuit_titular']) ? $_GET['cuit_titular'] : null;
$apellido = isset($_GET['nombre_titular']) ? $_GET['nombre_titular'] : null;
$nombre = isset($_GET['nombre_titular']) ? $_GET['nombre_titular'] : null;
$telefono_titular = isset($_GET['telefono_titular']) ? $_GET['telefono_titular'] : null;
//
// graba datos del titular
// 
$titular = new Titular($conDB);
$titular->insertarRegistro($cuit_titular, $apellido, $nombre, $telefono_titular, $cuit);


// Verificar si hubo algún error
if ($titular->codigoError != 0) {
  // Mostrar mensaje de error
  echo "Error: " . $cabEmpresa->textoError;
} else {
  // Mostrar mensaje de éxito
  echo "Registro insertado con éxito";
}

// liberamos recursos
unset($titular);
?>

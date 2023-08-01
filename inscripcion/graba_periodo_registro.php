<?php
session_name('industrias4');
session_start();

// conexion a la base de datos
require_once '../include/base_de_datos.php';
require_once '../include/obj_conexion.php';
// Incluir archivo con las distintas clases
require_once '../clases/inscripcion.php';
// 

$fer = isset($_GET['anor']) ? $_GET['anor'] . '-' : '0000-';
$fer .= isset($_GET['mesr']) ? $_GET['mesr'] . '-01' : '00-00';

$param = array(
    'cuit' => isset($_GET['cuit']) ? $_GET['cuit'] : null,
    'estado_registro' => isset($_GET['estador']) ? $_GET['estador'] : '',
    'mes_registro'    => isset($_GET['mesr']) ? $_GET['mesr'] : '',
    'ano_registro'    => isset($_GET['anor']) ? $_GET['anor'] : '',
    'localidad'       => isset($_GET['loc']) ? $_GET['loc'] : '',
    'fecha_estado_registro' => $fer,
);

//
// graba datos de sys_dihm_01_produccion
//
$oInsc = new Inscripcion($conDB);
$oInsc->actualizaPeriodoRegistro($param);
//
// Verificar si hubo algún error
if ($oInsc->codigoError != 0) {
  // Mostrar mensaje de error
  echo "Error: " . $oInsc->textoError;
} else {
  // Mostrar mensaje de éxito
  echo "Registro insertado con éxito";
}
//
// liberamos recursos
unset($oInsc);
?>

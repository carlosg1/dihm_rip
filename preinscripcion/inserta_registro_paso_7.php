<?php
session_name('industrias4');
session_start();

// conexion a la base de datos
require_once '../include/base_de_datos.php';
require_once '../include/obj_conexion.php';
// Incluir archivo con las distintas clases
require_once '../clases/proyyecto_mejora.php';
//
// ---
$param = array(
  'cuit' => isset($_GET['cuit']) ? $_GET['cuit'] : null,
  'id_proyecto_mejora_tipo' => isset($_GET['id_proyecto_mejora_tipo']) ? $_GET['id_proyecto_mejora_tipo'] : 0,
  'estado_proyecto' => isset($_GET['estado_proyecto']) ? $_GET['estado_proyecto'] : null,
  'porcentaje_avance' => isset($_GET['porcentaje_avance']) ? $_GET['porcentaje_avance'] : null,
  'plazo_implementacion' => isset($_GET['plazo_implementacion']) ? $_GET['plazo_implementacion'] : null,
  'fuente_financiamiento' => isset($_GET['fuente_financiamiento']) ? $_GET['fuente_financiamiento'] : null,
  'monto_estimado_inversion' => isset($_GET['monto_estimado_inversion']) ? $_GET['monto_estimado_inversion'] : null,
  'asistencia_tecnica_necesaria' => isset($_GET['asistencia_tecnica_necesaria']) ? $_GET['asistencia_tecnica_necesaria'] : null,
  'necesidad_mas_relevante' => isset($_GET['necesidad_mas_relevante']) ? $_GET['necesidad_mas_relevante'] : null
);
//
//
// graba datos de sys_dihm_01_produccion
//
$proy_mejora = new ProyectoMejora($conDB);
$proy_mejora->insertarRegistro($param);
//
// Verificar si hubo algún error
if ($proy_mejora->codigoError != 0) {
  // Mostrar mensaje de error
  echo "Error: " . $proy_mejora->textoError;
} else {
  // Mostrar mensaje de éxito
  echo "Registro insertado con éxito";
}
//
// liberamos recursos
unset($proy_mejora);
?>
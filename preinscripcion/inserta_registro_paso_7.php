<?php
session_name('industrias4');
session_start();

// conexion a la base de datos
require_once '../include/base_de_datos.php';
require_once '../include/obj_conexion.php';
// Incluir archivo con las distintas clases
require_once '../clases/proyecto_mejora.php';
// 
// --- ?cuit=20173877022|campo1=valor1|campo2=valor2|campo3=valor3
$queryString = $_SERVER['QUERY_STRING']; // Obtener la cadena recibida por GET

// Separar el 'cuit' del resto de la cadena
list($cuit, $restoCadena) = explode('|', $queryString, 2);

// Asignar el 'cuit' a la variable $cuit
$cuit = substr($cuit, strpos($cuit, '=') + 1);

// Crear un array con el resto de la cadena
$claveValorArray = [];
$claveValorPairs = explode('|', $restoCadena);
foreach ($claveValorPairs as $pair) {
    list($clave, $valor) = explode('=', $pair);
    $claveValorArray[$clave] = $valor;
}

$param = array(
  '1' => array(
    'cuit' => $cuit,
    'id_proyecto_mejora_tipo' => $claveValorArray['idtp1'],
    'estado_proyecto' => $claveValorArray['proyMejora1'],
    'porcentaje_avance' => $claveValorArray['porcAvance1'],
    'plazo_implementacion' => $claveValorArray['plazoImplementa1'],
    'fuente_financiamiento' => $claveValorArray['fuenteFinanciamiento1'],
    'monto_estimado_inversion' => $claveValorArray['montoInversion1'],
    'asistencia_tecnica_necesaria' => $claveValorArray['asistenciaTecnica1'],
    'necesidad_mas_relevante' => $claveValorArray['necesidadRelevante1']
  ),
  '2' => array(
    'cuit' => $cuit,
    'id_proyecto_mejora_tipo' => $claveValorArray['idtp2'],
    'estado_proyecto' => $claveValorArray['proyMejora2'],
    'porcentaje_avance' => $claveValorArray['porcAvance2'],
    'plazo_implementacion' => $claveValorArray['plazoImplementa2'],
    'fuente_financiamiento' => $claveValorArray['fuenteFinanciamiento2'],
    'monto_estimado_inversion' => $claveValorArray['montoInversion2'],
    'asistencia_tecnica_necesaria' => $claveValorArray['asistenciaTecnica2'],
    'necesidad_mas_relevante' => $claveValorArray['necesidadRelevante2']
  ),
  '3' => array(
    'cuit' => $cuit,
    'id_proyecto_mejora_tipo' => $claveValorArray['idtp3'],
    'estado_proyecto' => $claveValorArray['proyMejora3'],
    'porcentaje_avance' => $claveValorArray['porcAvance3'],
    'plazo_implementacion' => $claveValorArray['plazoImplementa3'],
    'fuente_financiamiento' => $claveValorArray['fuenteFinanciamiento3'],
    'monto_estimado_inversion' => $claveValorArray['montoInversion3'],
    'asistencia_tecnica_necesaria' => $claveValorArray['asistenciaTecnica3'],
    'necesidad_mas_relevante' => $claveValorArray['necesidadRelevante3']
  ),
  '4' => array(
    'cuit' => $cuit,
    'id_proyecto_mejora_tipo' => $claveValorArray['idtp4'],
    'estado_proyecto' => $claveValorArray['proyMejora4'],
    'porcentaje_avance' => $claveValorArray['porcAvance4'],
    'plazo_implementacion' => $claveValorArray['plazoImplementa4'],
    'fuente_financiamiento' => $claveValorArray['fuenteFinanciamiento4'],
    'monto_estimado_inversion' => $claveValorArray['montoInversion4'],
    'asistencia_tecnica_necesaria' => $claveValorArray['asistenciaTecnica4'],
    'necesidad_mas_relevante' => $claveValorArray['necesidadRelevante4']
  ),
  '5' => array(
    'cuit' => $cuit,
    'id_proyecto_mejora_tipo' => $claveValorArray['idtp5'],
    'estado_proyecto' => $claveValorArray['proyMejora5'],
    'porcentaje_avance' => $claveValorArray['porcAvance5'],
    'plazo_implementacion' => $claveValorArray['plazoImplementa5'],
    'fuente_financiamiento' => $claveValorArray['fuenteFinanciamiento5'],
    'monto_estimado_inversion' => $claveValorArray['montoInversion5'],
    'asistencia_tecnica_necesaria' => $claveValorArray['asistenciaTecnica5'],
    'necesidad_mas_relevante' => $claveValorArray['necesidadRelevante5']
  ),
  '6' => array(
    'cuit' => $cuit,
    'id_proyecto_mejora_tipo' => $claveValorArray['idtp6'],
    'estado_proyecto' => $claveValorArray['proyMejora6'],
    'porcentaje_avance' => $claveValorArray['porcAvance6'],
    'plazo_implementacion' => $claveValorArray['plazoImplementa6'],
    'fuente_financiamiento' => $claveValorArray['fuenteFinanciamiento6'],
    'monto_estimado_inversion' => $claveValorArray['montoInversion6'],
    'asistencia_tecnica_necesaria' => $claveValorArray['asistenciaTecnica6'],
    'necesidad_mas_relevante' => $claveValorArray['necesidadRelevante6']
  ),
  '7' => array(
    'cuit' => $cuit,
    'id_proyecto_mejora_tipo' => $claveValorArray['idtp7'],
    'estado_proyecto' => $claveValorArray['proyMejora7'],
    'porcentaje_avance' => $claveValorArray['porcAvance7'],
    'plazo_implementacion' => $claveValorArray['plazoImplementa7'],
    'fuente_financiamiento' => $claveValorArray['fuenteFinanciamiento7'],
    'monto_estimado_inversion' => $claveValorArray['montoInversion7'],
    'asistencia_tecnica_necesaria' => $claveValorArray['asistenciaTecnica7'],
    'necesidad_mas_relevante' => $claveValorArray['necesidadRelevante7']
  ),
  '8' => array(
    'cuit' => $cuit,
    'id_proyecto_mejora_tipo' => $claveValorArray['idtp8'],
    'estado_proyecto' => $claveValorArray['proyMejora8'],
    'porcentaje_avance' => $claveValorArray['porcAvance8'],
    'plazo_implementacion' => $claveValorArray['plazoImplementa8'],
    'fuente_financiamiento' => $claveValorArray['fuenteFinanciamiento8'],
    'monto_estimado_inversion' => $claveValorArray['montoInversion8'],
    'asistencia_tecnica_necesaria' => $claveValorArray['asistenciaTecnica8'],
    'necesidad_mas_relevante' => $claveValorArray['necesidadRelevante8']
  ),
  '9' => array(
    'cuit' => $cuit,
    'id_proyecto_mejora_tipo' => $claveValorArray['idtp9'],
    'estado_proyecto' => $claveValorArray['proyMejora9'],
    'porcentaje_avance' => $claveValorArray['porcAvance9'],
    'plazo_implementacion' => $claveValorArray['plazoImplementa9'],
    'fuente_financiamiento' => $claveValorArray['fuenteFinanciamiento9'],
    'monto_estimado_inversion' => $claveValorArray['montoInversion9'],
    'asistencia_tecnica_necesaria' => $claveValorArray['asistenciaTecnica9'],
    'necesidad_mas_relevante' => $claveValorArray['necesidadRelevante9']
  ),
  '10' => array(
    'cuit' => $cuit,
    'id_proyecto_mejora_tipo' => $claveValorArray['idtp10'],
    'estado_proyecto' => $claveValorArray['proyMejora10'],
    'porcentaje_avance' => $claveValorArray['porcAvance10'],
    'plazo_implementacion' => $claveValorArray['plazoImplementa10'],
    'fuente_financiamiento' => $claveValorArray['fuenteFinanciamiento10'],
    'monto_estimado_inversion' => $claveValorArray['montoInversion10'],
    'asistencia_tecnica_necesaria' => $claveValorArray['asistenciaTecnica10'],
    'necesidad_mas_relevante' => $claveValorArray['necesidadRelevante10']
  ),
  '11' => array(
    'cuit' => $cuit,
    'id_proyecto_mejora_tipo' => $claveValorArray['idtp11'],
    'estado_proyecto' => $claveValorArray['proyMejora11'],
    'porcentaje_avance' => $claveValorArray['porcAvance11'],
    'plazo_implementacion' => $claveValorArray['plazoImplementa11'],
    'fuente_financiamiento' => $claveValorArray['fuenteFinanciamiento11'],
    'monto_estimado_inversion' => $claveValorArray['montoInversion11'],
    'asistencia_tecnica_necesaria' => $claveValorArray['asistenciaTecnica11'],
    'necesidad_mas_relevante' => $claveValorArray['necesidadRelevante11']
  ),
  '12' => array(
    'cuit' => $cuit,
    'id_proyecto_mejora_tipo' => $claveValorArray['idtp12'],
    'estado_proyecto' => $claveValorArray['proyMejora12'],
    'porcentaje_avance' => $claveValorArray['porcAvance12'],
    'plazo_implementacion' => $claveValorArray['plazoImplementa12'],
    'fuente_financiamiento' => $claveValorArray['fuenteFinanciamiento12'],
    'monto_estimado_inversion' => $claveValorArray['montoInversion12'],
    'asistencia_tecnica_necesaria' => $claveValorArray['asistenciaTecnica12'],
    'necesidad_mas_relevante' => $claveValorArray['necesidadRelevante12']
  ),
  '13' => array(
    'cuit' => $cuit,
    'id_proyecto_mejora_tipo' => $claveValorArray['idtp13'],
    'estado_proyecto' => $claveValorArray['proyMejora13'],
    'porcentaje_avance' => $claveValorArray['porcAvance13'],
    'plazo_implementacion' => $claveValorArray['plazoImplementa13'],
    'fuente_financiamiento' => $claveValorArray['fuenteFinanciamiento13'],
    'monto_estimado_inversion' => $claveValorArray['montoInversion13'],
    'asistencia_tecnica_necesaria' => $claveValorArray['asistenciaTecnica13'],
    'necesidad_mas_relevante' => $claveValorArray['necesidadRelevante13']
  )
);

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

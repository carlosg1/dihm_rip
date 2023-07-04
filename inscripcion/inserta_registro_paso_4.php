<?php
session_name('industrias4');
session_start();

// conexion a la base de datos
require_once '../include/base_de_datos.php';
require_once '../include/obj_conexion.php';
// Incluir archivo con las distintas clases
require_once '../clases/produccion.php';
//
// ---
$cuit = isset($_GET['cuit']) ? $_GET['cuit'] : null;

$prod_cantObradores = isset($_GET['prod_cantObradores']) ? $_GET['prod_cantObradores'] : null;
$prod_cantPlanta = isset($_GET['prod_cantPlanta']) ? $_GET['prod_cantPlanta'] : null;

$dpi_supTerreno = isset($_GET['dpi_supTerreno']) ? $_GET['dpi_supTerreno'] : null;
$dpi_supCubierta = isset($_GET['dpi_supCubierta']) ? $_GET['dpi_supCubierta'] : null;
$dpi_supSemiCubierta = isset($_GET['dpi_supSemiCubierta']) ? $_GET['dpi_supSemiCubierta'] : null;

// ---
$cantidadMaquinas = isset($_GET['cantidadMaquinas']) ? $_GET['cantidadMaquinas'] : null;
$potenciaInstalada = isset($_GET['potenciaInstalada']) ? $_GET['potenciaInstalada'] : null;
$consumoElectrico = isset($_GET['consumoElectrico']) ? $_GET['consumoElectrico'] : null;

// capacidad instalada actual
$capacidad_instalada = array(
  'real_anio_anterior' => array(
    '1' => array(
      'linea_desc' => isset($_GET['prodNombreLinea_1']) ? $_GET['prodNombreLinea_1'] : null,
      'unidad_medida' => isset($_GET['prodUnidadMedida_1']) ? $_GET['prodUnidadMedida_1'] : null,
      'capacidad_instalada_mensual' => isset($_GET['prodCapaInstaladaRAA_1']) ? $_GET['prodCapaInstaladaRAA_1'] : '0',
      'nivel_de_produccion' => isset($_GET['prodNivelProdRAA_1']) ? $_GET['prodNivelProdRAA_1'] : '0',
      'aprovechamiento_de_la_capacidad' => isset($_GET['prodAprovechamCapacRAA_1']) ? $_GET['prodAprovechamCapacRAA_1'] : '0'
    ), 
    '2' => array(
      'linea_desc' => isset($_GET['prodNombreLinea_2']) ? $_GET['prodNombreLinea_2'] : null,
      'unidad_medida' => isset($_GET['prodUnidadMedida_2']) ? $_GET['prodUnidadMedida_2'] : null,
      'capacidad_instalada_mensual' => isset($_GET['prodCapaInstaladaRAA_2']) ? $_GET['prodCapaInstaladaRAA_2'] : '0',
      'nivel_de_produccion' => isset($_GET['prodNivelProdRAA_2']) ? $_GET['prodNivelProdRAA_2'] : '0',
      'aprovechamiento_de_la_capacidad' => isset($_GET['prodAprovechamCapacRAA_2']) ? $_GET['prodAprovechamCapacRAA_2'] : '0'
    ),
    '3' => array(
      'linea_desc' => isset($_GET['prodNombreLinea_3']) ? $_GET['prodNombreLinea_3'] : null,
      'unidad_medida' => isset($_GET['prodUnidadMedida_3']) ? $_GET['prodUnidadMedida_3'] : null,
      'capacidad_instalada_mensual' => isset($_GET['prodCapaInstaladaRAA_3']) ? $_GET['prodCapaInstaladaRAA_3'] : '0',
      'nivel_de_produccion' => isset($_GET['prodNivelProdRAA_3']) ? $_GET['prodNivelProdRAA_3'] : '0',
      'aprovechamiento_de_la_capacidad' => isset($_GET['prodAprovechamCapacRAA_3']) ? $_GET['prodAprovechamCapacRAA_3'] : '0'
    )
  ), 
  'proyectado_anio_actual' => array(
    '1' => array(
      'linea_desc' => isset($_GET['prodNombreLinea_1']) ? $_GET['prodNombreLinea_1'] : null,
      'unidad_medida' => isset($_GET['prodUnidadMedida_1']) ? $_GET['prodUnidadMedida_1'] : null,
      'capacidad_instalada_mensual' => isset($_GET['prodCapaInstaladaPAA_1']) ? $_GET['prodCapaInstaladaPAA_1'] : '0',
      'nivel_de_produccion' => isset($_GET['prodNivelProdPAA_1']) ? $_GET['prodNivelProdPAA_1'] : '0',
      'aprovechamiento_de_la_capacidad' => isset($_GET['prodAprovechamCapacPAA_1']) ? $_GET['prodAprovechamCapacPAA_1'] : '0'
    ), 
    '2' => array(
      'linea_desc' => isset($_GET['prodNombreLinea_2']) ? $_GET['prodNombreLinea_2'] : null,
      'unidad_medida' => isset($_GET['prodUnidadMedida_2']) ? $_GET['prodUnidadMedida_2'] : null,
      'capacidad_instalada_mensual' => isset($_GET['prodCapaInstaladaPAA_2']) ? $_GET['prodCapaInstaladaPAA_2'] : '0',
      'nivel_de_produccion' => isset($_GET['prodNivelProdPAA_2']) ? $_GET['prodNivelProdPAA_2'] : '0',
      'aprovechamiento_de_la_capacidad' => isset($_GET['prodAprovechamCapacPAA_2']) ? $_GET['prodAprovechamCapacPAA_2'] : '0'
    ),
    '3' => array(
      'linea_desc' => isset($_GET['prodNombreLinea_3']) ? $_GET['prodNombreLinea_3'] : null,
      'unidad_medida' => isset($_GET['prodUnidadMedida_3']) ? $_GET['prodUnidadMedida_3'] : null,
      'capacidad_instalada_mensual' => isset($_GET['prodCapaInstaladaPAA_3']) ? $_GET['prodCapaInstaladaPAA_3'] : '0',
      'nivel_de_produccion' => isset($_GET['prodNivelProdPAA_3']) ? $_GET['prodNivelProdPAA_3'] : '0',
      'aprovechamiento_de_la_capacidad' => isset($_GET['prodAprovechamCapacPAA_3']) ? $_GET['prodAprovechamCapacPAA_3'] : '0'
    )
  )
);

//
// graba datos de sys_dihm_01_produccion
// 
$produccion = new Produccion($conDB);
$produccion->insertarRegistro($cuit, $prod_cantObradores, $prod_cantPlanta, $dpi_supTerreno, $dpi_supCubierta, $dpi_supSemiCubierta, $cantidadMaquinas, $potenciaInstalada, $consumoElectrico, $capacidad_instalada);
//
// Verificar si hubo algún error
if ($produccion->codigoError != 0) {
  // Mostrar mensaje de error
  echo "Error: " . $produccion->textoError;
} else {
  // Mostrar mensaje de éxito
  echo "Registro insertado con éxito";
}
//
// liberamos recursos
unset($produccion);
?>

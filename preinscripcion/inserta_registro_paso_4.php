<?php
session_name('industrias4');
session_start();

// conexion a la base de datos
require_once '../include/base_de_datos.php';
require_once '../include/obj_conexion.php';
// Incluir archivo con las distintas clases
require_once '../clases/produccion.php';

// ---
$cuit = isset($_GET['cuit']) ? $_GET['cuit'] : null;
$prod_cantObradores = isset($_GET['prod_cantObradores']) ? $_GET['prod_cantObradores'] : null;
$prod_cantPlanta = isset($_GET['prod_cantPlanta']) ? $_GET['prod_cantPlanta'] : null;
$dpi_supTerreno = isset($_GET['dpi_supTerreno']) ? $_GET['dpi_supTerreno'] : null;
$dpi_supCubierta = isset($_GET['dpi_supCubierta']) ? $_GET['dpi_supCubierta'] : null;
$dpi_supSemiCubierta = isset($_GET['dpi_supSemiCubierta']) ? $_GET['dpi_supSemiCubierta'] : null;
// ---
$prodNombreLinea_1 = isset($_GET['prodNombreLinea_1']) ? $_GET['prodNombreLinea_1'] : null;
$prodUnidadMedida_1 = isset($_GET['prodUnidadMedida_1']) ? $_GET['prodUnidadMedida_1'] : null;
$prodCapaInstaladaRAA_1 = isset($_GET['prodCapaInstaladaRAA_1']) ? $_GET['prodCapaInstaladaRAA_1'] : null;
$prodCapaInstaladaPAA_1 = isset($_GET['prodCapaInstaladaPAA_1']) ? $_GET['prodCapaInstaladaPAA_1'] : null;
$prodNivelProdRAA_1 = isset($_GET['prodNivelProdRAA_1']) ? $_GET['prodNivelProdRAA_1'] : null;
$prodNivelProdPAA_1 = isset($_GET['prodNivelProdPAA_1']) ? $_GET['prodNivelProdPAA_1'] : null;
$prodAprovechamCapacRAA_1 = isset($_GET['prodAprovechamCapacRAA_1']) ? $_GET['prodAprovechamCapacRAA_1'] : null;
$prodAprovechamCapacPAA_1 = isset($_GET['prodAprovechamCapacPAA_1']) ? $_GET['prodAprovechamCapacPAA_1'] : null;
// ---
$prodNombreLinea_2 = isset($_GET['prodNombreLinea_2']) ? $_GET['prodNombreLinea_2'] : null;
$prodUnidadMedida_2 = isset($_GET['prodUnidadMedida_2']) ? $_GET['prodUnidadMedida_2'] : null;
$prodCapaInstaladaRAA_2 = isset($_GET['prodCapaInstaladaRAA_2']) ? $_GET['prodCapaInstaladaRAA_2'] : null;
$prodCapaInstaladaPAA_2 = isset($_GET['prodCapaInstaladaPAA_2']) ? $_GET['prodCapaInstaladaPAA_2'] : null;
$prodNivelProdRAA_2 = isset($_GET['prodNivelProdRAA_2']) ? $_GET['prodNivelProdRAA_2'] : null;
$prodNivelProdPAA_2 = isset($_GET['prodNivelProdPAA_2']) ? $_GET['prodNivelProdPAA_2'] : null;
$prodAprovechamCapacRAA_2 = isset($_GET['prodAprovechamCapacRAA_2']) ? $_GET['prodAprovechamCapacRAA_2'] : null;
$prodAprovechamCapacPAA_2 = isset($_GET['prodAprovechamCapacPAA_2']) ? $_GET['prodAprovechamCapacPAA_2'] : null;
// ---
$prodNombreLinea_3 = isset($_GET['prodNombreLinea_3']) ? $_GET['prodNombreLinea_3'] : null;
$prodUnidadMedida_3 = isset($_GET['prodUnidadMedida_3']) ? $_GET['prodUnidadMedida_3'] : null;
$prodCapaInstaladaRAA_3 = isset($_GET['prodCapaInstaladaRAA_3']) ? $_GET['prodCapaInstaladaRAA_3'] : null;
$prodCapaInstaladaPAA_3 = isset($_GET['prodCapaInstaladaPAA_3']) ? $_GET['prodCapaInstaladaPAA_3'] : null;
$prodNivelProdRAA_3 = isset($_GET['prodNivelProdRAA_3']) ? $_GET['prodNivelProdRAA_3'] : null;
$prodNivelProdPAA_3 = isset($_GET['prodNivelProdPAA_3']) ? $_GET['prodNivelProdPAA_3'] : null;
$prodAprovechamCapacRAA_3 = isset($_GET['prodAprovechamCapacRAA_3']) ? $_GET['prodAprovechamCapacRAA_3'] : null;
$prodAprovechamCapacPAA_3 = isset($_GET['prodAprovechamCapacPAA_3']) ? $_GET['prodAprovechamCapacPAA_3'] : null;
// ---
$cantidadMaquinas = isset($_GET['cantidadMaquinas']) ? $_GET['cantidadMaquinas'] : null;
$potenciaInstalada = isset($_GET['potenciaInstalada']) ? $_GET['potenciaInstalada'] : null;
$consumoElectrico = isset($_GET['consumoElectrico']) ? $_GET['consumoElectrico'] : null;

//
// graba datos de sys_dihm_01_produccion
// 
$producto = new Produccion($conDB);
$producto->insertarRegistro($cuit, $prod_cantObradores, $prod_cantPlanta, $dpi_supTerreno, $dpi_supCubierta, $dpi_supSemiCubierta, $cantidadMaquinas, $potenciaInstalada, $consumoElectrico);

// Verificar si hubo algún error
if ($titular->codigoError != 0) {
  // Mostrar mensaje de error
  echo "Error: " . $cabEmpresa->textoError;
} else {
  // Mostrar mensaje de éxito
  echo "Registro insertado con éxito";
}

// liberamos recursos
unset($producto);
?>

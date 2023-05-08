<?php
// Incluir archivo con la clase CabEmpresa
require_once '../clases/cabEmpresa.php';
require_once '../clases/disposicion.php';
require_once '../clases/actividad.php';
require_once '../clases/domicilioPlantaIndustrial.php';

// Obtener los datos por GET
/*
$cuit = $_GET['cuit'];
$razonSocial = $_GET['razon_social'];
$inicioActividad = $_GET['inicio_actividad'];
$orgJuridica = $_GET['organizacion_juridica'];
$relTitularPlanta = $_GET['relacion_titular_planta'];
$variedadProducto = $_GET['variedad_producto'];
*/
$cuit = isset($_GET['cuit']) ? $_GET['cuit'] : null;
$razonSocial = isset($_GET['razon_social']) ? $_GET['razon_social'] : null;
$inicioActividad = isset($_GET['inicio_actividad']) ? $_GET['inicio_actividad'] : null;
$orgJuridica = isset($_GET['organizacion_juridica']) ? $_GET['organizacion_juridica'] : null;
$relTitularPlanta = isset($_GET['relacion_titular_planta']) ? $_GET['relacion_titular_planta'] : null;
$variedadProducto = isset($_GET['variedad_producto']) ? $_GET['variedad_producto'] : null;

// tabla disposicion
$tipo_disposicion = isset($_GET['tipo_disposicion']) ? $_GET['tipo_disposicion'] : null;
$descripcion = isset($_GET['descripcion']) ? $_GET['descripcion'] : null;
$nro = isset($_GET['nro']) ? $_GET['nro'] : null;
$fecha = isset($_GET['fecha']) ? $_GET['fecha'] : null;

// tabla actividad
$actividad_tipo_1 = isset($_GET['actividad_tipo_1']) ? $_GET['actividad_tipo_1'] : null;
$ciiu_1 = isset($_GET['ciiu_1']) ? $_GET['ciiu_1'] : null;
$facturacion_anual_1 = isset($_GET['facturacion_anual_1']) ? $_GET['facturacion_anual_1'] : null;

// tabla domicilio planta industrial
/*
$domicilio = isset($_GET['domicilio']) ? $_GET['domicilio'] : '';
$localidad = isset($_GET['localidad']) ? $_GET['localidad'] : '';
$provincia = isset($_GET['provincia']) ? $_GET['provincia'] : '';
$cod_postal = isset($_GET['cod_postal']) ? $_GET['cod_postal'] : '';
$departamento = isset($_GET['departamento']) ? $_GET['departamento'] : ''; */
$domicilio = isset($_GET['domicilio']) ? $_GET['domicilio'] : null;
$localidad = isset($_GET['localidad']) ? $_GET['localidad'] : null;
$provincia = isset($_GET['provincia']) ? $_GET['provincia'] : null;
$cod_postal = isset($_GET['cod_postal']) ? $_GET['cod_postal'] : null;
$departamento = isset($_GET['departamento']) ? $_GET['departamento'] : null;

// Instanciar objeto de la clase CabEmpresa
$cabEmpresa = new CabEmpresa();

// Llamar al método insertarRegistro con los datos obtenidos por GET
$resultado = $cabEmpresa->insertarRegistro($cuit, $razonSocial, $inicioActividad, $orgJuridica, $relTitularPlanta, $variedadProducto);

// Verificar si hubo algún error
if ($cabEmpresa->codigoError != 0) {
  // Mostrar mensaje de error
  echo "Error: " . $cabEmpresa->textoError;
} else {
  // Mostrar mensaje de éxito
  echo "Registro insertado con éxito";
}


?>

<?php
session_name('industrias4');
session_start();

// conexion a la base de datos
require_once '../include/base_de_datos.php';
require_once '../include/obj_conexion.php';
// Incluir archivo con la clase CabEmpresa
require_once '../clases/cabEmpresa.php';
require_once '../clases/disposicion.php';
require_once '../clases/actividad.php';
require_once '../clases/domicilioPlantaIndustrial.php';

// Obtener los datos por GET
$cuit = isset($_GET['cuit']) ? $_GET['cuit'] : null;
$razonSocial = isset($_GET['razon_social']) ? $_GET['razon_social'] : null;
// formatea la fecha de inicio
if(isset($_GET['inicio_actividad'])) {
    $nueva_fecha = date_create_from_format('d/m/Y', $_GET['inicio_actividad']);
    if($nueva_fecha) {
        $inicioActividad = date_format($nueva_fecha, 'Y-m-d');
    }
} else {
    $inicioActividad = null;
}
//
$orgJuridica = isset($_GET['organizacion_juridica']) ? $_GET['organizacion_juridica'] : null;
$relTitularPlanta = isset($_GET['relacion_titular_planta']) ? $_GET['relacion_titular_planta'] : null;
$variedadProducto = isset($_GET['variedad_producto']) ? $_GET['variedad_producto'] : null;
$nro_ingreso_bruto = isset($_GET['nro_ingreso_bruto']) ? $_GET['nro_ingreso_bruto'] : null;
// formatea fecha habilitacion ingresos brutos
if(isset($_GET['fecha_hab_ing_bruto'])) {
    $nueva_fecha = date_create_from_format('d/m/Y', $_GET['fecha_hab_ing_bruto']);
    if($nueva_fecha) {
        $fecha_habilit_ing_bruto = date_format($nueva_fecha, 'Y-m-d');
    }
} else {
    $fecha_habilit_ing_bruto = null;
}
//
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
$domicilio = isset($_GET['domicilio']) ? $_GET['domicilio'] : null;
$localidad = isset($_GET['localidad']) ? $_GET['localidad'] : null;
$provincia = isset($_GET['provincia']) ? $_GET['provincia'] : null;
$cod_postal = isset($_GET['cod_postal']) ? $_GET['cod_postal'] : null;
$departamento = isset($_GET['departamento']) ? $_GET['departamento'] : null;

// Instanciar objeto de la clase CabEmpresa
$cabEmpresa = new CabEmpresa($conDB);
$cabEmpresa->insertarRegistro($cuit, $razonSocial, $inicioActividad, $orgJuridica, $relTitularPlanta, $variedadProducto, $nro_ingreso_bruto, $fecha_habilit_ing_bruto);

// Verificar si hubo algún error
if ($cabEmpresa->codigoError != 0) {
  // Mostrar mensaje de error
  echo "Error: " . $cabEmpresa->textoError;
} else {
  // Mostrar mensaje de éxito
  echo "Registro insertado con éxito";
}

$cabEmpresa = null;

// Instanciar objeto de la clase CabEmpresa
// $disposicion = new Disposicion($conDB);

// $disposicion = null;

// echo 'recorriendo el script';

?>

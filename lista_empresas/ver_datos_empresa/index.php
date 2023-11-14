<?php 
  session_name('industrias4');
  session_start();

  if(isset($_REQUEST['cuit']) && (!is_null($_REQUEST['cuit']) || $_REQUEST['cuit'] != "")) {

    require_once "../../include/base_de_datos.php";
    require_once "../../include/obj_conexion.php";
    require_once "../../clases/cabEmpresa.php";

    // lee cab_empresa
    $cab_empresa = new CabEmpresa($conDB);
    $reg_cab_empresa = $cab_empresa->leeRegistro($_REQUEST['cuit']);

  } else {
    // regresa al listado de empresas
    header('location: ../');
  }


?><!DOCTYPE html>
<html lang="es">
<head>
  <title>Ver datos de empresa</title>
  
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="keywords" content="dihm, dirección de industria hidrocarburo y mineria, formosa tu ciudad, hidrocarburo, mineria, registro de industria">
	<meta name="description" content="Información institucional, consultas, trámites, registro de industria">
	<meta name="robots" content="FOLLOW,INDEX">
  <meta name="author" content="Gobierno de la Provincia de Formosa">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <!-- Fontawesome -->
  <!-- <script src="https://kit.fontawesome.com/4c72def62b.js" crossorigin="anonymous"></script> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400;0,500;0,600;0,700;1,500;1,700&family=Roboto+Slab:wght@300&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap&SameSite=None; Secure" rel="stylesheet">

  <!-- Estilo propio global -->
  <link rel="stylesheet" href="../../css/estilo.css">
  <link rel="stylesheet" href="../../css/registro.css">
  
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col">
        <h2>Datos de la empresa</h2>
      </div>
    </div>
  </div>
    <!-- +++ este archivo deberia ser .php y ser el index, y el que esta como index cambiarlo por otro que se llame datos empresa -->
  <table id="tablaDatos" class="display" style="width:100%"></table>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <!-- <script src="script.js"></script> -->
</body>
</html>
<?php
  $reg_cab_empresa = null;
  $cab_empresa = null;
?>
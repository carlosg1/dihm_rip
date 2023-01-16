<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registro de Industrias | D.I.H.M.</title>

    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="keywords" content="dihm, dirección de industria hidrocarburo y mineria, formosa tu ciudad, hidrocarburo, mineria, registro de industria">
	<meta name="description" content="Información institucional, consultas, trámites, registro de industria">
	<meta name="robots" content="FOLLOW,INDEX">
    <meta name="author" content="Gobierno de la Provincia de Formosa">

	<!-- esto queda confirmado -->
	<link rel="stylesheet" href="https://www.formosa.gob.ar/css/style.v3.css">
	<link rel="stylesheet" href="https://cdn-www.formosa.gob.ar/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.formosa.gob.ar/css/custom.php">
	<!-- // esto queda confirmado // -->

    <script src="https://cdn-www.formosa.gob.ar/js/jquery.min.js"></script>
	<script src="https://cdn-www.formosa.gob.ar/js/jquery-migrate-1.2.1.js"></script>
	<script src="https://cdn-www.formosa.gob.ar/js/jquery-ui.min.js"></script>

	<!-- Theme CSS -->
	<link rel="stylesheet" href="https://cdn-www.formosa.gob.ar/css/style.v3.css">

	<!-- Responsive CSS -->
	<link rel="stylesheet" href="https://cdn-www.formosa.gob.ar/css/responsive.v2.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="https://cdn-www.formosa.gob.ar/css/pages.css">
	<link rel="stylesheet" href="https://cdn-www.formosa.gob.ar/css/custom.php">
	

	<!-- IE Styles-->
	<link rel="stylesheet" href="https://cdn-www.formosa.gob.ar/css/ie/ie.css">

	<script src="https://kit.fontawesome.com/4c72def62b.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="../css/estilo.css">

    <link rel="stylesheet" href="registroonline.css">
</head>
<body>
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-9 col-sm-9 col-md-12"></div>
			</div>
		</div>
	</header>




	<!-- cinta superior -->
	<div class="page-box">
		<div class="page-box-content">
			<div id="top-box">

				<?php 
					include_once('../cabecera1.php');
				?>
				<?php
					$_REQUEST['logotu'] = '../img/logo_gob_todos_unidos.jpg';
					$_REQUEST['href_logotu'] = '../';
					require_once("../cabecera2.php");
					unset($_REQUEST['logotu'], $_REQUEST['href_logotu']);
				?>
				
			</div>

			<!-- titulo de la seccion -->
			<header class="page-header">
				<div class="container">
					<h1 class="titulo2">Inscripción al Registro de Industria por primera vez</h1>
				</div>
			</header>
			<!-- // titulo de la seccion -->

			<div class="container">
				<div class="row">
					<div class="col-xs-5 col-sm-9 col-md-12">
						<p class="parrafo1">El primer paso consiste en registrar al sujeto responsable, apoderado, titular o quien va a representar a la industria que va a inscribir en una etapa siguiente</p>
					</div>
				</div>
			</div>

			
			<div class="container pb-3">
				<div class="row">
					<div class="col-xs-5 col-sm-9 col-md-12">
						<div class="paso-1">
							<img src="../img/registro-sujeto-responsable-paso-1.png" alt="Registro de Industrias de la Provincia" class="paso1">
						</div>
					</div>
				</div>
			</div>

			<div class="container ml-1">
				<div class="row" style="margin: 0 7px;">
					<form action="" class="form" role="form">
						<div class="form-group">
							<label for="cuil">CUIL/CUIT</label>
							<input type="text" name="cuil" id="cuil" class="form-control">

							<label for="apellido">Apellido</label>
							<input type="text" name="apellido" id="apellido" class="form-control">

							<label for="apellido">Nombre(s)</label>
							<input type="text" name="apellido" id="apellido" class="form-control">

							<label for="apellido">Nombre(s)</label>
							<input type="text" name="apellido" id="apellido" class="form-control">
						</div>
					</form>
				</div>
			</div>


		</div>
	</div>

	

	

	<!-- librerias -->
	<script src="https://cdn-www.formosa.gob.ar/js/bootstrap.min.js"></script>
	<script src="https://cdn-www.formosa.gob.ar/js/bootstrap-datepicker.js"></script>
	<script src="https://cdn-www.formosa.gob.ar/js/bootstrapValidator.min.js"></script>
</body>
</html>
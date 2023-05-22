<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tablero D.I.H.M.</title>

    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="keywords" content="dihm, dirección de industria hidrocarburo y mineria, formosa tu ciudad, hidrocarburo, mineria, registro de industria">
	<meta name="description" content="Información institucional, consultas, trámites, registro de industria">
	<meta name="robots" content="FOLLOW,INDEX">
    <meta name="author" content="Gobierno de la Provincia de Formosa">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!-- CSS Files -->
    <!-- <link id="pagestyle" href="../../assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" /> -->

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

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/4c72def62b.js" crossorigin="anonymous"></script>

    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <link rel="stylesheet" href="../../css/estilo.css">

    <!-- estilos para las tarjetas -->
    <style>
    .shapeCantEmpresa {
        background-color: #BC5679;
    }
    /* Estilos personalizados */
    .card {
      border-radius: 5px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    }
    
    .card-title {
      color: #fff;
      background-color: #003763;
      padding: 10px;
      border-radius: 5px 5px 0 0;
      margin-bottom: 0;
    }
    
    .card-body {
      background: linear-gradient(to bottom, #FFFFFF, #E8D4D1);
      padding: 10px;
      border-radius: 0 0 5px 5px;
    }
    </style>
    
</head>
<body>

    <!-- cabecera principal -->
	<div class="page-box">
		<div class="page-box-content">
			
			<?php 
                include_once('../../cabecera1.php');
            ?>
            <?php
                $_REQUEST['logotu'] = '../../img/logo_gob_todos_unidos.jpg';
                $_REQUEST['href_logotu'] = '../../';
                require_once("../../cabecera2.php");
                unset($_REQUEST['logotu'], $_REQUEST['href_logotu']);
            ?>

            <div class="separador-linea"></div>

            <!-- titulo de la seccion -->
			<header class="page-header">
				<div class="container">
					<h1 class="titulo2">Preinscripci&oacute;n 2023</h1>
				</div>
			</header>
			<!-- // titulo de la seccion -->

            <!-- pastillas de preinscripcion  -->
            <div class="container">
                <div class="row">
                <div class="col-md-6">
                    <div class="card">
                    <div class="card-title">
                        <h5>Preinscripción RIP</h5>
                    </div>
                    <div class="card-body">
                        <p><div class="row" id="cantEmpresaColumn"><span class="px-3"></span></div></p>
                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card border-radius">
                    <div class="card-title">
                        <h5>Preinscripción RIP</h5>
                    </div>
                    <div class="card-body">
                        <p><div class="row" id="cantEmpresa"></div></p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- // pastillas de preinscripcion  -->

            <div class="separador-linea"></div>

            <div class="row my-5" style="height:37px;">&nbsp;</div>

            <!-- titulo de la seccion -->
			<header class="page-header">
				<div class="container">
					<h1 class="titulo2">Total de industrias registradas (2022-2023)</h1>
				</div>
			</header>
			<!-- // titulo de la seccion -->

            <!-- pastillas cantidad de industrias -->
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card border border-radius bg-gradient-gris" style="height: 198px;">
                            <div class="card-header p-3 pt-2">
                                <div class="icon icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-4" style="margin: -15px 0 0 15px;">
                                    <span class="material-symbols-outlined text-white">factory</span>
                                </div>
                                <div class="text-end" style="right: 25px; top:5px; position: absolute; float:right;">
                                    <h4 class="text-sm mb-0 text-capitalize">Industrias 2022</h4>
                                   
                                </div>
                            </div>
                            <hr class="dark-horizontal my-0">
                            <div class="card-footer p-3">
                                <p class="mb-0">
                                    <h4 class="text-success text-sm font-weight-bolder" style="position: absolute; right:45px; margin-bottom: 10px;">191</h4>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card border border-radius bg-gradient-gris" style="height: 198px;">
                            <div class="card-header p-3 pt-2">
                                <div class="icon icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-4" style="margin: -15px 0 0 15px;">
                                    <span class="material-symbols-outlined text-white">factory</span>
                                </div>
                                <div class="text-end" style="right: 25px; top:5px; position: absolute; float:right;">
                                    <h4 class="text-sm mb-0 text-capitalize">Industrias 2023</h4>
                                   
                                </div>
                            </div>
                            <hr class="dark-horizontal my-0">
                            <div class="card-footer p-3">
                                <p class="mb-0">
                                    <h4 class="text-success text-sm font-weight-bolder" style="position: absolute; right:45px; margin-bottom: 10px;">0</h4>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // pastillas -->


            <div class="separador-linea"></div>


            <!-- titulo de la seccion -->
			<header class="page-header">
				<div class="container">
					<h1 class="titulo2">Datos generales - RIP 2022</h1>
				</div>
			</header>
			<!-- // titulo de la seccion -->

            <!-- area de graficos -->
            <div class="container">

                <!-- fila 1 -->
                <div class="row">

                    <!-- columna 1 -->
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        
                        <div class="card">
                            <div class="card-body">
                                <img src="../../img/informe_anual_2022/tipos_de_empresa_rip_2022.png" alt="" class="card-img-top">
                            </div>
                        </div>
                        
                    </div>
                    <!-- // columna 1 -->

                    <!-- columna 2 -->
                    <div class="col-xs-12 col-sm-12 col-md-6">

                        <div class="row">
                            <p class="card-text">Del total de empresas registradas en el año 2022 (191 empresas), el 64 % son empresas constructoras y el 36 % empresas industriales. </p>
                        </div>

                        <div class="row" style="margin-top: 7px;">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Area</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Porcentaje</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Construcci&oacute;n</td>
                                        <td>123</td>
                                        <td>
                                            <div class="progress bg-gradient-progress" style="height: 5px;">
                                                <div class="progress-bar bg-gradient-construccion" role="progressbar" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100" style="width: 64%;"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Industrial</td>
                                        <td>68</td>
                                        <td>
                                            <div class="progress bg-gradient-progress" style="height: 5px;">
                                                <div class="progress-bar bg-gradient-industria" role="progressbar" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100" style="width: 36%;"></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th scope="row">#</th>
                                        <td>TOTAL</td>
                                        <td>191</td>
                                        <td>100%</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                    <!-- // columna 2 -->

                </div>
                <!-- // fila 1 -->

                <div class="separador-linea"></div>

                <!-- fila 2 -->
                <div class="row">

                    <!-- columna 1 -->
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        
                        <div class="card">
                            <header class="page-header">
                                <div class="container">
                                    <h1 class="titulo2">Evolución Anual - Empresas Registradas</h1>
                                </div>
                            </header>
                            <div class="card-body">
                                <canvas id="grafico2"></canvas>
                            </div>
                        </div>
                        
                    </div>
                    <!-- // columna 1 -->

                    <!-- columna 2 -->
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        
                        <div class="card">
                            <header class="page-header">
                                <div class="container">
                                    <h1 class="titulo2">Empresas con RIP vigente 2022</h1>
                                </div>
                            </header>
                            <div class="card-body">
                                <canvas id="grafico3"></canvas>
                            </div>
                        </div>
                        
                    </div>
                    <!-- // columna 2 -->

                </div>
                <!-- // fila 2 -->

                <div class="separador-linea"></div>

                <!-- fila 3 -->
                <div class="row">

                    <!-- columna 1 -->
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        
                        <div class="card">
                            <header class="page-header">
                                <div class="container">
                                    <h1 class="titulo2">Evolución Anual - Empleos Registrados</h1>
                                </div>
                            </header>
                            <div class="card-body bg-gradient-primary">
                                <canvas id="grafico4"></canvas>
                            </div>
                        </div>
                        
                    </div>
                    <!-- // columna 1 -->

                    <!-- columna 2 -->
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        
                        <div class="card">
                            <header class="page-header">
                                <div class="container">
                                    <h1 class="titulo2">Evolución mensual - Empleo Registrado RIP-2022</h1>
                                </div>
                            </header>
                            <div class="card-body bg-gradient-primary shadow-primary">
                                <canvas id="grafico5"></canvas>
                            </div>
                        </div>
                        
                    </div>
                    <!-- // columna 2 -->

                </div>
                <!-- // fila 3 -->

                <!-- fila 4 -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12" style="padding-top: 7px;">
                        <p class="texto-grafico">
                            Durante el año 2022 se registraron un total de 191 empresas. Se observa una evolución del 18% en cuanto a la cantidad de empresas registradas en el año 2022 en relación al año 2021.
                        </p>
                        <p class="texto-grafico">
                        Se puede observar una evolución del 11% en cuanto a la cantidad de empleos registrados en el año 2022 en relación al año 2021.
                        </p>
                        <p class="texto-grafico">
                        las más destacadas son: carpinterías, fábrica de alimentos, fábrica de calzados, embotelladora de agua, fábrica de máquinas agrícolas, fabricación de materias químicas inorgánicas, fabricación de somieres y colchones,
                        </p>
                    </div>
                </div>
                <!-- // fila 4 -->

            </div>
            <!-- // area de graficos -->

            <div class="separador-linea"></div>

            <!-- Graficos Power Bi -->
            <div class="container">
                <div class="row">
                    <div class="col-xs-9 col-md-12">
                    <iframe title="Evolucion RIP a septiembre 2022 - 02" width="1140" height="541.25" src="https://app.powerbi.com/reportEmbed?reportId=6f9b7b2f-3cf5-4164-8230-40afbbdd8aab&autoAuth=true&ctid=734a76c8-ca51-4ec3-9fd2-dee4fca010b1" frameborder="0" allowFullScreen="true"></iframe>
                    </div>
                </div>
            </div>
            <!-- // Graficos Power Bi -->

        </div> <!-- // pago-box-content --> 
    </div> <!-- // pago-box --> 
    <!-- // cabecera principal -->
    

    <!-- panel izquierdo flotante -->
    
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark ps" id="sidenav-main">
        <div class="sidenav-header"></div>
    </aside>
    
    <!-- // panel izquierdo flotante -->

   
    
    
	

	<!-- librerias -->
	<script src="https://cdn-www.formosa.gob.ar/js/bootstrap.min.js"></script>
	<script src="https://cdn-www.formosa.gob.ar/js/bootstrap-datepicker.js"></script>
	<script src="https://cdn-www.formosa.gob.ar/js/bootstrapValidator.min.js"></script>

    <!-- Material Dashboard -->
    <script src="../../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <!-- <script src="../../assets/js/plugins/chartjs.min.js"></script> -->

    <!-- Libreria de Graficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- script de graficos -->
    <script src="graficos.js"></script>
    <!-- // script de graficos -->

    <?php 
        require_once '../../include/base_de_datos.php';
        require_once '../../include/obj_conexion.php';
        include_once "../../clases/cabEmpresa.php";

        $cabEmp = new CabEmpresa($conDB);

        $cantidad = $cabEmp->totalEmpresas(2023);
    ?>





    <!-- Graficos de googgle -->
    <script type="text/javascript">

    // Load the Visualization API and the corechart package.
    google.charts.load('current', {'packages':['corechart']});

    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(() => {
        graficoColumna1();
        graficoColumna2();
    });

const graficoColumna1 = () => {

    // Define the chart to be drawn.
    var data = new google.visualization.arrayToDataTable([
    ["Año", "Cantidad de empresas", {role: 'style'}, {role: 'annotation'}],
    ['2022', 0, 'opacity: 0.2', 0],
    ['2023', <?php echo $cantidad; ?>, 'stroke-color: #871B47; stroke-opacity: 0.6; stroke-width: 4; fill-color: #BC5679; fill-opacity: 0.2', <?php echo $cantidad; ?>]
    ]);

    options = {
    title: 'Preinscripción, Cantidad de empresas',
    backgroundColor: 'transparent',
    hAxis: {title: 'Año', textStyle: {color: '#333'}},
    vAxis: {title: 'Cantidad de empresas', minValue: 0, maxValue: 10, textStyle: {color: '#333'}},
    legend: {position: 'top', alignment: 'center', className: 'shapeCantEmpresa', fill: '#BC5679'}
    }

    // Instantiate and draw the chart.
    var chart = new google.visualization.ColumnChart(document.getElementById('cantEmpresa'));
    chart.draw(data, options);
}

const graficoColumna2 = () => {
  // Define the chart to be drawn.
  var data = new google.visualization.arrayToDataTable([
    ["Año", "Cantidad de empresas", {role: 'style'}, {role: 'annotation'}],
    [
        '2022', 
        0, 
        'opacity: 0.2', 
        0
    ],
    [
        '2023', 
        <?php echo $cantidad; ?>, 
        'stroke-color: #871B47; stroke-opacity: 0.6; stroke-width: 4; fill-color: #BC5679; fill-opacity: 0.2', 
        <?php echo $cantidad; ?>
    ]
  ]);

    // objeto view
    var view = new google.visualization.DataView(data);
    view.setColumns([
        0,
        1,
        2,
        {
            calc: "stringify",
            sourceColumn: 1,
            type: "string",
            role: "annotation",
            properties: {
                textStyle: {
                color: "#000"
                }
            }
        }
    ]);

  options = {
    title: 'Preinscripción, Cantidad de empresas',
    backgroundColor: 'transparent',
    hAxis: {title: 'Cantidad de empresas', textStyle: {color: '#333'}},
    vAxis: {title: 'Año', minValue: 2022, maxValue: 2023, textStyle: {color: '#333'}},
    legend: {
        position: 'top', 
        alignment: 'center', 
        legendShape: {
            type: 'triangle',
            className: 'shapeCantEmpresa',
            fill: '#BC5679'
        }
    }
  }

  // Instantiate and draw the chart.
  var chart = new google.visualization.BarChart(document.getElementById('cantEmpresaColumn'));
  chart.draw(view, options);
}

</script>


</body>
</html>
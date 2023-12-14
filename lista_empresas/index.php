<!DOCTYPE html>
<html lang="es">
<head>
    <title>Lista de empresas registradas</title>
    
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Fontawesome -->
    <!-- <script src="https://kit.fontawesome.com/4c72def62b.js" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

    <!-- mis estilos -->
    <link rel="stylesheet" type="text/css" href="../css/registro.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

    <!-- Menu -->
    <nav class="navbar navbar-expand-lg navbar-dark nav-preinscripcion">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../preinscripcion/">Preinscripción RIP</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- // Menu -->

    <div class="ms-3 mb-5">
        <div>
            <h2>Lista de empresas Registradas</h2>
        </div>

        <!-- Listado de empresas registradas -->
        <table id="tabla-registros" class="display" style="min-width: 1920px;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>CUIT</th>
                    <th>Razón Social</th>
                    <th>Nombre</th>
                    <th>CIIU</th>
                    <th>Actividad</th>
                    <th>Telefono</th>
                    <th>Email Empresa</th>
                    <th>Domicilio</th>
                    <th>Localidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
        </table>
    </div>

    <div class="ms-3 mb-5">
        <!-- Lista de empreas certificadas -->
        <div>
            <h2>Lista de empresas Certificadas</h2>
        </div>
        <table id="tabla_empresas_certificadas" class="display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>CUIT</th>
                    <th>Razón Social</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Email Empresa</th>
                    <th>Domicilio</th>
                    <th>Localidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
        </table>
    </div>

<!-- Bootstrap -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- // Bootstrap -->
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="script.js"></script>
    <script src="empresas_certificadas.js"></script>

<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<!-- <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script> -->
    
</body>
</html>

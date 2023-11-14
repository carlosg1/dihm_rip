<!DOCTYPE html>
<html lang="en">
<head>
<title>Direcci&oacute;n de Industria, H. y M.</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="../estilo.css">
  </head>
</head>
<body>
    <!-- Cinta azul -->
    <div class="container-fluid">
        <?php include_once "../cabecera_credencial.php"; ?>
    </div>

    <!-- Logo institucion -->
    <div class="container-fluid">
        <?php include_once "../cabecera_institucion.php"; ?>
        <hr>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card border-2 shadow">
                    <img src="alejandra_guanes.jpg" class="img-fluid" alt="Alejandra Guanes">
                </div>
            </div>
            <div class="col-md-8">
                <div class="datos-agente">
                    <p><span class="prompt">Nombre: </span> <span>Alejandra Guanes</span></p>
                    <p><span class="prompt">Funci&oacute;n: </span> <span>Recepci&oacute;n</span></p>
                    <p><span class="prompt">Correo: </span> <span>No posee</span></p>
                    <p><span class="prompt">Año de Ingreso: </span> <span>Enero / 2001</span></p>
                </div>
            </div>
        </div>
        <hr>
        <p>Personal activo</p>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
    <title>Editar registro</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Modificar datos de empresa</h1>
    <?php
    // Verifica si se ha proporcionado el ID del registro
    if (isset($_GET['id'])) {
        $idRegistro = $_GET['id'];

        // Aquí puedes escribir el código para obtener los datos del registro con el ID especificado
        // y mostrar un formulario para editar los datos.
        // Puedes utilizar la variable $idRegistro para realizar la consulta y obtener los datos del registro.
    } else {
        echo "No se ha proporcionado el ID del registro.";
    }
    ?>

</body>
</html>
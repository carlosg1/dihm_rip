<?php
    // Verifica si se ha proporcionado el ID del registro
    if (isset($_GET['cuit']) && $_GET['cuit'] != "") {
        $cuit = $_GET['cuit'];

       // conexion a la base de datos
        require_once '../include/base_de_datos.php';
        require_once '../include/obj_conexion.php';
        require_once '../clases/cabEmpresa.php';
        
        $cabEmpresa = new CabEmpresa($conDB);

        $cabEmpresa->eliminaRegistro($cuit);

        header('Location: ../lista_empresas/');
        
    } else {
        echo "No se ha proporcionado el ID del registro.";
    }
?>

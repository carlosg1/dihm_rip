<?php 

    session_name('dihm');
    session_start();

    header("Content-type: application/json; charset=utf-8");

    require_once('../../include/tablas.php');
    require_once('../../include/obj_conexion.php');

    $datos = $_REQUEST;

    $usuario  = $datos['usuario'];
    $password = $datos['password'];

    $data = [];

    $qry_usuario = "SELECT u.id, (u.login = '$usuario') AS login_ok, (u.clave = PASSWORD('$password')) AS clave_ok, u.apellido, u.nombre, u.usuario_tipo
    FROM dihm_usuario u 
    WHERE u.login = '$usuario'; ";

    if( $rst_usuario = $conDB->query($qry_usuario, MYSQLI_STORE_RESULT) ){

        if( $rst_usuario->num_rows > 0 ){

            $reg_usuario = $rst_usuario->fetch_object();

            // verifica que la pawar sea correcta
            if( $reg_usuario->clave_ok ){

                $nombre = $reg_usuario->nombre;
                $apellido = $reg_usuario->apellido;
                $usuario = $datos['usuario'];
                $login = true;
                $mensaje = 'Login Ok!';

            } else {

                $nombre = $reg_usuario->nombre;
                $apellido = $reg_usuario->apellido;
                $usuario = $datos['usuario'];
                $login = false;
                $mensaje = 'Clave incorrecta!';

            }

        } else {

            // usuario no existe
            $nombre = '';
            $apellido = '';
            $usuario = $datos['usuario'];
            $login = false;
            $mensaje = 'El usuario ingresado no existe!';

        }
       
    } else {

        // error al ejecutar la consulta
        $nombre = '';
        $apellido = '';
        $usuario = $datos['usuario'];
        $login = false; 
        $mensaje = 'Error al intentar consultar el usuario';

    }

     $data = [
        "nombre"   => $nombre,
        "apellido" => $apellido,
        "login"    => $login,
        "mensaje"  => $mensaje
    ];

    echo json_encode($data);

    unset($datos, $nombre, $apellido, $usuario, $login, $mensaje);

    $reg_usuario = null;
    $rst_usuario = null;

    exit;

?>


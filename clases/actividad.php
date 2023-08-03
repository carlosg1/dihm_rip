<?php
// Clase de funciones genericas
include_once "../clases/dihm_core.php";

class Actividad {
    private $conexion;
    public $codigoError;
    public $textoError;

    // Constructor de la clase, recibe la conexión a la base de datos
    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function __destruct() {
        // Cerrar la conexión a la base de datos.
        if ($this->conexion) {
            $this->conexion->close();
        }
    }

    // Método para insertar o actualizar un registro en la tabla "sys_dihm_01_actividad"
    // El método recibe los valores de los campos como parámetros
    public function insertarRegistro($cuit, $actividad_tipo, $ciiu, $facturacion_anual) {

        // Creamos el filtro para verificar si el registro ya existe en la tabla
        $filtro = "cuit = '{$cuit}' AND ciiu = '{$ciiu}'";

        // Ejecutamos la consulta para obtener el registro con el filtro creado
        $resultado = $this->conexion->query("SELECT * FROM sys_dihm_01_actividad WHERE {$filtro} LIMIT 1");

        if ($resultado && $resultado->num_rows > 0) {

            // Si el registro existe, actualizamos los campos excepto el campo "id"
            $registro = $resultado->fetch_assoc();
            $id = $registro['id'];
            $consulta = "UPDATE sys_dihm_01_actividad SET cuit = '{$cuit}', actividad_tipo = {$actividad_tipo}, ciiu = '{$ciiu}', facturacion_anual = {$facturacion_anual} WHERE id = {$id}";

        } else {

            // Si el registro no existe, insertamos uno nuevo
            $consulta = "INSERT INTO sys_dihm_01_actividad (cuit, actividad_tipo, ciiu, facturacion_anual) VALUES ('{$cuit}', {$actividad_tipo}, '{$ciiu}', {$facturacion_anual})";

        }

        // Ejecutamos la consulta
        $resultado = $this->conexion->query($consulta);

        if (!$resultado) {
            // Si hubo un error, guardamos el código y el mensaje de error en las propiedades correspondientes
            $this->codigoError = $this->conexion->errno;
            $this->textoError = $this->conexion->error;
            return false;
        }
        return true;
    }

    public function actualizaActividad($cuit, $p) {

        try {
            $stmt_e = $this->conexion->prepare('SELECT `id`, `cuit`, `actividad_tipo`, `ciiu`, `facturacion_anual` FROM `sys_dihm_01_actividad` WHERE cuit=? AND ciiu=?');
            $stmt_u = $this->conexion->prepare('UPDATE `sys_dihm_01_actividad` SET `actividad_tipo`=?, `ciiu`=?, `facturacion_anual`=? WHERE `id`=?');
            $stmt_i = $this->conexion->prepare('INSERT INTO `sys_dihm_01_actividad` (`cuit`, `actividad_tipo`, `ciiu`, `facturacion_anual`) VALUES (?, ?, ?, ?)');

            $this->conexion->begin_transaction();

            foreach($p as $i => $v) {
                $stmt_e->bind_param('ss', $cuit, $p['ciiu']);
                $stmt_e->execute();
                $stmt_e->store_result();

                if($stmt_e->num_rows > 0) {
                    $stmt_e->bind_result($id, $cuit, $actividad_tipo, $ciiu, $facturacion_anual);
                    $stmt_e->fetch();
                    $stmt_e->free_result();

                    // compara valores
                    $actividad_tipo = $dihmCore->comparaValores($p['actividad_tipo'], $actividad_tipo);
                    $ciiu = $dihmCore->comparaValores($p['ciiu'], $ciiu);
                    $facturacion_anual = $dihmCore->comparaValores($p['facturacion_anual'], $facturacion_anual);

                    // actualiza actividad
                    $stmt_u->bind_param('isdi', $actividad_tipo, $ciiu, $facturacion_anual, $id);
                    $stmt_u->execute();
                    $stmt_u->free_result();
                } else {
                    $stmt_e->free_result();

                    // inserta actividad
                    $stmt_i->bind_param('sisd', $cuit, $v['actividad_tipo'], $v['ciiu'], $v['facturacion_anual']);
                    $stmt_i->execute();
                    $stmt_i->free_result();
                }
            }

            $this->conexion->commit();

        } catch (mysqli_sql_exception $e) {
            // En caso de error, deshacer los cambios
            $this->conexion->rollback();
            $this->codigoError = $e->getCode();
            $this->textoError = $e->getMessage();
        }

    }
}


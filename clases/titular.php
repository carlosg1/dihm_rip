<?php

// Clase de funciones genericas
include_once "../clases/dihm_core.php";

class Titular {
    private $conexion;
    public $codigoError;
    public $textoError;

    public function __construct($conexion) {
        $this->conexion = $conexion;
        $this->codigoError = 0;
        $this->textoError = '';
    }

    public function __destruct() {
        // Cerrar la conexión a la base de datos.
        if ($this->conexion) {
            $this->conexion->close();
        }
    }

    function insertarRegistro($cuit_titular, $apellido, $nombre, $telefono, $cuit) {
        try {

            $dihmCore = new DIHM_Core("titular");

            // verifica si existe el registro
            $stmt_ver = $this->conexion->prepare('SELECT id, cuit_titular, apellido, nombre, telefono, cuit FROM sys_dihm_01_titular WHERE cuit = ? LIMIT 1');
            $stmt_ver->bind_param('s', $cuit);
            $stmt_ver->execute();
            $stmt_ver->store_result();

            if($stmt_ver->num_rows > 0) {

                $stmt_ver->bind_result($id_registro, $DBcuit_titular, $DBapellido, $DBnombre, $DBtelefono, $DBcuit);
                $stmt_ver->fetch();
                $stmt_ver->free_result();

                // Comparar los valores recién ingresados con los almacenados en la base de datos
                $cuit_titular = $dihmCore->comparaValores($cuit_titular, $DBcuit_titular);
                $apellido     = $dihmCore->comparaValores($apellido, $DBapellido);
                $nombre       = $dihmCore->comparaValores($nombre, $DBnombre);
                $telefono     = $dihmCore->comparaValores($telefono, $DBtelefono);

                $stmt_upd = $this->conexion->prepare('UPDATE sys_dihm_01_titular SET cuit_titular = ?, apellido = ?, nombre = ?, telefono = ? WHERE id = ?');
                $stmt_upd->bind_param('ssssi', $cuit_titular, $apellido, $nombre, $telefono, $id_registro);
                $stmt_upd->execute();

            } else {

                // Preparar la consulta
                $stmt_ins = $this->conexion->prepare('INSERT INTO sys_dihm_01_titular (cuit_titular, apellido, nombre, telefono, cuit) VALUES (?, ?, ?, ?, ?)');
                // Vincular los parámetros
                $stmt_ins->bind_param('sssss', $cuit_titular, $apellido, $nombre, $telefono, $cuit);
                // Ejecutar la consulta
                $stmt_ins->execute();

            }
        } catch (mysqli_sql_exception $e) {
            $this->codigoError = $e->getCode();
            $this->textoError = $e->getMessage();
        }
    }
}

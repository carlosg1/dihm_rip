<?php

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
            // Preparar la consulta
            $stmt = $this->conexion->prepare('INSERT INTO sys_dihm_01_titular (cuit_titular, apellido, nombre, telefono, cuit) VALUES (?, ?, ?, ?, ?)');
            // Vincular los parámetros
            $stmt->bind_param('sssss', $cuit_titular, $apellido, $nombre, $telefono, $cuit);
            // Ejecutar la consulta
            $stmt->execute();
        } catch (mysqli_sql_exception $e) {
            $this->codigoError = $e->getCode();
            $this->textoError = $e->getMessage();
        }
    }
}

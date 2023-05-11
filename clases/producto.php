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

    function insertarRegistro($id_producto, $anio, $unidad_medida, $cantidad_mensual, $cantidad_anual, $porcentaje) {
        try {
            // Preparar la consulta
            $stmt = $this->conexion->prepare('INSERT INTO sys_dihm_01_producto_cantidad (id_producto, anio, unidad_medida, cantidad_mensual, cantidad_anual, porcentaje) VALUES (?, ?, ?, ?, ?, ?)');
            // Vincular los parámetros
            $stmt->bind_param('isssdd', $id_producto, $anio, $unidad_medida, $cantidad_mensual, $cantidad_anual, $porcentaje);
            // Ejecutar la consulta
            $stmt->execute();
        } catch (mysqli_sql_exception $e) {
            $this->codigoError = $e->getCode();
            $this->textoError = $e->getMessage();
        }
    }
    

}

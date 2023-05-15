<?php

class Comercializacion {

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

    public function insertarRegistro($param) {

        //
        try {
            // Iniciar la transacción
            $this->conexion->begin_transaction();

            // inserta en tabla 'sys_dihm_01_produccion'
            // Preparar la consulta
            $stmt_comercializacion = $this->conexion->prepare('INSERT INTO sys_dihm_01_comercializacion (cuit, tipo_mercado, porcentaje_venta_consumidor_final, porcentaje_venta_mayorista) VALUES (?, ?, ?, ?)');

            $stmt_comercializacion->bind_param('sisdd', $cuit, $tipo_mercado, $porcentaje_venta_consumidor_final, $porcentaje_venta_mayorista);

            // Ejecutar la consulta
            $stmt_comercializacion->execute();

            $this->conexion->commit();

            $stmt_comercializacion = null;

        } catch (mysqli_sql_exception $e) {
            // En caso de error, deshacer los cambios
            $this->conexion->rollback();
            $this->codigoError = $e->getCode();
            $this->textoError = $e->getMessage();
        }
    }

}

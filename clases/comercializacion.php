<?php

// Clase de funciones genericas
include_once "../clases/dihm_core.php";

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

            $stmt_comercializacion->bind_param('ssdd', $param['cuit'], $param['tipo_mercado'], $param['porcentaje_venta_consumidor_final'], $param['porcentaje_venta_mayorista']);

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

    public function actualizaPuntoVenta($param) {
        try {
            $dihmCore = new DIHM_Core("comercializacion");

            $stmt_pv_existe = $this->conexion->prepare('SELECT * FROM `sys_dihm_01_plataforma_venta` t1 WHERE t1.cuit = ? ');
            $stmt_pv_existe->bind_param('s', $param['cuit']);
            $stmt_pv_existe->execute();
            $stmt_pv_existe->store_result();

            if($stmt_pv_existe->num_rows > 0) {
                $stmt_pv_existe->bind_result($id_registro, $cuit, $propio, $de_tercero, $en_fabrica, $tiktok, $facebook, $instagram, $whatsapp, $otro, $virtual_propia, $virtual_de_tercero);
                $stmt_pv_existe->fetch();
                $stmt_pv_existe->free_result();

                // comparo valores
                $propio = $dihmCore->comparaValores($param['propio'], $propio);
                $de_tercero = $dihmCore->comparaValores($param['de_tercero'], $de_tercero);
                $de_tercero = $dihmCore->comparaValores($param['de_tercero'], $de_tercero);
            } else {

            }

        } catch (mysqli_sql_exception $e) {
            // En caso de error, deshacer los cambios
            $this->conexion->rollback();
            $this->codigoError = $e->getCode();
            $this->textoError = $e->getMessage();
        }
    }
}

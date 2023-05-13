<?php

class Produccion {

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

    function insertarRegistro($cuit, $cant_obrador, $cant_planta_ind, $superficie_terreno, $superficie_cubierta, $superficie_semi_cubierta, $cantidad_maquinas, $potencia_instalada, $consumo_electrico) {

        // variables locales
        $anio_actual = date('Y');
        $anio_anterior = $anio_actual - 1;

        try {
            // Iniciar la transacción
            $this->conexion->begin_transaction();

            // inserta en tabla 'sys_dihm_01_produccion'
            // Preparar la consulta
            $stmt = $this->conexion->prepare('INSERT INTO sys_dihm_01_produccion (cuit, cant_obrador, cant_planta_ind, superficie_terreno, superficie_cubierta, superficie_semi_cubierta, cantidad_maquinas, potencia_instalada, consumo_electrico) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');

            // Vincular los parámetros
            $stmt->bind_param('siidddidd', $cuit, $cant_obrador, $cant_planta_ind, $superficie_terreno, $superficie_cubierta, $superficie_semi_cubierta, $cantidad_maquinas, $potencia_instalada, $consumo_electrico);

            // Ejecutar la consulta
            $stmt->execute();

            $this->conexion->commit();

        } catch (mysqli_sql_exception $e) {
            // En caso de error, deshacer los cambios
            $this->conexion->rollback();
            $this->codigoError = $e->getCode();
            $this->textoError = $e->getMessage();
        }
    }
    

}

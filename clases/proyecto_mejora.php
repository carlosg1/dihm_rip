<?php

class ProyectoMejora {

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
            $stmt = $this->conexion->prepare('INSERT INTO sys_dihm_01_proyecto_mejora (cuit, id_proyecto_mejora_tipo, estado_proyecto, porcentaje_avance, plazo_implementacion, fuente_financiamiento, monto_estimado_inversion, asistencia_tecnica_necesaria, necesidad_mas_relevante) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');

            $stmt->bind_param('sisdssdss', 
                $param['cuit'], 
                $param['id_proyecto_mejora_tipo'], 
                $param['estado_proyecto'], 
                $param['porcentaje_avance'], 
                $param['plazo_implementacion'],
                $param['fuente_financiamiento'],
                $param['monto_estimado_inversion'],
                $param['asistencia_tecnica_necesaria'],
                $param['necesidad_mas_relevante']
            );

            // Ejecutar la consulta
            $stmt->execute();

            $this->conexion->commit();

            $stmt = null;

        } catch (mysqli_sql_exception $e) {
            // En caso de error, deshacer los cambios
            $this->conexion->rollback();
            $this->codigoError = $e->getCode();
            $this->textoError = $e->getMessage();
        }
    }

}

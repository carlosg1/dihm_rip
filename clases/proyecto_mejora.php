<?php
// Clase de funciones genericas
include_once "../clases/dihm_core.php";

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
        $dihmCore = new DIHM_Core("proyectoMejora");
        //
        try {
            // Iniciar la transacción
            $this->conexion->begin_transaction();

            foreach($param as $i => $v) {

                // _pm_ = proyecto_mejora
                $stmt_pm_existe = $this->conexion->prepare('SELECT * FROM sys_dihm_01_proyecto_mejora WHERE cuit = ? AND id_proyecto_mejora_tipo = ?');
                $stmt_pm_existe->bind_param('si', $v['cuit'], $v['id_proyecto_mejora_tipo']);
                $stmt_pm_existe->execute(); 
                $stmt_pm_existe->store_result();

                if($stmt_pm_existe->num_rows > 0) {

                    $stmt_pm_existe->bind_result($id, $cuit, $id_proyecto_mejora_tipo, $estado_proyecto, $porcentaje_avance, $plazo_implementacion, $fuente_financiamiento, $monto_estimado_inversion, $asistencia_tecnica_necesaria, $necesidad_mas_relevante);

                    $stmt_pm_existe->fetch();

                    $stmt_pm_existe->free_result();

                    // Comparar los valores 
                    $estado_proyecto = $dihmCore->comparaValores($v['estado_proyecto'], $estado_proyecto);
                    $porcentaje_avance = $dihmCore->comparaValores($v['porcentaje_avance'], $porcentaje_avance);
                    $plazo_implementacion = $dihmCore->comparaValores($v['plazo_implementacion'], $plazo_implementacion);
                    $fuente_financiamiento = $dihmCore->comparaValores($v['fuente_financiamiento'], $fuente_financiamiento);
                    $monto_estimado_inversion = $dihmCore->comparaValores($v['monto_estimado_inversion'], $monto_estimado_inversion);
                    $asistencia_tecnica_necesaria = $dihmCore->comparaValores($v['asistencia_tecnica_necesaria'], $asistencia_tecnica_necesaria);
                    $necesidad_mas_relevante = $dihmCore->comparaValores($v['necesidad_mas_relevante'], $necesidad_mas_relevante);

                    $stmt_pm_upd = $this->conexion->prepare('UPDATE sys_dihm_01_proyecto_mejora SET estado_proyecto = ?, porcentaje_avance = ?, plazo_implementacion = ?, fuente_financiamiento = ?, monto_estimado_inversion = ?, asistencia_tecnica_necesaria = ?, necesidad_mas_relevante = ? WHERE id = ?');

                    $stmt_pm_upd->bind_param('sdssdssi', $estado_proyecto, $porcentaje_avance, $plazo_implementacion, $fuente_financiamiento, $monto_estimado_inversion, $asistencia_tecnica_necesaria, $necesidad_mas_relevante, $id);

                    $stmt_pm_upd->execute();

                    $stmt_pm_upd->free_result();

                } else {

                    $stmt_pm_existe->free_result();

                    // inserta en tabla 'sys_dihm_01_produccion'
                    $stmt_pm_ins = $this->conexion->prepare('INSERT INTO sys_dihm_01_proyecto_mejora (cuit, id_proyecto_mejora_tipo, estado_proyecto, porcentaje_avance, plazo_implementacion, fuente_financiamiento, monto_estimado_inversion, asistencia_tecnica_necesaria, necesidad_mas_relevante) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');

                    $stmt_pm_ins->bind_param('sisdssdss', 
                        $v['cuit'], 
                        $v['id_proyecto_mejora_tipo'], 
                        $v['estado_proyecto'], 
                        $v['porcentaje_avance'], 
                        $v['plazo_implementacion'],
                        $v['fuente_financiamiento'],
                        $v['monto_estimado_inversion'],
                        $v['asistencia_tecnica_necesaria'],
                        $v['necesidad_mas_relevante']
                    );

                    $stmt_pm_ins->execute();

                    $stmt_pm_ins->free_result();

                }
            } // foreach

            $this->conexion->commit();

        } catch (mysqli_sql_exception $e) {
            // En caso de error, deshacer los cambios
            $this->conexion->rollback();
            $this->codigoError = $e->getCode();
            $this->textoError = $e->getMessage();
        }
    }

    // public function insertarRegistro1($param) {

    //     //
    //     try {
    //         // Iniciar la transacción
    //         $this->conexion->begin_transaction();

    //         // inserta en tabla 'sys_dihm_01_produccion'
    //         // Preparar la consulta
    //         $stmt = $this->conexion->prepare('INSERT INTO sys_dihm_01_proyecto_mejora (cuit, id_proyecto_mejora_tipo, estado_proyecto, porcentaje_avance, plazo_implementacion, fuente_financiamiento, monto_estimado_inversion, asistencia_tecnica_necesaria, necesidad_mas_relevante) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');

    //         $stmt->bind_param('sisdssdss', 
    //             $param['cuit'], 
    //             $param['id_proyecto_mejora_tipo'], 
    //             $param['estado_proyecto'], 
    //             $param['porcentaje_avance'], 
    //             $param['plazo_implementacion'],
    //             $param['fuente_financiamiento'],
    //             $param['monto_estimado_inversion'],
    //             $param['asistencia_tecnica_necesaria'],
    //             $param['necesidad_mas_relevante']
    //         );

    //         // Ejecutar la consulta
    //         $stmt->execute();

    //         $this->conexion->commit();

    //         $stmt = null;

    //     } catch (mysqli_sql_exception $e) {
    //         // En caso de error, deshacer los cambios
    //         $this->conexion->rollback();
    //         $this->codigoError = $e->getCode();
    //         $this->textoError = $e->getMessage();
    //     }
    // }

}

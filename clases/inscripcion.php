<?php
// Clase de funciones genericas
include_once "../clases/dihm_core.php";

class Inscripcion {
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

    public function actualizaPeriodoRegistro($p) {
        try {
            $dihmCore = new DIHM_Core("inscripcion");

            // Iniciar la transacción
            $this->conexion->begin_transaction();

            // verifica si la empresa ya esta cargada en `cab_empresa`
            $stmt_1 = $this->conexion->prepare('SELECT t1.id_sysdihm01 AS id, t1.sysdihm01_cuit AS cuit, t1.estado_registro, t1.fecha_estado_registro FROM `sys_dihm_01_cab_empresa` t1 WHERE t1.cuit = ?');
            $stmt_1->bind_param('s', $p['cuit']);
            $stmt_1->execute(); 
            $stmt_1->store_result();

            if($stmt_1->num_rows > 0) {
                $stmt_1->bind_result($id, $cuit, $estado_registro, $fecha_estado_registro);
                $stmt_1->fetch();
                $stmt_1->free_result();

                // compara valores ingresados en formulario con los de la tabla `cab_empresa`
                $estado_registro = $dihmCore->comparaValores($p['estado_registro'], $estado_registro);
                $fecha_estado_registro = $dihmCore->comparaValores($p['ano_registro'] . '-' . $p['mes_registro'] . '-01', $fecha_estado_registro);
                $fecha_estado_registro = $dihmCore->comparaValores($p['ano_registro'] . '-' . $p['mes_registro'] . '-01', $fecha_estado_registro);

                $stmt_2 = $this->conexion->prepare('UPDATE `sys_dihm_01_cab_empresa` SET estado_registro = ?, fecha_estado_registro = ? WHERE `id_sysdihm01` = ?');
                $stmt_2->bind_param('ssi', $estado_registro, $fecha_estado_registro, $id);
                $stmt_2->execute();
                $stmt_2->free_result();
            } else {
                $stmt_1->free_result();

                $stmt_2 = $this->conexion->prepare('INSERT INTO `sys_dihm_01_cab_empresa` (sysdihm01_cuit, estado_registro, fecha_estado_registro) VALUES ?, ?, ?');
                $stmt_2->bind_param('sss', $p['cuit'], $p['estado_registro'], $p['fecha_estado_registro']);
                $stmt_2->execute();
                $stmt_2->free_result();
            }

            $stmt_1 = null; $stmt_2 = null;

            // verifica si la localidad ya esta cargada en la tabla `sys_dihm_01_localidad_empresa`
            $stmt_1 = $this->conexion->prepare('SELECT t1.id, t1.cuit, t1.localidad FROM `sys_dihm_01_localidad_empresa` t1 WHERE t1.cuit =?');
            $stmt_1->bind_param('s', $p['cuit']);
            $stmt_1->execute();
            $stmt_1->store_result();

            // contar registros

            $this->conexion->commit();
        } catch (mysqli_sql_exception $e) {
            // En caso de error, deshacer los cambios
            $this->conexion->rollback();
            $this->codigoError = $e->getCode();
            $this->textoError = $e->getMessage();
        }
    }
}


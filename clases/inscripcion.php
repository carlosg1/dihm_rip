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
            $stmt_1 = $this->conexion->prepare('SELECT t1.id_sysdihm01 AS id, t1.sysdihm01_cuit AS cuit, t1.estado_registro, t1.fecha_estado_registro FROM `sys_dihm_01_cab_empresa` t1 WHERE t1.sysdihm01_cuit = ?');
            $stmt_1->bind_param('s', $p['cuit']);
            $stmt_1->execute(); 
            $stmt_1->store_result();

            // cantidad de registros
            if($stmt_1->num_rows > 0) {
                $stmt_1->bind_result($id, $cuit, $estado_registro, $fecha_estado_registro);
                $stmt_1->fetch();
                $stmt_1->free_result();

                // compara valores ingresados en formulario con los de la tabla `cab_empresa`
                $estado_registro = $dihmCore->comparaValores($p['estado_registro'], $estado_registro);
                $fecha_estado_registro = $dihmCore->comparaValores($p['ano_registro'] . '-' . $p['mes_registro'] . '-01', $fecha_estado_registro);

                $stmt_2 = $this->conexion->prepare('UPDATE `sys_dihm_01_cab_empresa` SET estado_registro = ?, fecha_estado_registro = ? WHERE `id_sysdihm01` = ?');
                $stmt_2->bind_param('ssi', $estado_registro, $fecha_estado_registro, $id);
                $stmt_2->execute();
                $stmt_2->free_result();
            } else {
                $stmt_1->free_result();

                $stmt_2 = $this->conexion->prepare('INSERT INTO `sys_dihm_01_cab_empresa` (sysdihm01_cuit, estado_registro, fecha_estado_registro) VALUES (?, ?, ?)');
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
            if($stmt_1->num_rows > 0) {
                $stmt_1->bind_result($id, $cuit, $localidad);
                $stmt_1->fetch();
                $stmt_1->free_result();

                // compara valores ingresados en formulario con los de la tabla `cab_empresa`
                $localidad = $dihmCore->comparaValores($p['localidad'], $localidad);

                $stmt_2 = $this->conexion->prepare('UPDATE `sys_dihm_01_localidad_empresa` SET localidad = ? WHERE id = ?');
                $stmt_2->bind_param('si', $localidad, $id);
                $stmt_2->execute();
                $stmt_2->free_result();
            } else {
                $stmt_1->free_result();

                $stmt_2 = $this->conexion->prepare('INSERT INTO `sys_dihm_01_localidad_empresa` (cuit, localidad) VALUES (?, ?)');
                $stmt_2->bind_param('ss', $p['cuit'], $p['localidad']);
                $stmt_2->execute();
                $stmt_2->free_result();
            }

            $this->conexion->commit();
        } catch (mysqli_sql_exception $e) {
            // En caso de error, deshacer los cambios
            $this->conexion->rollback();
            $this->codigoError = $e->getCode();
            $this->textoError = $e->getMessage();
        }
    }

    public function actualizaDatosDeLaEmpresa($p) {
        try {
            $dihmCore = new DIHM_Core("inscripcion");

            $p['inicio_actividad'] = $dihmCore->fechaParaMariaDB($p['inicio_actividad']);

            // Iniciar la transacción
            $this->conexion->begin_transaction();

            // verifica si la empresa ya esta cargada en `cab_empresa`
            $stmt_1 = $this->conexion->prepare('SELECT t1.id_sysdihm01 AS id, t1.sysdihm01_cuit AS cuit, t1.sysdihm01_razon_social AS razon_social, t1.sysdihm01_inicio_actividad AS inicio_actividad, t1.relacion_titular_planta FROM `sys_dihm_01_cab_empresa` t1 WHERE t1.sysdihm01_cuit = ?');
            $stmt_1->bind_param('s', $p['cuit']);
            $stmt_1->execute(); 
            $stmt_1->store_result();

            // verifica si hay registros
            if($stmt_1->num_rows > 0) {
                $stmt_1->bind_result($id, $cuit, $razon_social, $inicio_actividad, $relacion_titular_planta);
                $stmt_1->fetch();
                $stmt_1->free_result();

                // compara valores ingresados en formulario con los de la tabla `cab_empresa`
                $razon_social = $dihmCore->comparaValores($p['razon_social'], $razon_social);
                $inicio_actividad = $dihmCore->comparaValores($p['inicio_actividad'], $inicio_actividad);
                $relacion_titular_planta = $dihmCore->comparaValores($p['relacion_titular_planta'], $relacion_titular_planta);

                $stmt_2 = $this->conexion->prepare('UPDATE `sys_dihm_01_cab_empresa` SET sysdihm01_razon_social = ?, sysdihm01_inicio_actividad = ?, relacion_titular_planta = ? WHERE `id_sysdihm01` = ?');
                $stmt_2->bind_param('ssii', $razon_social, $inicio_actividad, $relacion_titular_planta, $id);
                $stmt_2->execute();
                $stmt_2->free_result();
            } else {
                $stmt_1->free_result();

                $stmt_2 = $this->conexion->prepare('INSERT INTO `sys_dihm_01_cab_empresa` (sysdihm01_cuit, sysdihm01_razon_social, sysdihm01_inicio_actividad, relacion_titular_planta) VALUES (?, ?, ?, ?)');
                $stmt_2->bind_param('sssi', $p['cuit'], $p['razon_social'], $p['inicio_actividad'], $p['relacion_titular_planta']);
                $stmt_2->execute();
                $stmt_2->free_result();
            }

            $stmt_1 = null; $stmt_2 = null;

            $this->conexion->commit();
        } catch (mysqli_sql_exception $e) {
            // En caso de error, deshacer los cambios
            $this->conexion->rollback();
            $this->codigoError = $e->getCode();
            $this->textoError = $e->getMessage();
        }
    }

}


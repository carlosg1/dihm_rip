<?php

class Administracion {

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
            $stmt_admin = $this->conexion->prepare('INSERT INTO sys_dihm_01_administracion (cuit, total_empleado, miembro_familia, propietario, accionista) VALUES (?, ?, ?, ?, ?)');

            $stmt_admin->bind_param('siiii', $param['cuit'], $param['total_empleado'], $param['miembro_familia'], $param['propietario'], $param['accionista']);

            // Ejecutar la consulta
            $stmt_admin->execute();

            $this->conexion->commit();

            $stmt_admin = null;

        } catch (mysqli_sql_exception $e) {
            // En caso de error, deshacer los cambios
            $this->conexion->rollback();
            $this->codigoError = $e->getCode();
            $this->textoError = $e->getMessage();
        }
    }

}

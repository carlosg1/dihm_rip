<?php

class Producto {

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

    function insertarRegistro( /* tabla 'variedad_producto' */ $cuit, $variedad_producto, $descripcion, /* tabla 'producto_cantidad' */ $desc_producto, $unidad_medida, $cantidad_mensual, $cantidad_anual, $porcentaje, /* tabla 'producto_proyectado' */ $cant_mensual_proyec, $cant_anual_proy, $porcentaje_proyec) {

        // variables locales
        $anio_actual = date('Y');
        $anio_anterior = $anio_actual - 1;

        try {
            // Iniciar la transacción
            $this->conexion->begin_transaction();

            // inserta en tabla 'variedad_producto'
            // Preparar la consulta
            $stmt = $this->conexion->prepare('INSERT INTO sys_dihm_01_variedad_producto (cuit, codigo, descripcion) VALUES (?, ?, ?)');

            // Vincular los parámetros
            $stmt->bind_param('sis', $cuit, $variedad_producto, $descripcion);

            // Ejecutar la consulta
            $stmt->execute();

            // Obtener el mayor valor del campo 'id_producto' de la tabla 'sys_dihm_01_producto_cantidad'
            $stmt = $this->conexion->prepare('SELECT MAX(id_producto) as max_id_producto FROM sys_dihm_01_producto_cantidad WHERE cuit = ?');

            $stmt->bind_param('s', $cuit);
            $stmt->execute();
            $resultado = $stmt->get_result();
            $fila = $resultado->fetch_assoc();

            // Obtener el nuevo valor para el campo 'id_producto'
            if ($fila['max_id_producto'] == null) {
                $id_producto = 1;
            } else {
                $id_producto = $fila['max_id_producto'] + 1;
            }

            // inserta en tabla 'producto_cantidad'
            // Preparar la consulta
            $stmt = $this->conexion->prepare('INSERT INTO sys_dihm_01_producto_cantidad (cuit, id_producto, anio, desc_producto, unidad_medida, cantidad_mensual, cantidad_anual, porcentaje) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');

            // Vincular los parámetros
            $stmt->bind_param('sisssiid', $cuit, $id_producto, $anio_anterior, $desc_producto, $unidad_medida, $cantidad_mensual, $cantidad_anual, $porcentaje);

            // Ejecutar la consulta
            $stmt->execute();

            // inserta en tabla 'producto_proyectado'
            // Preparar la consulta
            $stmt = $this->conexion->prepare('INSERT INTO sys_dihm_01_producto_proyectado (id_producto, anio, unidad_medida, cantidad_mensual, cantidad_anual, porcentaje) VALUES (?, ?, ?, ?, ?, ?)');
            
            // Vincular los parámetros
            $stmt->bind_param('isssdd', $id_producto, $anio_actual, $unidad_medida, $cant_mensual_proyec, $cant_anual_proy, $porcentaje_proyec);

            // Ejecutar la consulta
            $stmt->execute();

            // Confirmar la transacción
            $this->conexion->commit();

        } catch (mysqli_sql_exception $e) {
            // En caso de error, deshacer los cambios
            $this->conexion->rollback();
            $this->codigoError = $e->getCode();
            $this->textoError = $e->getMessage();
        }
    }
    

}

<?php

// Clase de funciones genericas
include_once "../clases/dihm_core.php";

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

    // esta es la primer funcion que hice, la reemplazo por la que tiene un array como parametro
    // function insertarRegistro_1( /* tabla 'variedad_producto' */ $cuit, $variedad_producto, $descripcion, /* tabla 'producto_cantidad' */ $desc_producto, $unidad_medida, $cantidad_mensual, $cantidad_anual, $porcentaje, /* tabla 'producto_proyectado' */ $cant_mensual_proyec, $cant_anual_proy, $porcentaje_proyec) {

    //     // variables locales
    //     $anio_actual = date('Y');
    //     $anio_anterior = $anio_actual - 1;

    //     try {
    //         // Iniciar la transacción
    //         $this->conexion->begin_transaction();

    //         // inserta en tabla 'variedad_producto'
    //         // Preparar la consulta
    //         $stmt = $this->conexion->prepare('INSERT INTO sys_dihm_01_variedad_producto (cuit, codigo, descripcion) VALUES (?, ?, ?)');

    //         // Vincular los parámetros
    //         $stmt->bind_param('sis', $cuit, $variedad_producto, $descripcion);

    //         // Ejecutar la consulta
    //         $stmt->execute();

    //         // Obtener el mayor valor del campo 'id_producto' de la tabla 'sys_dihm_01_producto_cantidad'
    //         $stmt = $this->conexion->prepare('SELECT MAX(id_producto) as max_id_producto FROM sys_dihm_01_producto_cantidad WHERE cuit = ?');

    //         $stmt->bind_param('s', $cuit);
    //         $stmt->execute();
    //         $resultado = $stmt->get_result();
    //         $fila = $resultado->fetch_assoc();

    //         // Obtener el nuevo valor para el campo 'id_producto'
    //         if ($fila['max_id_producto'] == null) {
    //             $id_producto = 1;
    //         } else {
    //             $id_producto = $fila['max_id_producto'] + 1;
    //         }

    //         // inserta en tabla 'producto_cantidad'
    //         // Preparar la consulta
    //         $stmt = $this->conexion->prepare('INSERT INTO sys_dihm_01_producto_cantidad (cuit, id_producto, anio, desc_producto, unidad_medida, cantidad_mensual, cantidad_anual, porcentaje) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');

    //         // Vincular los parámetros
    //         $stmt->bind_param('sisssiid', $cuit, $id_producto, $anio_anterior, $desc_producto, $unidad_medida, $cantidad_mensual, $cantidad_anual, $porcentaje);

    //         // Ejecutar la consulta
    //         $stmt->execute();

    //         // inserta en tabla 'producto_proyectado'
    //         // Preparar la consulta
    //         $stmt = $this->conexion->prepare('INSERT INTO sys_dihm_01_producto_proyectado (id_producto, anio, unidad_medida, cantidad_mensual, cantidad_anual, porcentaje) VALUES (?, ?, ?, ?, ?, ?)');
            
    //         // Vincular los parámetros
    //         $stmt->bind_param('isssdd', $id_producto, $anio_actual, $unidad_medida, $cant_mensual_proyec, $cant_anual_proy, $porcentaje_proyec);

    //         // Ejecutar la consulta
    //         $stmt->execute();

    //         // Confirmar la transacción
    //         $this->conexion->commit();

    //     } catch (mysqli_sql_exception $e) {
    //         // En caso de error, deshacer los cambios
    //         $this->conexion->rollback();
    //         $this->codigoError = $e->getCode();
    //         $this->textoError = $e->getMessage();
    //     }
    // }
    

    // recibo parametro como array de los principales productos
    function insertarRegistro($cuit, $variedad_producto, $descripcion, $principales_productos) {

        // variables locales
        $anio_actual = date('Y');
        $anio_anterior = $anio_actual - 1;
        $dihmCore = new DIHM_Core("cabEmpresa");

        try {
            // Iniciar la transacción
            $this->conexion->begin_transaction();

            // sentencias prepare para sys_dihm_01_cab_producto
            $stmt_cab_prod_existe = $this->conexion->prepare('SELECT * FROM sys_dihm_01_cab_producto WHERE (cuit = ? AND id_producto = ?) LIMIT 1');
            $stmt_cab_prod_ins = $this->conexion->prepare('INSERT INTO sys_dihm_01_cab_producto (cuit, id_producto, denominacion) VALUES (?, ?, ?)');
            $stmt_cab_prod_upd = $this->conexion->prepare('UPDATE sys_dihm_01_cab_producto SET denominacion = ? WHERE id = ?');

            // sentencias prepare para 'sys_dihm_01_producto_cantidad'
            $stmt_prod_cant_existe = $this->conexion->prepare('SELECT * FROM sys_dihm_01_producto_cantidad WHERE (cuit = ? AND id_producto = ? AND anio = ?) LIMIT 1');
            $stmt_prod_cant_ins = $this->conexion->prepare('INSERT INTO sys_dihm_01_producto_cantidad (cuit, id_producto, anio, unidad_medida, cantidad_mensual, cantidad_anual, porcentaje) VALUES (?, ?, ?, ?, ?, ?, ?)');
            $stmt_prod_cant_upd = $this->conexion->prepare('UPDATE sys_dihm_01_producto_cantidad SET unidad_medida = ?, cantidad_mensual = ?, cantidad_anual = ?, porcentaje = ? WHERE id = ?');

            // sentencias prepare para 'sys_dihm_01_producto_proyectado'
            $stmt_prod_proy_existe = $this->conexion->prepare('SELECT * FROM sys_dihm_01_producto_proyectado WHERE (cuit = ? AND id_producto = ? AND anio = ?) LIMIT 1');
            $stmt_prod_proy_ins = $this->conexion->prepare('INSERT INTO sys_dihm_01_producto_proyectado (cuit, id_producto, anio, unidad_medida, cantidad_mensual, cantidad_anual, porcentaje) VALUES (?, ?, ?, ?, ?, ?, ?)');
            $stmt_prod_proy_upd = $this->conexion->prepare('UPDATE sys_dihm_01_producto_proyectado SET unidad_medida = ?, cantidad_mensual = ?, cantidad_anual = ?, porcentaje = ? WHERE id = ?');

            foreach($principales_productos as $indice1 => $valor1) {

                // tabla sys_dihm_01_cab_producto
                $stmt_cab_prod_existe->bind_param('si', $cuit, $indice1);
                $stmt_cab_prod_existe->execute();
                $stmt_cab_prod_existe->store_result();

                if($stmt_cab_prod_existe->num_rows > 0) {
                    $stmt_cab_prod_existe->bind_result($id_reigstro, $bd_cuit, $bd_id_producto, $bd_denominacion);
                    $stmt_cab_prod_existe->fetch();
                    $stmt_cab_prod_existe->free_result();

                    $denominacion = $dihmCore->comparaValores($principales_productos['denominacion'], $bd_denominacion);

                    $stmt_cab_prod_upd->bind_param('si', $denominacion, $id_reigstro);
                    $stmt_cab_prod_existe->execute();
                } else {
                    $stmt_cab_prod_existe->free_result();
                    $stmt_cab_prod_ins->bind_param('sis', $cuit, $indice1, $principales_productos[$indice1]['denominacion']);
                    $stmt_cab_prod_ins->execute();
                }

                // tabla 'sys_dihm_01_producto_cantidad'
                $stmt_prod_cant_existe->bind_param('sis', $cuit, $indice1, $anio_anterior);
                $stmt_prod_cant_existe->execute();
                $stmt_prod_cant_existe->store_result();

                if($stmt_prod_cant_existe->num_rows > 0) {
                    $stmt_prod_cant_existe->bind_result($id_registro_prod_cant, $bd_cuit, $bd_id_producto, $bd_anio, $bd_unidad_medida, $bd_cantidad_mensual, $bd_cantidad_anual, $bd_porcentaje);
                    $stmt_prod_cant_existe->fetch();
                    $stmt_prod_cant_existe->free_result();

                    $unidad_medida = $dihmCore->comparaValores($principales_productos[$indice1]['unidad_medida'], $bd_unidad_medida);
                    $cantidad_mensual = $dihmCore->comparaValores($principales_productos[$indice1]['real_anio_anterior']['cant_mensual'], $bd_cantidad_mensual);
                    $cantidad_anual = $dihmCore->comparaValores($principales_productos[$indice1]['real_anio_anterior']['cant_anual'], $bd_cantidad_anual);
                    $porcentaje = $dihmCore->comparaValores($principales_productos[$indice1]['real_anio_anterior']['porc_partic'], $bd_porcentaje);

                    $stmt_prod_cant_upd->bind_param('siidi', $unidad_medida, $cantidad_mensual, $cantidad_anual, $porcentaje, $id_registro_prod_cant);
                    $stmt_prod_cant_upd->execute();
                } else {
                    $stmt_prod_cant_existe->free_result();

                    $stmt_prod_cant_ins->bind_param('sissiid', $cuit, $indice1, $anio_anterior, $principales_productos[$indice1]['unidad_medida'], $principales_productos[$indice1]['real_anio_anterior']['cant_mensual'], $principales_productos[$indice1]['real_anio_anterior']['cant_anual'], $principales_productos[$indice1]['real_anio_anterior']['porc_partic']);
                    $stmt_prod_cant_ins->execute();
                }

                // tabla 'sys_dihm_01_producto_proyectado'
                $stmt_prod_proy_existe->bind_param('sis', $cuit, $indice1, $anio_actual);
                $stmt_prod_proy_existe->execute();
                $stmt_prod_proy_existe->store_result();

                if($stmt_prod_proy_existe->num_rows > 0) {
                    $stmt_prod_proy_existe->bind_result($id_registro_prod_proy, $bd_cuit_prod_proy, $bd_id_producto_prod_proy, $bd_anio_prod_proy, $bd_unidad_medida_prod_proy, $bd_cantidad_mensual_prod_proy, $bd_cantidad_anual_prod_proy, $bd_porcentaje_prod_proy);
                    $stmt_prod_proy_existe->fetch();
                    $stmt_prod_proy_existe->free_result();

                    $bd_unidad_medida_prod_proy = $dihmCore->comparaValores($principales_productos[$indice1]['unidad_medida'], $bd_unidad_medida_prod_proy);
                    $bd_cantidad_mensual_prod_proy = $dihmCore->comparaValores($principales_productos[$indice1]['proyectado_anio_vigente']['cant_mensual'], $bd_cantidad_mensual_prod_proy);
                    $bd_cantidad_anual_prod_proy = $dihmCore->comparaValores($principales_productos[$indice1]['proyectado_anio_vigente']['cant_anual'], $bd_cantidad_anual_prod_proy);
                    $bd_porcentaje_prod_proy = $dihmCore->comparaValores($principales_productos[$indice1]['proyectado_anio_vigente']['porc_partic'], $bd_porcentaje_prod_proy);

                    $stmt_prod_proy_upd->bind_param('siidi', $bd_unidad_medida_prod_proy, $bd_cantidad_mensual_prod_proy, $bd_cantidad_anual_prod_proy, $bd_porcentaje_prod_proy, $id_registro_prod_proy);
                    $stmt_prod_proy_upd->execute();

                } else {
                    $stmt_prod_proy_existe->free_result();

                    $stmt_prod_proy_ins->bind_param('sissiid', $cuit, $indice1, $anio_actual, $principales_productos[$indice1]['unidad_medida'], $principales_productos[$indice1]['proyectado_anio_vigente']['cant_mensual'], $principales_productos[$indice1]['proyectado_anio_vigente']['cant_anual'], $principales_productos[$indice1]['proyectado_anio_vigente']['porc_partic']);
                    $stmt_prod_proy_ins->execute();
                }
            }

            // inserta en tabla 'variedad_producto'
            $stmt_var_prod = $this->conexion->prepare('INSERT INTO sys_dihm_01_variedad_producto (cuit, codigo, descripcion) VALUES (?, ?, ?)');
            $stmt_var_prod->bind_param('sis', $cuit, $variedad_producto, $descripcion);
            $stmt_var_prod->execute();

            // //
            // // A PARTIR DE ACA SE REESCRIBE EL CODIGO // //
            // //
            // Obtener el mayor valor del campo 'id_producto' de la tabla 'sys_dihm_01_producto_cantidad'
            // $stmt = $this->conexion->prepare('SELECT MAX(id_producto) as max_id_producto FROM sys_dihm_01_producto_cantidad WHERE cuit = ?');

            // $stmt->bind_param('s', $cuit);
            // $stmt->execute();
            // $resultado = $stmt->get_result();
            // $fila = $resultado->fetch_assoc();

            // // Obtener el nuevo valor para el campo 'id_producto'
            // if ($fila['max_id_producto'] == null) {
            //     $id_producto = 1;
            // } else {
            //     $id_producto = $fila['max_id_producto'] + 1;
            // }

            // inserta en tabla 'producto_cantidad'
            // Preparar la consulta
            // COMENTAR ESTAS LINEAS //
            // $stmt = $this->conexion->prepare('INSERT INTO sys_dihm_01_producto_cantidad (cuit, id_producto, anio, desc_producto, unidad_medida, cantidad_mensual, cantidad_anual, porcentaje) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');

            // Vincular los parámetros
            // $stmt->bind_param('sisssiid', $cuit, $id_producto, $anio_anterior, $desc_producto, $unidad_medida, $cantidad_mensual, $cantidad_anual, $porcentaje);

            // Ejecutar la consulta
            // $stmt->execute();
            // ---COMENTAR ESTAS LINEAS--- //

            // inserta en tabla 'producto_proyectado'
            // Preparar la consulta
            // $stmt = $this->conexion->prepare('INSERT INTO sys_dihm_01_producto_proyectado (id_producto, anio, unidad_medida, cantidad_mensual, cantidad_anual, porcentaje) VALUES (?, ?, ?, ?, ?, ?)');
            
            // Vincular los parámetros
            // $stmt->bind_param('isssdd', $id_producto, $anio_actual, $unidad_medida, $cant_mensual_proyec, $cant_anual_proy, $porcentaje_proyec);

            // Ejecutar la consulta
            // $stmt->execute();

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

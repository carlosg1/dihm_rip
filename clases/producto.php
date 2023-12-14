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

    // recibo parametro como array de los principales productos
    function insertarRegistro($cuit, $variedad_producto, $descripcion, $principales_productos) {

        // variables locales
        $anio_actual = date('Y');
        $anio_anterior = $anio_actual - 1;
        $dihmCore = new DIHM_Core("cabEmpresa");

        try {
        // --> 
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

            // sentencias prepare para `sys_dihm_01_materia_prima`
            $stmt_mat_prima_existe = $this->conexion->prepare('SELECT * FROM `sys_dihm_01_materia_prima` WHERE (sysdihm01_cuit = ? AND sysdihm01_secuencia = ?) LIMIT 1');
            $stmt_mat_prima_insert = $this->conexion->prepare('INSERT INTO `sys_dihm_01_materia_prima` (sysdihm01_cuit, sysdihm01_secuencia, sysdihm01_denominacion, sysdihm01_unidad, sysdihm01_ant_cantidad, sysdihm01_ant_origen, sysdihm01_act_cantidad, sysdihm01_act_origen) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
            $stmt_mat_prima_update = $this->conexion->prepare('UPDATE `sys_dihm_01_materia_prima` SET sysdihm01_denominacion = ?, sysdihm01_unidad = ?, sysdihm01_ant_cantidad = ?, sysdihm01_ant_origen = ?, sysdihm01_act_cantidad = ?, sysdihm01_act_origen = ? WHERE (id_sysdihm01 = ?) ');
        // <--

            foreach($principales_productos as $indice1 => $valor1) {
                if($principales_productos[$indice1]['denominacion'] != "") { // actualiza si hay un valor
                    // tabla sys_dihm_01_cab_producto -------------------------------
                    $stmt_cab_prod_existe->bind_param('si', $cuit, $indice1);
                    $stmt_cab_prod_existe->execute();
                    $stmt_cab_prod_existe->store_result();

                    if($stmt_cab_prod_existe->num_rows > 0) {

                        $stmt_cab_prod_existe->bind_result($id_reigstro, $bd_cuit, $bd_id_producto, $bd_denominacion);
                        $stmt_cab_prod_existe->fetch();
                        $stmt_cab_prod_existe->free_result();

                        $denominacion = $dihmCore->comparaValores($principales_productos[$indice1]['denominacion'], $bd_denominacion);

                        $stmt_cab_prod_upd->bind_param('si', $denominacion, $id_reigstro);
                        $stmt_cab_prod_upd->execute();

                    } else {

                        $stmt_cab_prod_existe->free_result();

                        $stmt_cab_prod_ins->bind_param('sis', $cuit, $indice1, $principales_productos[$indice1]['denominacion']);
                        $stmt_cab_prod_ins->execute();

                    }

                    // tabla 'sys_dihm_01_producto_cantidad' -------------------------------
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

                    // tabla 'sys_dihm_01_producto_proyectado' -------------------------------
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

                // preguntar por materia prima
                $stmt_mat_prima_existe->bind_param('si', $cuit, $indice1);
                $stmt_mat_prima_existe->execute();
                $stmt_mat_prima_existe->store_result();

                if($stmt_mat_prima_existe->num_rows > 0) {
                    $stmt_mat_prima_existe->bind_result($mp_id_reigstro, $mp_cuit, $mp_secuencia, $mp_denominacion, $mp_unidad, $mp_ant_cantidad, $mp_ant_origen, $mp_act_cantidad, $mp_act_origen);
                    $stmt_mat_prima_existe->fetch();
                    $stmt_mat_prima_existe->free_result();

                    // comparo valores
                    $mp_denominacion = $dihmCore->comparaValores($principales_productos[$indice1]["materia_prima"]['denominacion'], $mp_denominacion);
                    $mp_unidad = $dihmCore->comparaValores($principales_productos[$indice1]["materia_prima"]['unidad'], $mp_unidad);
                    $mp_ant_cantidad = $dihmCore->comparaValores($principales_productos[$indice1]["materia_prima"]['ano_ant_cantidad'], $mp_ant_cantidad);
                    $mp_ant_origen = $dihmCore->comparaValores($principales_productos[$indice1]["materia_prima"]['ano_ant_origen'], $mp_ant_origen);
                    $mp_act_cantidad = $dihmCore->comparaValores($principales_productos[$indice1]["materia_prima"]['ano_act_cantidad'], $mp_act_cantidad);
                    $mp_act_origen = $dihmCore->comparaValores($principales_productos[$indice1]["materia_prima"]['ano_act_origen'], $mp_act_origen);

                    $stmt_mat_prima_update->bind_param('ssssssi', $mp_denominacion, $mp_unidad, $mp_ant_cantidad, $mp_ant_origen, $mp_act_cantidad, $mp_act_origen, $mp_id_reigstro);
                    $stmt_mat_prima_update->execute();
                } else {
                    $stmt_mat_prima_existe->free_result();

                    $stmt_mat_prima_insert->bind_param(
                        'sissssss', 
                        $cuit, 
                        $indice1, 
                        $principales_productos[$indice1]["materia_prima"]["denominacion"], 
                        $principales_productos[$indice1]["materia_prima"]["unidad"], 
                        $principales_productos[$indice1]["materia_prima"]['ano_ant_cantidad'], 
                        $principales_productos[$indice1]["materia_prima"]['ano_ant_origen'], 
                        $principales_productos[$indice1]["materia_prima"]['ano_act_cantidad'], 
                        $principales_productos[$indice1]["materia_prima"]['ano_act_origen']
                    );
                    $stmt_mat_prima_insert->execute();
                }
            } // fin foreach 
        // --> 
            // inserta en tabla 'variedad_producto'
            $stmt_var_prod_existe = $this->conexion->prepare('SELECT * FROM sys_dihm_01_variedad_producto WHERE cuit = ?');
            $stmt_var_prod_existe->bind_param('s', $cuit);
            $stmt_var_prod_existe->execute();
            $stmt_var_prod_existe->store_result();

            if($stmt_var_prod_existe->num_rows > 0) {

                $stmt_var_prod_existe->bind_result($var_prod_id_reg, $var_prod_cuit, $var_prod_codigo, $var_prod_desc);
                $stmt_var_prod_existe->fetch();
                $stmt_var_prod_existe->free_result();

                $descripcion = $dihmCore->comparaValores($descripcion, $var_prod_desc);
                $variedad_producto = $dihmCore->comparaValores($variedad_producto, $var_prod_codigo);

                $stmt_var_prod_upd = $this->conexion->prepare('UPDATE sys_dihm_01_variedad_producto SET codigo = ?, descripcion = ? WHERE id = ?');
                $stmt_var_prod_upd->bind_param('isi', $variedad_producto, $descripcion, $var_prod_id_reg);
                $stmt_var_prod_upd->execute();

            } else {

                $stmt_var_prod_existe->free_result();

                $stmt_var_prod_ins = $this->conexion->prepare('INSERT INTO sys_dihm_01_variedad_producto (cuit, codigo, descripcion) VALUES (?, ?, ?)');
                $stmt_var_prod_ins->bind_param('sis', $cuit, $variedad_producto, $descripcion);
                $stmt_var_prod_ins->execute();

            }
        // <--
            // Confirmar la transacción
            $this->conexion->commit();

        } catch (mysqli_sql_exception $e) {
            // En caso de error, deshacer los cambios
            $this->conexion->rollback();
            $this->codigoError = $e->getCode();
            $this->textoError = $e->getMessage();
        }
    }

    // graba registros segun la cantidad de elementos del array de parametros que recibe
    function grabaDatosArray($param) {

        // variables locales
        $anio_actual = date('Y');
        $anio_anterior = $anio_actual - 1;
        $dihmCore = new DIHM_Core("Productos");
        $cuit = $param['cuit'];

        try {
        // --> 
            // Iniciar la transacción
            $this->conexion->begin_transaction();

            // sentencias prepare para sys_dihm_01_cab_empresa
            $stmt_cab_empresa_existe = $this->conexion->prepare('SELECT * FROM `sys_dihm_01_cab_empresa` WHERE (sysdihm01_cuit = ?) LIMIT 1');
            $stmt_cab_empresa_ins = $this->conexion->prepare('INSERT INTO `sys_dihm_01_cab_empresa` (sysdihm01_cuit, sysdihm01_razon_social, sysdihm01_inicio_actividad, relacion_titular_planta) VALUES (?, ?, ?, ?)');
        
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

            // sentencias prepare para `sys_dihm_01_materia_prima`
            $stmt_mat_prima_existe = $this->conexion->prepare('SELECT * FROM `sys_dihm_01_materia_prima` WHERE (sysdihm01_cuit = ? AND sysdihm01_secuencia = ?) LIMIT 1');
            $stmt_mat_prima_insert = $this->conexion->prepare('INSERT INTO `sys_dihm_01_materia_prima` (sysdihm01_cuit, sysdihm01_secuencia, sysdihm01_denominacion, sysdihm01_unidad, sysdihm01_ant_cantidad, sysdihm01_ant_origen, sysdihm01_act_cantidad, sysdihm01_act_origen) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
            $stmt_mat_prima_update = $this->conexion->prepare('UPDATE `sys_dihm_01_materia_prima` SET sysdihm01_denominacion = ?, sysdihm01_unidad = ?, sysdihm01_ant_cantidad = ?, sysdihm01_ant_origen = ?, sysdihm01_act_cantidad = ?, sysdihm01_act_origen = ? WHERE (id_sysdihm01 = ?) ');
        // <--
            
            // controla si existe en cab_empresa
            $stmt_cab_empresa_existe->bind_param('s', $param['cuit']);
            $stmt_cab_empresa_existe->execute();
            $stmt_cab_empresa_existe->store_result();

            // inserta un registro en cab_empresa en caso que no exista
            if($stmt_cab_empresa_existe->num_rows == 0){
                $stmt_cab_empresa_existe->free_result();
                $stmt_cab_empresa_ins->bind_param('sssi', $param['cuit'], $param['razonSocial'], $param['inicio_actividad'], $param['relTitularDomic']);
                $stmt_cab_empresa_ins->execute();
                $stmt_cab_empresa_ins->free_result();
            }

            foreach($param['productos'] as $indice1 => $valor1) {
                if($valor1['denominacion'] != "") { // actualiza si hay un valor en denominacion de producto
                    // tabla sys_dihm_01_cab_producto -------------------------------
                    $stmt_cab_prod_existe->bind_param('si', $param['cuit'], $indice1);
                    $stmt_cab_prod_existe->execute();
                    $stmt_cab_prod_existe->store_result();

                    if($stmt_cab_prod_existe->num_rows > 0) {

                        $stmt_cab_prod_existe->bind_result($id_registro, $bd_cuit, $bd_id_producto, $bd_denominacion);
                        $stmt_cab_prod_existe->fetch();
                        $stmt_cab_prod_existe->free_result();

                        $denominacion = $dihmCore->comparaValores($valor1['denominacion'], $bd_denominacion);

                        $stmt_cab_prod_upd->bind_param('si', $denominacion, $id_registro);
                        $stmt_cab_prod_upd->execute();

                    } else {

                        $stmt_cab_prod_existe->free_result();

                        $stmt_cab_prod_ins->bind_param('sis', $param['cuit'], $indice1, $valor1['denominacion']);
                        $stmt_cab_prod_ins->execute();

                    }

                    // tabla 'sys_dihm_01_producto_cantidad' año anterior -------------------------------
                    $stmt_prod_cant_existe->bind_param('sis', $param['cuit'], $indice1, $anio_anterior);
                    $stmt_prod_cant_existe->execute();
                    $stmt_prod_cant_existe->store_result();

                    if($stmt_prod_cant_existe->num_rows > 0) {

                        $stmt_prod_cant_existe->bind_result($id_registro_prod_cant, $bd_cuit, $bd_id_producto, $bd_anio, $bd_unidad_medida, $bd_cantidad_mensual, $bd_cantidad_anual, $bd_porcentaje);
                        $stmt_prod_cant_existe->fetch();
                        $stmt_prod_cant_existe->free_result();

                        $unidad_medida = $dihmCore->comparaValores($valor1['unidad'], $bd_unidad_medida);
                        $cantidad_mensual = $dihmCore->comparaValores($valor1['anio_anterior']['cantidad_mes'], $bd_cantidad_mensual);
                        $cantidad_anual = $dihmCore->comparaValores($valor1['anio_anterior']['cantidad_anio'], $bd_cantidad_anual);
                        $porcentaje = $dihmCore->comparaValores($valor1['anio_anterior']['porc_participacion'], $bd_porcentaje);

                        $stmt_prod_cant_upd->bind_param('siidi', $unidad_medida, $cantidad_mensual, $cantidad_anual, $porcentaje, $id_registro_prod_cant);
                        $stmt_prod_cant_upd->execute();

                    } else {

                        $stmt_prod_cant_existe->free_result();

                        $stmt_prod_cant_ins->bind_param('sissiid', $param['cuit'], $indice1, $anio_anterior, $valor1['unidad'], $valor1['anio_anterior']['cantidad_mes'], $valor1['anio_anterior']['cantidad_anio'], $valor1['anio_anterior']['porc_participacion']);
                        $stmt_prod_cant_ins->execute();

                    }

                    // tabla 'sys_dihm_01_producto_proyectado' año vigente -------------------------------
                    $stmt_prod_proy_existe->bind_param('sis', $param['cuit'], $indice1, $anio_actual);
                    $stmt_prod_proy_existe->execute();
                    $stmt_prod_proy_existe->store_result();

                    if($stmt_prod_proy_existe->num_rows > 0) {

                        $stmt_prod_proy_existe->bind_result($id_registro_prod_proy, $bd_cuit_prod_proy, $bd_id_producto_prod_proy, $bd_anio_prod_proy, $bd_unidad_medida_prod_proy, $bd_cantidad_mensual_prod_proy, $bd_cantidad_anual_prod_proy, $bd_porcentaje_prod_proy);
                        $stmt_prod_proy_existe->fetch();
                        $stmt_prod_proy_existe->free_result();

                        $bd_unidad_medida_prod_proy = $dihmCore->comparaValores($valor1['unidad'], $bd_unidad_medida_prod_proy);
                        $bd_cantidad_mensual_prod_proy = $dihmCore->comparaValores($valor1['anio_vigente']['cantidad_mes'], $bd_cantidad_mensual_prod_proy);
                        $bd_cantidad_anual_prod_proy = $dihmCore->comparaValores($valor1['anio_vigente']['cantidad_anio'], $bd_cantidad_anual_prod_proy);
                        $bd_porcentaje_prod_proy = $dihmCore->comparaValores($valor1['anio_vigente']['porc_participacion'], $bd_porcentaje_prod_proy);

                        $stmt_prod_proy_upd->bind_param('siidi', $bd_unidad_medida_prod_proy, $bd_cantidad_mensual_prod_proy, $bd_cantidad_anual_prod_proy, $bd_porcentaje_prod_proy, $id_registro_prod_proy);
                        $stmt_prod_proy_upd->execute();

                    } else {

                        $stmt_prod_proy_existe->free_result();

                        $stmt_prod_proy_ins->bind_param('sissiid', $param['cuit'], $indice1, $anio_actual, $valor1['unidad'], $valor1['anio_vigente']['cantidad_mes'], $valor1['anio_vigente']['cantidad_anio'], $valor1['anio_vigente']['porc_participacion']);
                        $stmt_prod_proy_ins->execute();

                    }
                }

                // preguntar por materia prima `sys_dihm_01_materia_prima`
/*
                $stmt_mat_prima_existe->bind_param('si', $cuit, $indice1);
                $stmt_mat_prima_existe->execute();
                $stmt_mat_prima_existe->store_result();

                if($stmt_mat_prima_existe->num_rows > 0) {
                    $stmt_mat_prima_existe->bind_result($mp_id_reigstro, $mp_cuit, $mp_secuencia, $mp_denominacion, $mp_unidad, $mp_ant_cantidad, $mp_ant_origen, $mp_act_cantidad, $mp_act_origen);
                    $stmt_mat_prima_existe->fetch();
                    $stmt_mat_prima_existe->free_result();

                    // comparo valores
                    $mp_denominacion = $dihmCore->comparaValores($principales_productos[$indice1]["materia_prima"]['denominacion'], $mp_denominacion);
                    $mp_unidad = $dihmCore->comparaValores($principales_productos[$indice1]["materia_prima"]['unidad'], $mp_unidad);
                    $mp_ant_cantidad = $dihmCore->comparaValores($principales_productos[$indice1]["materia_prima"]['ano_ant_cantidad'], $mp_ant_cantidad);
                    $mp_ant_origen = $dihmCore->comparaValores($principales_productos[$indice1]["materia_prima"]['ano_ant_origen'], $mp_ant_origen);
                    $mp_act_cantidad = $dihmCore->comparaValores($principales_productos[$indice1]["materia_prima"]['ano_act_cantidad'], $mp_act_cantidad);
                    $mp_act_origen = $dihmCore->comparaValores($principales_productos[$indice1]["materia_prima"]['ano_act_origen'], $mp_act_origen);

                    $stmt_mat_prima_update->bind_param(
                        'ssssssi', 
                        $mp_denominacion, 
                        $mp_unidad, 
                        $mp_ant_cantidad, 
                        $mp_ant_origen, 
                        $mp_act_cantidad, 
                        $mp_act_origen, 
                        $mp_id_reigstro
                    );
                    $stmt_mat_prima_update->execute();

                } else {

                    $stmt_mat_prima_existe->free_result();

                    $stmt_mat_prima_insert->bind_param(
                        'sissssss', 
                        $cuit, 
                        $indice1, 
                        $principales_productos[$indice1]["materia_prima"]["denominacion"], 
                        $principales_productos[$indice1]["materia_prima"]["unidad"], 
                        $principales_productos[$indice1]["materia_prima"]['ano_ant_cantidad'], 
                        $principales_productos[$indice1]["materia_prima"]['ano_ant_origen'], 
                        $principales_productos[$indice1]["materia_prima"]['ano_act_cantidad'], 
                        $principales_productos[$indice1]["materia_prima"]['ano_act_origen']
                    );
                    $stmt_mat_prima_insert->execute();

                }
                */
            } // fin foreach 
        // --> 
            // inserta en tabla `sys_dihm_01_variedad_producto`
            $stmt_var_prod_existe = $this->conexion->prepare('SELECT * FROM sys_dihm_01_variedad_producto WHERE cuit = ?');
            $stmt_var_prod_existe->bind_param('s', $cuit);
            $stmt_var_prod_existe->execute();
            $stmt_var_prod_existe->store_result();

            if($stmt_var_prod_existe->num_rows > 0) {

                $stmt_var_prod_existe->bind_result($var_prod_id_reg, $var_prod_cuit, $var_prod_codigo, $var_prod_desc);
                $stmt_var_prod_existe->fetch();
                $stmt_var_prod_existe->free_result();

                $descripcion = $dihmCore->comparaValores($param['variedad_producto'], $var_prod_desc);
                $variedad_producto = $dihmCore->comparaValores(0, $var_prod_codigo);

                $stmt_var_prod_upd = $this->conexion->prepare('UPDATE sys_dihm_01_variedad_producto SET codigo = ?, descripcion = ? WHERE id = ?');
                $stmt_var_prod_upd->bind_param('isi', $variedad_producto, $descripcion, $var_prod_id_reg);
                $stmt_var_prod_upd->execute();

            } else {

                $stmt_var_prod_existe->free_result();

                $stmt_var_prod_ins = $this->conexion->prepare('INSERT INTO sys_dihm_01_variedad_producto (cuit, codigo, descripcion) VALUES (?, ?, ?)');
                $stmt_var_prod_ins->bind_param('sis', $cuit, $variedad_producto, $descripcion);
                $stmt_var_prod_ins->execute();

            }
        // <--
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

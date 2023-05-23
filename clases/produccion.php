<?php
// Clase de funciones genericas
include_once "../clases/dihm_core.php";

class Produccion {

    private $conexion;
    public $codigoError;
    public $textoError;

// ---> Funciones privadas

    private function insertarCapacidadInstaladaActual($conexion, $cuit, $linea, $linea_desc, $anio, $unidad_medida, $capacidad_instalada_mensual, $nivel_de_produccion, $aprovechamiento_de_la_capacidad){

        $stmt_cia_existe = $conexion->prepare('SELECT * FROM sys_dihm_01_capacidad_instalada_actual WHERE cuit = ? AND linea = ? AND anio = ?');
        $stmt_cia_existe->bind_param('sis', $cuit, $linea, $anio);
        $stmt_cia_existe->execute();
        $stmt_cia_existe->store_result();

        if($stmt_cia_existe->num_rows > 0) {

        } else {
            
        }

        // inserta en tabla 'sys_dihm_01_capacidad_instalada_actual'
        $stmt_cia = $conexion->prepare('INSERT INTO sys_dihm_01_capacidad_instalada_actual (
            cuit, 
            linea, 
            linea_desc, 
            anio, 
            unidad_medida, 
            capacidad_instalada_mensual, 
            nivel_de_produccion, 
            aprovechamiento_de_la_capacidad) VALUES (?, ?, ?, ?, ?, ?, ?, ?)'
        );

        // Vincular los parámetros
        $stmt_cia->bind_param('sisssddd', 
            $cuit, 
            $linea, 
            $linea_desc, 
            $anio, 
            $unidad_medida, 
            $capacidad_instalada_mensual, 
            $nivel_de_produccion, 
            $aprovechamiento_de_la_capacidad
        );

        // Ejecutar la consulta
        $stmt_cia->execute();

        return;
    }  

    private function insertarCapacidadInstaladaProyectada($conexion, $cuit, $linea, $linea_desc, $anio, $unidad_medida, $capacidad_instalada_mensual, $nivel_de_produccion, $aprovechamiento_de_la_capacidad){
        // -----
        // inserta en tabla 'sys_dihm_01_capacidad_instalada_actual'
        // Preparar la consulta
        $stmt_cia = $conexion->prepare('INSERT INTO sys_dihm_01_capacidad_instalada_proyectada (
            cuit, 
            linea, 
            linea_desc, 
            anio, 
            unidad_medida, 
            capacidad_instalada_mensual, 
            nivel_de_produccion, 
            aprovechamiento_de_la_capacidad) VALUES (?, ?, ?, ?, ?, ?, ?, ?)'
        );

        // Vincular los parámetros
        $stmt_cia->bind_param('sisssddd', 
            $cuit, 
            $linea, 
            $linea_desc, 
            $anio, 
            $unidad_medida, 
            $capacidad_instalada_mensual, 
            $nivel_de_produccion, 
            $aprovechamiento_de_la_capacidad
        );

        // Ejecutar la consulta
        $stmt_cia->execute();

        return;
    } 

// <--- Funciones privadas

// ---> construct y destruct
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
// <--- construct y destruct

    public function insertarRegistro($cuit, $cant_obrador, $cant_planta_ind, $superficie_terreno, $superficie_cubierta, $superficie_semi_cubierta, $cantidad_maquinas, $potencia_instalada, $consumo_electrico, $capacidad_instalada) {
        
        // variables locales
        $anio_actual = date('Y');
        $anio_anterior = $anio_actual - 1;

        //
        try {
        // ---> 
            $dihmCore = new DIHM_Core("cabEmpresa");

            // Iniciar la transacción
            $this->conexion->begin_transaction();

            $stmt_prod_existe = $this->conexion->prepare('SELECT * FROM sys_dihm_01_produccion WHERE cuit = ?');
            $stmt_prod_existe->bind_param('s', $cuit);
            $stmt_prod_existe->execute();
            $stmt_prod_existe->store_result();

            if($stmt_prod_existe->num_rows > 0) {
                $stmt_prod_existe->bind_result($produccion_id_reg, $produccion_cant_obrador, $produccion_cant_planta_ind, $produccion_superficie_terreno, $produccion_superficie_cubierta, $produccion_superficie_semi_cubierta, $produccion_cantidad_maquinas, $produccion_potencia_instalada, $produccion_consumo_electrico);
                $stmt_prod_existe->fetch();
                $stmt_prod_existe->free_result();

                // Comparar los valores 
                $cant_obrador = $dihmCore->comparaValores($cant_obrador, $produccion_cant_obrador);
                $cant_planta_ind = $dihmCore->comparaValores($cant_planta_ind, $produccion_cant_planta_ind);
                $superficie_terreno = $dihmCore->comparaValores($superficie_terreno, $produccion_superficie_terreno);
                $superficie_cubierta = $dihmCore->comparaValores($superficie_cubierta, $produccion_superficie_cubierta);
                $superficie_semi_cubierta = $dihmCore->comparaValores($superficie_semi_cubierta, $produccion_superficie_semi_cubierta);
                $cantidad_maquinas = $dihmCore->comparaValores($cantidad_maquinas, $produccion_cantidad_maquinas);
                $potencia_instalada = $dihmCore->comparaValores($potencia_instalada, $produccion_potencia_instalada);
                $consumo_electrico = $dihmCore->comparaValores($consumo_electrico, $produccion_consumo_electrico);

                $stmt_prod_upd = $this->conexion->prepare('UPDATE sys_dihm_01_produccion SET cant_obrador = ?, cant_planta_ind = ?, superficie_terreno = ?, superficie_cubierta = ?, superficie_semi_cubierta = ?, cantidad_maquinas = ?, potencia_instalada = ?, consumo_electrico = ? WHERE id = ?');

                $stmt_prod_upd->bind_param('ssdddidd', $cant_obrador, $cant_planta_ind, $superficie_terreno, $superficie_cubierta, $superficie_semi_cubierta, $cantidad_maquinas, $potencia_instalada, $consumo_electrico);

                $stmt_prod_upd->execute();

            } else {
                $stmt_prod_existe->free_result();

                // inserta en tabla 'sys_dihm_01_produccion'
                $stmt_prod_ins = $this->conexion->prepare('INSERT INTO sys_dihm_01_produccion (cuit, cant_obrador, cant_planta_ind, superficie_terreno, superficie_cubierta, superficie_semi_cubierta, cantidad_maquinas, potencia_instalada, consumo_electrico) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');

                $stmt_prod_ins->bind_param('siidddidd', $cuit, $cant_obrador, $cant_planta_ind, $superficie_terreno, $superficie_cubierta, $superficie_semi_cubierta, $cantidad_maquinas, $potencia_instalada, $consumo_electrico);

                // Ejecutar la consulta
                $stmt_prod_ins->execute();

                $stmt_prod_ins->free_result();
            }
        // <---
            

            // inserta capacidad instalada real año anterior
            foreach ($capacidad_instalada['real_anio_anterior'] as $indice => $valor) {
                if($valor['linea_desc'] != "") {
                    $this->insertarCapacidadInstaladaActual(
                        $this->conexion,
                        $cuit, 
                        $indice, 
                        $valor['linea_desc'], 
                        $anio_anterior, 
                        $valor['unidad_medida'], 
                        $valor['capacidad_instalada_mensual'], 
                        $valor['nivel_de_produccion'], 
                        $valor['aprovechamiento_de_la_capacidad']
                    );
                }
            }


            // inserta capacidad instalada proyectada año vigente
            foreach ($capacidad_instalada['proyectado_anio_actual'] as $indice => $valor) {
                if($valor['linea_desc'] != "") {
                    $this->insertarCapacidadInstaladaProyectada(
                        $this->conexion,
                        $cuit, 
                        $indice, 
                        $valor['linea_desc'], 
                        $anio_actual, 
                        $valor['unidad_medida'], 
                        $valor['capacidad_instalada_mensual'], 
                        $valor['nivel_de_produccion'], 
                        $valor['aprovechamiento_de_la_capacidad']
                    );
                }
            }

            $this->conexion->commit();

        } catch (mysqli_sql_exception $e) {
            // En caso de error, deshacer los cambios
            $this->conexion->rollback();
            $this->codigoError = $e->getCode();
            $this->textoError = $e->getMessage();
        }
    }

}

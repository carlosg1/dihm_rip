<?php

class Produccion {

    private $conexion;
    public $codigoError;
    public $textoError;

    private function insertarCapacidadInstaladaActual($conexion, $cuit, $linea, $linea_desc, $anio, $unidad_medida, $capacidad_instalada_mensual, $nivel_de_produccion, $aprovechamiento_de_la_capacidad){
        // -----
        // inserta en tabla 'sys_dihm_01_capacidad_instalada_actual'
        // Preparar la consulta
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

    public function insertarRegistro($cuit, $cant_obrador, $cant_planta_ind, $superficie_terreno, $superficie_cubierta, $superficie_semi_cubierta, $cantidad_maquinas, $potencia_instalada, $consumo_electrico, $capacidad_instalada) {
        
        // variables locales
        $anio_actual = date('Y');
        $anio_anterior = $anio_actual - 1;

        //
        try {
            // Iniciar la transacción
            $this->conexion->begin_transaction();

            // inserta en tabla 'sys_dihm_01_produccion'
            // Preparar la consulta
            $stmt_prod = $this->conexion->prepare('INSERT INTO sys_dihm_01_produccion (cuit, cant_obrador, cant_planta_ind, superficie_terreno, superficie_cubierta, superficie_semi_cubierta, cantidad_maquinas, potencia_instalada, consumo_electrico) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');

            // Vincular los parámetros
            $stmt_prod->bind_param('siidddidd', $cuit, $cant_obrador, $cant_planta_ind, $superficie_terreno, $superficie_cubierta, $superficie_semi_cubierta, $cantidad_maquinas, $potencia_instalada, $consumo_electrico);

            // Ejecutar la consulta
            $stmt_prod->execute();

            // inserta capacidad instalada actual  
            $contador = 1;
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

            $this->conexion->commit();

        } catch (mysqli_sql_exception $e) {
            // En caso de error, deshacer los cambios
            $this->conexion->rollback();
            $this->codigoError = $e->getCode();
            $this->textoError = $e->getMessage();
        }
    }

}

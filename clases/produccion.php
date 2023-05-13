<?php

class Produccion {

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

    function insertarRegistro(/* sys_dihm_01_produccion */ $cuit, $cant_obrador, $cant_planta_ind, $superficie_terreno, $superficie_cubierta, $superficie_semi_cubierta, $cantidad_maquinas, $potencia_instalada, $consumo_electrico, $capacidad_instalada) {
        
        // variables locales
        $anio_actual = date('Y');
        $anio_anterior = $anio_actual - 1;
        //
        // real año anterior
        $linea = $capacidad_instalada['real_anio_anterior']['1']['linea_desc'];
        $anio = $anio_actual;
        $unidad_medida = $capacidad_instalada['real_anio_anterior']['1']['unidad_medida'];
        $capacidad_instalada_mensual = $capacidad_instalada['real_anio_anterior']['1']['capacidad_instalada_mensual'];
        $nivel_de_produccion = $capacidad_instalada['real_anio_anterior']['1']['nivel_de_produccion'];
        $aprovechamiento_de_la_capacidad =$capacidad_instalada['real_anio_anterior']['1']['aprovechamiento_de_la_capacidad'];

        // proyectado año actual
        $linea = $capacidad_instalada['proyectado_anio_actual']['1']['linea_desc'];
        $anio = $anio_anterior;
        $unidad_medida = $capacidad_instalada['proyectado_anio_actual']['1']['unidad_medida'];
        $capacidad_instalada_mensual = $capacidad_instalada['proyectado_anio_actual']['1']['capacidad_instalada_mensual'];
        $nivel_de_produccion = $capacidad_instalada['proyectado_anio_actual']['1']['nivel_de_produccion'];
        $aprovechamiento_de_la_capacidad = $capacidad_instalada['proyectado_anio_actual']['1']['aprovechamiento_de_la_capacidad'];

        try {
            // Iniciar la transacción
            $this->conexion->begin_transaction();

            // inserta en tabla 'sys_dihm_01_produccion'
            // Preparar la consulta
            $stmt = $this->conexion->prepare('INSERT INTO sys_dihm_01_produccion (cuit, cant_obrador, cant_planta_ind, superficie_terreno, superficie_cubierta, superficie_semi_cubierta, cantidad_maquinas, potencia_instalada, consumo_electrico) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');

            // Vincular los parámetros
            $stmt->bind_param('siidddidd', $cuit, $cant_obrador, $cant_planta_ind, $superficie_terreno, $superficie_cubierta, $superficie_semi_cubierta, $cantidad_maquinas, $potencia_instalada, $consumo_electrico);

            // Ejecutar la consulta
            $stmt->execute();

            // -----
            // inserta en tabla 'sys_dihm_01_capacidad_instalada_actual'
            // Preparar la consulta
            $stmt = $this->conexion->prepare('INSERT INTO sys_dihm_01_capacidad_instalada_actual (cuit, linea, linea_desc, anio, unidad_medida, capacidad_instalada_mensual, nivel_de_produccion, aprovechamiento_de_la_capacidad) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');

            // Vincular los parámetros
            $stmt->bind_param('sisssddd', $cuit, '1', $capacidad_instalada['real_anio_anterior']['1']['linea_desc'], $anio, $capacidad_instalada['real_anio_anterior']['1']['unidad_medida'], $capacidad_instalada['real_anio_anterior']['1']['capacidad_instalada_mensual'], $capacidad_instalada['real_anio_anterior']['1']['nivel_de_produccion'], $capacidad_instalada['real_anio_anterior']['1']['aprovechamiento_de_la_capacidad']);

            // Ejecutar la consulta
            $stmt->execute();

            $this->conexion->commit();

        } catch (mysqli_sql_exception $e) {
            // En caso de error, deshacer los cambios
            $this->conexion->rollback();
            $this->codigoError = $e->getCode();
            $this->textoError = $e->getMessage();
        }
    }
}

<?php

// Clase de funciones genericas
include_once "../clases/dihm_core.php";

class EmpresaGeom {
    private $conexion;
    public $version = "1.0";
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

        try {

            $dihmCore = new DIHM_Core("empresaGeom");

            $cuit = $param['cuit'];

            $stmt = $this->conexion->prepare("SELECT id, cuit, lat, lng from `sys_dihm_01_empresa_geom` WHERE cuit = '?' LIMIT 1");
            $stmt-bind_param('s', $param['cuit']);
            $stmt->execute();
            $stmt->store_result();

            if($stmt->num_rows > 0) {
                $stmt->bind_result($id_registro, $cuit, $lat, $lng);
                $stmt-fetch();
                $stmt->free_result();

                // Comparar los valores recién ingresados con los almacenados en la base de datos
                $lat    = $dihmCore->comparaValores($param['lat'], $lat);
                $lng    = $dihmCore->comparaValores($param['lng'], $lng);

                // actualizar los campos
                $stmt_upd = $this->conexion->prepare("UPDATE sys_dihm_01_empresa_geom SET lat = ?, lng = ? WHERE id = ?");
                $stmt_upd->bind_param("ss", $lat, $localidad, $provincia, $cod_postal, $departamento, $id_registro);
                $stmt_upd->execute();

           }



        } catch (mysqli_sql_exception $e) {
          $this->codigoError = $e->getCode();
          $this->textoError = $e->getMessage();
        }
    }
}
<?php

class Disposicion {
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
    
    public function insertarRegistro($cuit, $tipo_disposicion, $descripcion, $nro, $fecha) {
        $filtro = "cuit = '".$cuit."' AND tipo_disposicion = '".$tipo_disposicion."'";
        $existe_registro = $this->existeRegistro($filtro);
        if ($existe_registro) {
            $sql = "UPDATE sys_dihm_01_disposicion SET descripcion = '".$descripcion."', nro = '".$nro."', fecha = '".$fecha."' WHERE cuit = '".$cuit."' AND tipo_disposicion = '".$tipo_disposicion."'";
        } else {
            $sql = "INSERT INTO sys_dihm_01_disposicion (cuit, tipo_disposicion, descripcion, nro, fecha) VALUES ('".$cuit."', '".$tipo_disposicion."', '".$descripcion."', '".$nro."', '".$fecha."')";
        }
        $resultado = $this->conexion->query($sql);
        if (!$resultado) {
            $this->codigoError = $this->conexion->errno;
            $this->textoError = $this->conexion->error;
        }
    }
    
    public function leeRegistro($filtro) {
        $sql = "SELECT * FROM sys_dihm_01_disposicion WHERE ".$filtro;
        $resultado = $this->conexion->query($sql);
        if (!$resultado) {
            $this->codigoError = $this->conexion->errno;
            $this->textoError = $this->conexion->error;
            return null;
        } else {
            $registro = $resultado->fetch_object();
            return $registro;
        }
    }
    
    private function existeRegistro($filtro) {
        $sql = "SELECT COUNT(*) as cuenta FROM sys_dihm_01_disposicion WHERE ".$filtro;
        $resultado = $this->conexion->query($sql);
        if (!$resultado) {
            $this->codigoError = $this->conexion->errno;
            $this->textoError = $this->conexion->error;
            return null;
        } else {
            $cuenta = $resultado->fetch_object()->cuenta;
            if ($cuenta > 0) {
                return true;
            } else {
                return false;
            }
        }
    }
}

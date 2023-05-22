<?php

// Clase de funciones genericas
include_once "../clases/dihm_core.php";

class DomicilioPlantaIndustrial {
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
        try {
            $dihmCore = new DIHM_Core("cabEmpresa");
    
            // Comprobar si ya existe un registro con el mismo cuit.
            $stmt = $this->conexion->prepare("SELECT id, domicilio, localidad, provincia, cod_postal, departamento FROM sys_dihm_01_domicilio_planta WHERE cuit = ? LIMIT 1");
            $stmt->bind_param("s", $param['cuit']);
            $stmt->execute();
            $stmt->store_result();
    
            if ($stmt->num_rows > 0) {
                $stmt->bind_result($id_registro, $domicilio, $localidad, $provincia, $cod_postal, $departamento);
                $stmt->fetch();
                $stmt->free_result();
    
                // Comparar los valores recién ingresados con los almacenados en la base de datos
                $domicilio    = $dihmCore->comparaValores($param['domicilio'], $domicilio);
                $localidad    = $dihmCore->comparaValores($param['localidad'], $localidad);
                $provincia    = $dihmCore->comparaValores($param['provincia'], $provincia);
                $cod_postal   = $dihmCore->comparaValores($param['cod_postal'], $cod_postal);
                $departamento = $dihmCore->comparaValores($param['departamento'], $departamento);
    
                // Si ya existe, actualizar los campos.
                $stmt_upd = $this->conexion->prepare("UPDATE sys_dihm_01_domicilio_planta SET domicilio = ?, localidad = ?, provincia = ?, cod_postal = ?, departamento = ? WHERE id = ?");
                $stmt_upd->bind_param("sssssi", $domicilio, $localidad, $provincia, $cod_postal, $departamento, $id_registro);
                $stmt_upd->execute();

            } else {
                
                $stmt->free_result();
    
                // Si no existe, insertar un nuevo registro.
                $stmt_ins = $this->conexion->prepare("INSERT INTO sys_dihm_01_domicilio_planta (cuit, domicilio, localidad, provincia, cod_postal, departamento) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt_ins->bind_param("ssssss", $param['cuit'], $param['domicilio'], $param['localidad'], $param['provincia'], $param['cod_postal'], $param['departamento']);
                $stmt_ins->execute();
            }
        } catch (mysqli_sql_exception $e) {
            $this->codigoError = $e->getCode();
            $this->textoError = $e->getMessage();
        }
    }

    public function leeRegistro($id) {
        // Leer un registro por su id.
        $stmt = $this->conexion->prepare("SELECT cuit, domicilio, localidad, provincia, cod_postal, departamento FROM sys_dihm_01_domicilio_planta WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        if ($stmt->errno) {
            $this->codigoError = $stmt->errno;
            $this->textoError = $stmt->error;
            return null;
        }
        $stmt->bind_result($cuit, $domicilio, $localidad, $provincia, $cod_postal, $departamento);
        $stmt->fetch();
        $registro = array(
            'cuit' => $cuit,
            'domicilio' => $domicilio,
            'localidad' => $localidad,
            'provincia' => $provincia,
            'cod_postal' => $cod_postal,
            'departamento' => $departamento
        );
        return $registro;
    }
}
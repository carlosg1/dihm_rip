<?php
class domicilioPlantaIndustrial {
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

    public function insertarRegistro($cuit, $domicilio, $localidad, $provincia, $cod_postal, $departamento) {
        // Comprobar si ya existe un registro con el mismo cuit.
        $stmt = $this->conexion->prepare("SELECT id FROM sys_dihm_01_domicilio_planta WHERE cuit = ?");
        $stmt->bind_param("s", $cuit);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            // Si ya existe, actualizar los campos.
            $stmt = $this->conexion->prepare("UPDATE sys_dihm_01_domicilio_planta SET domicilio = ?, localidad = ?, provincia = ?, cod_postal = ?, departamento = ? WHERE cuit = ?");
            $stmt->bind_param("ssssss", $domicilio, $localidad, $provincia, $cod_postal, $departamento, $cuit);
            $stmt->execute();
            if ($stmt->errno) {
                $this->codigoError = $stmt->errno;
                $this->textoError = $stmt->error;
                return false;
            }
        } else {
            // Si no existe, insertar un nuevo registro.
            $stmt = $this->conexion->prepare("INSERT INTO sys_dihm_01_domicilio_planta (cuit, domicilio, localidad, provincia, cod_postal, departamento) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $cuit, $domicilio, $localidad, $provincia, $cod_postal, $departamento);
            $stmt->execute();
            if ($stmt->errno) {
                $this->codigoError = $stmt->errno;
                $this->textoError = $stmt->error;
                return false;
            }
        }
        return true;
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
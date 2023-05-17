<?php

class Actividad {
    private $conexion;
    public $codigoError;
    public $textoError;

    // Constructor de la clase, recibe la conexión a la base de datos
    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function __destruct() {
        // Cerrar la conexión a la base de datos.
        if ($this->conexion) {
            $this->conexion->close();
        }
    }

    // Método para insertar o actualizar un registro en la tabla "sys_dihm_01_actividad"
    // El método recibe los valores de los campos como parámetros
    public function insertarRegistro($cuit, $actividad_tipo, $ciiu, $facturacion_anual) {

        // Creamos el filtro para verificar si el registro ya existe en la tabla
        $filtro = "cuit = '{$cuit}' AND ciiu = '{$ciiu}'";

        // Ejecutamos la consulta para obtener el registro con el filtro creado
        $resultado = $this->conexion->query("SELECT * FROM sys_dihm_01_actividad WHERE {$filtro} LIMIT 1");

        if ($resultado && $resultado->num_rows > 0) {

            // Si el registro existe, actualizamos los campos excepto el campo "id"
            $registro = $resultado->fetch_assoc();
            $id = $registro['id'];
            $consulta = "UPDATE sys_dihm_01_actividad SET cuit = '{$cuit}', actividad_tipo = {$actividad_tipo}, ciiu = '{$ciiu}', facturacion_anual = {$facturacion_anual} WHERE id = {$id}";

        } else {

            // Si el registro no existe, insertamos uno nuevo
            $consulta = "INSERT INTO sys_dihm_01_actividad (cuit, actividad_tipo, ciiu, facturacion_anual) VALUES ('{$cuit}', {$actividad_tipo}, '{$ciiu}', {$facturacion_anual})";

        }

        // Ejecutamos la consulta
        $resultado = $this->conexion->query($consulta);

        if (!$resultado) {
            // Si hubo un error, guardamos el código y el mensaje de error en las propiedades correspondientes
            $this->codigoError = $this->conexion->errno;
            $this->textoError = $this->conexion->error;
            return false;
        }
        return true;
    }

}

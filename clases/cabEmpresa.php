<?php

    // Clase de funciones genericas
    include_once "../clases/dihm_core.php";

class CabEmpresa {
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

    // si existe el cuit actualiza los datos
    public function insertarRegistro($cuit, $razon_social, $inicio_actividad, $organizacion_juridica, $relacion_titular_planta, $variedad_producto, $nro_ingreso_bruto, $fecha_habilit_ing_bruto) {

        try {

            $dihmCore = new DIHM_Core("cabEmpresa");

            // Creamos el filtro para verificar si el registro ya existe en la tabla
            $filtro = "sysdihm01_cuit = '{$cuit}'";

            // Ejecutamos la consulta para obtener el registro con el filtro creado
            $resultado = $this->conexion->query("SELECT * FROM sys_dihm_01_cab_empresa WHERE {$filtro} LIMIT 1");

            if ($resultado && $resultado->num_rows > 0) {

                // Si el registro existe, guardamos los valores del registro y compara los que son distintos.
                $registro = $resultado->fetch_assoc();

                $razon_social = $dihmCore->comparaValores($razon_social, $registro['sysdihm01_razon_social']);
                $inicio_actividad = $dihmCore->comparaValores($inicio_actividad, $registro['sysdihm01_inicio_actividad']);
                $organizacion_juridica = $dihmCore->comparaValores($organizacion_juridica, $registro['organizacion_juridica']);
                $relacion_titular_planta = $dihmCore->comparaValores($relacion_titular_planta, $registro['relacion_titular_planta']);
                $variedad_producto = $dihmCore->comparaValores($variedad_producto, $registro['variedad_producto']);
                $nro_ingreso_bruto = $dihmCore->comparaValores($variedad_producto, $registro['ingreso_bruto']);
                $fecha_habilit_ing_bruto = $dihmCore->comparaValores($fecha_habilit_ing_bruto, $registro['fecha_habilit_ing_bruto']);

                $stmt = $this->conexion->prepare('UPDATE sys_dihm_01_cab_empresa SET sysdihm01_razon_social = ?, sysdihm01_inicio_actividad = ?, organizacion_juridica = ?, relacion_titular_planta = ?, variedad_producto = ?, ingreso_bruto = ?, fecha_habilit_ing_bruto = ? WHERE sysdihm01_cuit = ?');

                $stmt->bind_param('ssssisss', $razon_social, $inicio_actividad, $organizacion_juridica, $relacion_titular_planta, $variedad_producto, $nro_ingreso_bruto, $fecha_habilit_ing_bruto, $cuit);

                $stmt->execute();

            } else {

                // Preparar la consulta
                $stmt = $this->conexion->prepare('INSERT INTO sys_dihm_01_cab_empresa (sysdihm01_cuit, sysdihm01_razon_social, sysdihm01_inicio_actividad, organizacion_juridica, relacion_titular_planta, variedad_producto, ingreso_bruto, fecha_habilit_ing_bruto) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');

                // Vincular los parámetros
                $stmt->bind_param('ssssisss', $cuit, $razon_social, $inicio_actividad, $organizacion_juridica, $relacion_titular_planta, $variedad_producto, $nro_ingreso_bruto, $fecha_habilit_ing_bruto);

                // Ejecutar la consulta
                $stmt->execute();

            }

        } catch (mysqli_sql_exception $e) {
          $this->codigoError = $e->getCode();
          $this->textoError = $e->getMessage();
        }
    }

    public function eliminaRegistro($cuit) {

        try {

            if (isset($cuit) && $cuit != "") {
                
                $filtro = "sysdihm01_cuit = '{$cuit}'";

                $stmt = $this->conexion->prepare("DELETE FROM sys_dihm_01_cab_empresa WHERE sysdihm01_cuit = ?");

                $stmt->bind_param('s', $cuit);

                $stmt->execute();

            }

        } catch (mysqli_sql_exception $e) {
            $this->codigoError = $e->getCode();
            $this->textoError = $e->getMessage();
        }
        
    }

    public function leeRegistro($id_sysdihm01) {
        // Consulta para leer un registro
        $stmt = $this->conexion->prepare('SELECT * FROM sys_dihm_01_cab_empresa WHERE id_sysdihm01 = ?');
        $stmt->bind_param('s', $id_sysdihm01);
        $stmt->execute();
        $resultado = $stmt->get_result();
        if (!$resultado) {
            $this->codigoError = $this->conexion->errno;
            $this->textoError = $this->conexion->error;
            return;
        }
        return $resultado->fetch_object();
    }

}


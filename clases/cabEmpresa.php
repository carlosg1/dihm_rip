<?php

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

    public function insertarRegistro($cuit, $razon_social, $inicio_actividad, $organizacion_juridica, $relacion_titular_planta, $variedad_producto, $nro_ingreso_bruto, $fecha_habilit_ing_bruto) {
        try {
          // Preparar la consulta
        $stmt = $this->conexion->prepare('INSERT INTO sys_dihm_01_cab_empresa (sysdihm01_cuit, sysdihm01_razon_social, sysdihm01_inicio_actividad, organizacion_juridica, relacion_titular_planta, variedad_producto) VALUES (?, ?, ?, ?, ?, ?)');
          // Vincular los parámetros
          $stmt->bind_param('ssssss', $cuit, $razon_social, $inicio_actividad, $organizacion_juridica, $relacion_titular_planta, $variedad_producto);
          // Ejecutar la consulta
          $stmt->execute();
        } catch (mysqli_sql_exception $e) {
          $this->codigoError = $e->getCode();
          $this->textoError = $e->getMessage();
        }
      }
      

    // public function insertarRegistro($cuit, $razon_social, $inicio_actividad, $organizacion_juridica, $relacion_titular_planta, $variedad_producto) {
    //     try {
    //       // Preparar la consulta
    //       $stmt = $this->conexion->prepare('INSERT INTO sys_dihm_01_cab_empresa (sysdihm01_cuit, sysdihm01_razon_social, sysdihm01_inicio_actividad, organizacion_juridica, relacion_titular_planta, variedad_producto) VALUES (?, ?, ?, ?, ?, ?)');
    //       // Vincular los parámetros
    //       $stmt->bind_param('ssssss', $cuit, $razon_social, $inicio_actividad, $organizacion_juridica, $relacion_titular_planta, $variedad_producto);
    //       // Ejecutar la consulta
    //       $stmt->execute();
    //     } catch (PDOException $e) {
    //       $this->codigoError = $e->getCode();
    //       $this->textoError = $e->getMessage();
    //     }
    // }

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




// <?php 
// class CabEmpresa {
//     private $conexion;
//     public $codigoError;
//     public $textoError;

//     // public function __construct($conexion) {
//     //     $this->conexion = $conexion;
//     //     $this->codigoError = 0;
//     //     $this->textoError = '';
//     // }

//     // public function __destruct() {
//     //     // Cerrar la conexión a la base de datos.
//     //     if ($this->conexion) {
//     //         $this->conexion->close();
//     //     }
//     // }

//     public function __construct($conexion) {
//         $this->conexion = $conexion;
//         $this->codigoError = 0;
//         $this->textoError = '';
//     }

//     public function __destruct() {
//         // Cerrar la conexión a la base de datos.
//         if ($this->conexion) {
//             $this->conexion->close();
//         }
//     }


//     // public function insertarRegistro($cuit, $razon_social, $inicio_actividad, $organizacion_juridica, $relacion_titular_planta, $variedad_producto) {
//     //     try {
//     //       // Preparar la consulta
//     //       $stmt = $this->pdo->prepare('INSERT INTO sys_dihm_01_cab_empresa (sysdihm01_cuit, sysdihm01_razon_social, sysdihm01_inicio_actividad, organizacion_juridica, relacion_titular_planta, variedad_producto) VALUES (?, ?, ?, ?, ?, ?)');
//     //       // Vincular los parámetros
//     //       $stmt->bindParam(1, $cuit, PDO::PARAM_STR);
//     //       $stmt->bindParam(2, $razon_social, PDO::PARAM_STR);
//     //       $stmt->bindParam(3, $inicio_actividad, PDO::PARAM_STR);
//     //       $stmt->bindParam(4, $organizacion_juridica, PDO::PARAM_INT);
//     //       $stmt->bindParam(5, $relacion_titular_planta, PDO::PARAM_INT);
//     //       $stmt->bindParam(6, $variedad_producto, PDO::PARAM_INT);
//     //       // Ejecutar la consulta
//     //       $stmt->execute();
//     //     } catch (PDOException $e) {
//     //       $this->codigoError = $e->getCode();
//     //       $this->textoError = $e->getMessage();
//     //     }
//     // }

//     public function insertarRegistro($cuit, $razon_social, $inicio_actividad, $organizacion_juridica, $relacion_titular_planta, $variedad_producto) {
//         try {
//           // Preparar la consulta
//           $stmt = $this->conexion->prepare('INSERT INTO sys_dihm_01_cab_empresa (sysdihm01_cuit, sysdihm01_razon_social, sysdihm01_inicio_actividad, organizacion_juridica, relacion_titular_planta, variedad_producto) VALUES (?, ?, ?, ?, ?, ?)');
//           // Vincular los parámetros
//           $stmt->bind_param('ssssss', $cuit, $razon_social, $inicio_actividad, $organizacion_juridica, $relacion_titular_planta, $variedad_producto);
//           // Ejecutar la consulta
//           $stmt->execute();
//         } catch (PDOException $e) {
//           $this->codigoError = $e->getCode();
//           $this->textoError = $e->getMessage();
//         }
//     }

//     public function leeRegistro($id_sysdihm01) {
//         // Consulta para leer un registro
//         $consulta = "SELECT * FROM sys_dihm_01_cab_empresa WHERE id_sysdihm01 = '$id_sysdihm01'";
//         $resultado = mysqli_query($this->conexion, $consulta);
//         if (!$resultado) {
//             $this->codigoError = mysqli_errno($this->conexion);
//             $this->textoError = mysqli_error($this->conexion);
//             return;
//         }
//         return mysqli_fetch_object($resultado);
//     }

//     public function leeRegistros() {
//         // Consulta para leer varios registros
//         $consulta = "SELECT * FROM sys_dihm_01_cab_empresa";
//         $resultado = mysqli_query($this->conexion, $consulta);
//         if (!$resultado) {
//             $this->codigoError = mysqli_errno($this->conexion);
//             $this->textoError = mysqli_error($this->conexion);
//             return;
//         }
//         $registros = array();
//         while ($registro = mysqli_fetch_object($resultado)) {
//             $registros[] = $registro;
//         }
//         return $registros;
//     }

//     public function modificarUnRegistro($id_sysdihm01, $sysdihm01_cuit, $sysdihm01_razon_social, $sysdihm01_inicio_actividad, $organizacion_juridica, $relacion_titular_planta, $variedad_producto) {
//         // Consulta para modificar un registro
//         $consulta = "UPDATE sys_dihm_01_cab_empresa SET sysdihm01_cuit = '$sysdihm01_cuit', sysdihm01_razon_social = '$sysdihm01_razon_social', sysdihm01_inicio_actividad = '$sysdihm01_inicio_actividad', organizacion_juridica = '$organizacion_juridica', relacion_titular_planta = '$relacion_titular_planta', variedad_producto = '$variedad_producto' WHERE id_sysdihm01 = '$id_sysdihm01'";
//         $resultado = mysqli_query($this->conexion, $consulta);
//         if (!$resultado) {
//             $this->codigoError = mysqli_errno($this->conexion);
//             $this->textoError = mysqli_error($this->conexion);
//             return false;
//         }
//         return true;
//     }

// }
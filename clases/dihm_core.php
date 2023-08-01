<?php 

class DIHM_Core {
    private $version = "1";
    public $context = "";

     public function __construct($contexto) {
        $this->context = $contexto;
    }

    public function __destruct() {
        $this->context = "";
    }

    public function version() {
        return $version;
    }

    public function comparaValores($nuevo, $actual) {
        $valor = "";

        // Verifica si $razon_social está vacío
        if ($nuevo === "") {
            $valor = $actual;
        } else {
            // Verifica si $razon_social es diferente a $registro['sysdihm01_razon_social']
            if ($nuevo != $actual) {
                $valor = $nuevo;
            } else {
                $valor = $actual;
            }
        }

        return $valor;
    }
    
    public function fechaParaMariaDB($fecha) {
        $fecha_array = explode('/', $fecha);
        if (count($fecha_array) !== 3) {
            // Si el formato no es válido, devuelve falso o muestra un error
            return false;
        }

        $dia = $fecha_array[0];
        $mes = $fecha_array[1];
        $anio = $fecha_array[2];

        // Validar que los componentes de la fecha sean numéricos
        if (!is_numeric($dia) || !is_numeric($mes) || !is_numeric($anio)) {
            return false;
        }

        // Comprobar si la fecha es válida usando la función checkdate
        if (!checkdate($mes, $dia, $anio)) {
            return false;
        }

        // Formatear la fecha en el formato 'yyyy-mm-dd'
        $fecha_yyyy_mm_dd = sprintf('%04d-%02d-%02d', $anio, $mes, $dia);

        return $fecha_yyyy_mm_dd;
    }
}
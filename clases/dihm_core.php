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
        if ($nuevo == "") {
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
    
}
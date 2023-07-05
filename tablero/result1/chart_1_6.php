<?php 
    // 1.3 Cantidad de Empresas Inscriptas en el RIP de manera mensual y acumulada durante el año vigente.

    require_once '../../include/base_de_datos.php';
    require_once '../../include/obj_conexion.php';


    $stmt = $conDB->prepare("SELECT relacion, descripcion, cantidad FROM v_relacion_entre_empresa_inmueble");
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($relacion, $descripcion, $cantidad);

    $resultado = array(); 
    $labels = array();  
    $valores = array();
    // $data = array();

    while ($stmt->fetch()) {
        $labels[] = $descripcion;
        $valores[] = $cantidad;
        $resultado[] = [
            'descripcion' => $descripcion,
            'cantidad' => $cantidad
        ];
    }

    $data = [
        'labels' => $labels,
        'values' => $valores 
    ];

    // Devuelve los datos en formato JSON
    header('Content-Type: application/json');
    echo json_encode($data);



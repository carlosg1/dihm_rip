<?php 
    // 1.3 Cantidad de Empresas Inscriptas en el RIP de manera mensual y acumulada durante el año vigente.
    
    require_once '../../include/base_de_datos.php';
    require_once '../../include/obj_conexion.php';

    $meses = [
        1 => "Enero",
        2 => "Febrero",
        3 => "Marzo",
        4 => "Abril",
        5 => "Mayo",
        6 => "Junio",
        7 => "Julio",
        8 => "Agosto",
        9 => "Septiembre",
        10 => "Octubre",
        11 => "Noviembre",
        12 => "Diciembre",
    ];

    $stmt_ac = $conDB->prepare("SELECT cantidad FROM v_cant_empresa_registrada_ano_viente");
    $stmt_ac->execute();
    $stmt_ac->store_result();
    $stmt_ac->bind_result($acumulado);
    $stmt_ac->fetch();

    $stmt_ce = $conDB->prepare("SELECT mes, cantidad AS cantidad FROM v_cant_empresa_registrada_x_mes_ano_vigente");
    $stmt_ce->execute();
    $stmt_ce->store_result();
    $stmt_ce->bind_result($mes, $cant);
    $stmt_ce->fetch();

    $data = [
        'yAxisMax' => ($acumulado + 10),
        'labels' => [$meses[1], $meses[2], $meses[3], $meses[4], $meses[5], $meses[$mes], 'Acum.'],
        'values' => ['0', '0', '0', '0', '0', $cant, $acumulado]
    ];

    // Devuelve los datos en formato JSON
    header('Content-Type: application/json');
    echo json_encode($data);

?>
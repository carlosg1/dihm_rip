<?php 
    // 1.3 Cantidad de Empresas Inscriptas en el RIP de manera mensual y acumulada durante el año vigente.

    require_once '../../include/base_de_datos.php';
    require_once '../../include/obj_conexion.php';

    $stmt_ac = $conDB->prepare("SELECT cantidad FROM v_cant_empresa_registrada_ano_viente");
    $stmt_ac->execute();
    $stmt_ac->store_result();
    $stmt_ac->bind_result($acumulado);
    $stmt_ac->fetch();

    $stmt_ce = $conDB->prepare("SELECT mes, vigente, anterior FROM v_cant_empresa_registrada_x_mes_ano_anterior_y_vigente");
    $stmt_ce->execute();
    $stmt_ce->store_result();
    $stmt_ce->bind_result($mes, $vigente, $anterior);

    $meses = array(); // Array para almacenar los valores de $mes
    $cantidades_vigente = array(); // Array para almacenar los valores de $cant
    $cantidades_anterior = array(); // Array para almacenar los valores de $cant
    $acumulado_x_mes = array(); // valor acumulado
    $acumulado_vigente = 0; // valor acumulado
    $acumulado_anterior = 0; // valor acumulado

    while ($stmt_ce->fetch()) {
        $meses[] = $mes; 
        $cantidades_vigente[] = $vigente; 
        $cantidades_anterior[] = $anterior; 
        $acumulado_x_mes[] = ($vigente + $anterior);
        $acumulado_vigente += $vigente;
        $acumulado_anterior += $anterior;
    }

    $meses[] = 'Acumulado';
    $cantidades_vigente[] = $acumulado_vigente;
    $cantidades_anterior[] = $acumulado_anterior;
    $acumulado_x_mes[] = $acumulado_vigente + $acumulado_anterior;

    $data = [
        'yAxisMax' => ($acumulado + 10),
        'labels' => $meses,
        'values_vigente' => $cantidades_vigente,
        'values_anterior' => $cantidades_anterior,
        'acumulado' => $acumulado_x_mes
    ];

    // Devuelve los datos en formato JSON
    header('Content-Type: application/json');
    echo json_encode($data);

?>
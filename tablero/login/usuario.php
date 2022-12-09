<?php 
    session_name('dihm');
    session_start();

    header('Content-Type: application/json');

    $data = [
        "nombre" => 'Carlos',
        "apellido" => 'Garcia',
        "login" => 'ok'
    ];

    echo json_encode($data);

    exit;

?>


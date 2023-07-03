<?php 

$data = [
    'labels' => ['2022', '2023', 'Acum.'],
    'values' => [10, 20, 30]
];

// Devuelve los datos en formato JSON
header('Content-Type: application/json');
echo json_encode($data);

?>
<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Televisor',
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor',
        'precio' => 400,
        'disponible' => false
    ]
];

echo '<pre>';
var_dump($productos);

//json permite comunicar php con js
$json =json_encode($productos, JSON_UNESCAPED_UNICODE); // convierte un array en string, COMO CONVIERTE

$json_array =json_decode($json); //funcion inversa, stringa a array.

var_dump($json); // este string ya lo peude leer JS
var_dump($json_array); 
echo '</pre>';


include 'includes/footer.php';
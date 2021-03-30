<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Lucas',
    'saldo' => 200000,
    'info' => [ // array dentro de array
        'tipo' => 'Premium',
        'disponible' => 100
    ]
];

// Acceso a este tipo de arrays
echo $cliente["nombre"];
echo $cliente["saldo"];
echo $cliente["info"]["tipo"]; // acceso a array dentro de array

$cliente['codigo'] = 123124124; // agrega propiedad, pero se pone nose 'nombre' (prop que existe) REESCRIBE

echo "<pre>"; // mejora el formato de var_dump
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';

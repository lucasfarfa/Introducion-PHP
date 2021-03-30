<?php include 'includes/header.php';

$autenticado = true;
$admin = false;

if($autenticado && $admin) { // && || ! mismos operadores de siempre
    echo "OK";
} else {
    echo "Not OK";
}

// If anidados
$cliente = [
    'nombre' => 'Lucas',
    'saldo' => 200,
    'info' => [
        'tipo' => 'Premium'
    ]
];

echo '<br>';

if(!empty($cliente)) {
    echo "Cliente no vacio ";

    if($cliente['saldo'] > 0) {
        echo 'Hay saldo ';
    } else {
        echo 'no hay saldo ';
    }
} 

// Else if
if($cliente['saldo'] > 0) {
    echo ' cliente tiene saldo';
} else if ($cliente['info']['tipo'] === 'Premium') {
    echo 'es premium';
} else {
    echo ' no hay saldo o no premium';
}

// Switch
echo '<br>';

$tecnologia = 'PHP';

switch($tecnologia) {
    case 'PHP': 
        echo 'php god';
        break;
    default:
        echo 'nasds';
        break;    
}


include 'includes/footer.php';
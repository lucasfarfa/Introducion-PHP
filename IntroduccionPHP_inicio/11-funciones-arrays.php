<?php include 'includes/header.php';

// in_array - buscar elementos en array.
$carrito = ['Tablet','PC','TV'];
var_dump( in_array('Tablet',$carrito)); // (CONTENIDO , ARRAY)

// Ordenar elemenots de un array
$numeros = array(1,2,3,4,5,1,2);

sort($numeros); // menor a mayor
rsort($numeros); // de mayor a menor

// Ordenar array asociativo
$cliente = array(
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Lucas'
);

asort($cliente); // asort ordena segun valores DE A a Z
ksort($cliente); // ksort ordenna por llaves DE A a Z
//krsort arsort igual pero al reves DE Z a A

echo '<pre>';
var_dump($cliente);
echo '</pre>';


include 'includes/footer.php';
<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('Pedro','Juan','Karen');
$cliente = [
    'nombre' => 'juan',
    'saldo' => 200
];

// Empty - Chequea si un array esta vacio
var_dump( empty($clientes));
var_dump( empty($clientes2));
var_dump( empty($clientes3));

// Isset - Revisa si un array esta creado o una propiedad definida
var_dump( isset($clientes4)); // no existe tal array

var_dump( isset($cliente['nombre'])); //existe nnmbre


include 'includes/footer.php';
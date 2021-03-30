<?php include 'includes/header.php';

$carrito = ['Tablet', 'Television', 'Computadora']; // se usa mas en larabel

// Acceder elemento del array
echo $carrito[1]; // con [n] accedo a sus indices

// Agrega elemetno en indice 3 del array
$carrito[3] = 'Nuevo producto...';

// Agrega elemento al final de array
array_push($carrito, 'Auriculares');

// Agregar al inicio
array_unshift($carrito,'Smartwatch');

// Util para ver contenidos de array
echo "<pre>"; // mejora el formato de var_dump
var_dump($carrito);
echo "</pre>";

// Otra forma de manejar arrays
$clientes = array('Cliente 1', 'Cliente 2', 'Cliente 3'); // se usa mas en wordpress

echo "<pre>"; 
var_dump($clientes);
echo "</pre>";

include 'includes/footer.php';

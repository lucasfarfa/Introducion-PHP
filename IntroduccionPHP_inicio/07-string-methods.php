<?php include 'includes/header.php';

$nombre_cliente = "Lucas Farfallini";

// Conocer extension de string
echo strlen($nombre_cliente); 

// Eliminar espacios en blanco, inicio y final
echo trim($nombre_cliente); // imprime sin espacios en blanco

// Convertir a mayusculas desde PHP
echo strtoupper($nombre_cliente);

// Convertir en minusculas
echo strtolower($nombre_cliente);

// Ejemplo de uso

$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

var_dump((strtolower($mail1) ===strtolower($mail2))); // imprimira true

// Remplazar letra
echo str_replace("Lucas", "Tiago", $nombre_cliente); // lo que voy a reemplazar, con que , variable

// Revisar si un str existe o no
echo strpos($nombre_cliente, "Lucas");

// Concatenar en php
$tipo_cliente = "Premium";

echo "<br>";

echo "El cliente " . $nombre_cliente . " es " . $tipo_cliente; // se concatena con .
echo " El cliente {$nombre_cliente} es {$tipo_cliente}"; // tambien asi

include 'includes/footer.php';
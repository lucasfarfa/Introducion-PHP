<?php 
declare(strict_types = 1); // GOD, ayudaa evitar errores y va arriba del todo
include 'includes/header.php';



function sumar($n1, $n2)
{
    echo $n1 + $n2;
}
sumar(2, 3); // igual que javascript

function sumarD(int $n1 = 0, int $n2 = 0) // con esto obligo al usuario a usar numeros de tipo INT
{ // valores default como en JS. puede ir int, bool, float, array, etc
    echo $n1 + $n2;
}
sumarD(n2: 2, n1: 3);// asi selecciono que parametro es cada uno

include 'includes/footer.php';

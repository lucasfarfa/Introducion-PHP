<?php include 'includes/header.php';

$n1 = 20;
$n2 = 30;
$n3 = 30;
$n4 = '30';

var_dump($n1 > $n2);
echo "<br>";

var_dump($n1 < $n2);
echo "<br>";

var_dump($n1 >= $n2);
echo "<br>";

var_dump($n1 <= $n2);
echo "<br>";

var_dump($n1 == $n3);
echo "<br>";

var_dump($n1 == $n4); // el == no le importa si es str el numero 4
echo "<br>";

var_dump($n1 === $n2); // === si el importa el tipo de dato/.
echo "<br>";

var_dump($n1 <=> $n2 ); // <=> si el n1 es menor n2 imprime -1, 0 si es igual, 1 si es n1 es > n2
echo "<br>";

include 'includes/footer.php';
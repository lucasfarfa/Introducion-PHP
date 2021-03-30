<?php include 'includes/header.php';

// While, usado para recorrer databases
$i = 0;

while($i < 10):
    echo $i . '<br>';
    $i++;
endwhile; // asi se evitan llaves

echo'<br>';

// Do while
$i = 0;

do {
    echo $i . '<br>';
    $i++;
} while($i < 10);

echo'<br>';

// For loop
for($i = 0; $i < 10; $i++):
    echo $i . '<br>';
endfor;

/** tipico ejercicio de entrevista
 * divisible por 3 imprimir FIZZ
 * divisible por 5 imprimir BUZZ
 * divisible por 3 y 5 imprimir FIZZ BUZZ
*/
// for($i = 0; $i < 100; $i++){
//     if($i%3 === 0 && $i%5 === 0) { // primero este sin else if va mejor
//         echo  $i . 'FIZZ BUZZ' . '<br>';
//     } else if($i%3 === 0) {
//         echo $i . 'FIZZ'. '<br>';
//     } else if($i%5 === 0) {
//         echo $i . 'BUZZ' . '<br>';
//     } else {
//         echo $i  . '<br>';
//     }
    
// }

//echo count($clientes); // imrpime extension del array
//pero con for each no es ncesario

// For Each, es mejor para recorrer arrays
$clientes = ['Pedro','Juan','Karen'];

foreach( $clientes as $cliente ):
    echo $cliente;
endforeach;

$cliente = [
    'nombre' => 'Lucas',
    'saldo' => 200,
    'tipo' => 'Premium'
];

foreach( $cliente as $key => $valor ){ // imprimo la llave y su valor
    echo $key . '-' .$valor;
}



include 'includes/footer.php';
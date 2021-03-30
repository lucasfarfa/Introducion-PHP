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

foreach($productos as $producto) { ?> <!-- ciero php para generar html -->

    <li>
        <p>Producto: <?php echo $producto['nombre'] ?> </p> 
        <p>Precio: <?php echo  '$ ' . $producto['precio'] ?> </p> 
        <p><?php echo($producto['disponible']) ? 'Disponible' : 'No disponible'; ?> </p>
        <!-- <?php // CODIGO EQUIVALENTE AL DE ? (TERNARIO) ? que hace conndicion 1 : que asi si no
            // if($producto['disponible']){
            //     echo "<p>Disponible<p>";
            // } else {
            //     echo "<p>No disponible<p>";
            // }
        ?> -->
    </li>

    <?php // lo miusmo, en una etiqueta abro php para agregar cosas de php
}




include 'includes/footer.php';

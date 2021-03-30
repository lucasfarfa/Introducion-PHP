<?php 
declare(strict_types=1);
include 'includes/header.php';

// se puede poner void cuando no devuelve nada. sino se ponne string o void sin el ?
function usuarioAutenticado(bool $autenticado) : ?string{ // ? - que es opcional que devuelva un str
    if($autenticado) {
        return 'Usuario autenticado';
    } else {
        return null;
    }
}

$usuario = usuarioAutenticado(false);
echo $usuario;

include 'includes/footer.php';
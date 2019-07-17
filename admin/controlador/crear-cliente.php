<?php 
    require_once('../modelo/cliente.php');

    $cliente = new Cliente();

    $resul = $cliente->crear_cliente();

    var_dump($resul);


?>
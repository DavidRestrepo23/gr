<?php
    require_once('../modelo/cliente.php');
    $id = $_GET['id'];
    $cliente = new Cliente();
    $resul = $cliente->eliminar_cliente($id);
    $base_url = "http://" . $_SERVER['SERVER_NAME'] ."/gr/admin/vista/listado-cliente.php";

    if($resul == true) {
        header('Location:'. $base_url."?status=delete");
    }
?>
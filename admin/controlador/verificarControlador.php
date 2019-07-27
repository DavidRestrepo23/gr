<?php
    session_start();
    require_once('../modelo/cliente.php');

    $model = new Cliente();

    $resul = $model->buscar_cliente_cedula($_POST['identification']);

    if ($resul->num_rows > 0) {
        $row = $resul->fetch_assoc();
        if($row) {
            $_SESSION['user']  = $row['identification'];
        }
        header('Location:'. $_POST['back_url']);
    }

?>
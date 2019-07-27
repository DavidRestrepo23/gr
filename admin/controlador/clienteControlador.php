<?php 
    require_once('../modelo/cliente.php');

    $model = new Cliente();

    
    if(isset($_POST['method'])) {

        $data = array(
            "id"             => $_POST['id'],
            "identification" => $_POST['identification'],
            "name"           => $_POST['name'],
            "mobile"         => $_POST['mobile'],
            "email"          => $_POST['email']
        );

        $resul = $model->editar_cliente($data);
        if($resul) {
            header('Location:'. $_POST['back_url']."?status=edit");
            return;
        }else {
            header('Location:'. $_POST['back_url']."?status=error");
            return;
        }

    } else {

        $data = array(
            "identification" => $_POST['identification'],
            "name"           => $_POST['name'],
            "mobile"         => $_POST['mobile'],
            "email"          => $_POST['email']
        );
    
        
        $resul = $model->crear_cliente($data);
    
        if($resul['msg'] == 'ya existe') {
            header('Location:'. $_POST['back_url']."?status=warning");
            return;
        }
    
        if($resul) {
            header('Location:'. $_POST['back_url']."?status=success");
            return;
        }else {
            header('Location:'. $_POST['back_url']."?status=error");
            return;
        }
    }


    

?>
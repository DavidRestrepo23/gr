<?php include('./partials/header.php') ?>
    
    <?php 
        require_once('../modelo/cliente.php');

        $id = $_GET['id'];
        $cliente = new Cliente();
        
        $resul = $cliente->buscar_cliente($id);

        if ($resul->num_rows > 0) {
            while ($row = $resul->fetch_assoc()) {
                $id     = $row['id'];
                $identification = $row['identification'];
                $name   = $row['name'];
                $mobile = $row['mobile'];
                $email  = $row['email'];
            }
        }

    ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xs-12 col-sm-6">
                <h1 class="my-5 text-center">Editar cliente</h1>
                <form action="<?php echo $base_url ?>/controlador/clienteControlador.php" method="post" id="customCreateForm">
                    <div class="form-group">
                        <input type="hidden" class="form-control" value="<?php echo $base_url ?>/vista/listado-cliente.php" name="back_url" >
                        <input type="hidden" name="id" class="form-control" value="<?php echo $id ?>">
                        <input type="hidden" name="method" class="form-control" value="update">
                    </div>
                    <div class="form-group">
                        <label>Cédula</label>
                        <input type="text" class="form-control" value="<?php echo $identification ?>" name="identification" required="required">
                    </div>
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" value="<?php echo $name ?>" name="name" required="required">
                    </div>
                    <div class="form-group">
                        <label>Teléfono</label>
                        <input type="text" class="form-control" value="<?php echo $mobile ?>" name="mobile" required="required">
                    </div>
                    <div class="form-group">
                        <label>Correo</label>
                        <input type="email" class="form-control" value="<?php echo $email ?>" name="email" required="required">
                    </div>
                    <div class="text-right">
                        <button type="submit" class="submit btn btn-primary" id="customCreate">Editar Cliente</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php include('./partials/footer.php') ?>
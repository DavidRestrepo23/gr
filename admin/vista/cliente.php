<?php include('./partials/header.php') ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xs-12 col-sm-6">
                <h1 class="my-5 text-center">Crear cliente</h1>
                <form action="<?php echo $base_url ?>/controlador/clienteControlador.php" method="post" id="customCreateForm">
                    <div class="form-group">
                        <input type="hidden" class="form-control" value="<?php echo $base_url ?>/vista/cliente.php" name="back_url" >
                    </div>
                    <div class="form-group">
                        <label>Cédula</label>
                        <input type="text" class="form-control" name="identification" required="required">
                    </div>
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="name" required="required">
                    </div>
                    <div class="form-group">
                        <label>Teléfono</label>
                        <input type="text" class="form-control" name="mobile" required="required">
                    </div>
                    <div class="form-group">
                        <label>Correo</label>
                        <input type="email" class="form-control" name="email" required="required">
                    </div>
                    <div class="text-right">
                        <button type="submit" class="submit btn btn-primary" id="customCreate">Crear Cliente</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php include('./partials/footer.php') ?>
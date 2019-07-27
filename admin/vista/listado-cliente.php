<?php include('./partials/header.php') ?>

<?php
require_once('../modelo/cliente.php');

$lista = new Cliente();
$clientes =  $lista->listar_clientes();

?>

<div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Correo</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
          </tr>
        </thead>
        <tbody>
          <?php

          if ($clientes->num_rows > 0) {
            while ($row = $clientes->fetch_assoc()) {
              ?>
              <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['mobile'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><a href="<?php echo $base_url."/vista/editar-cliente.php?id=".$row['id'] ?>">Editar</a></td>
                <td><a href="<?php echo $base_url."/vista/eliminar-cliente.php?id=".$row['id'] ?>">Eliminar</a></td>
              </tr>
            <?php
            }
          }

          ?>
        </tbody>
    </div>
  </div>
</div>


<?php include('./partials/footer.php') ?>
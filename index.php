<?php
include 'model/conexion.php';
$sentencia = $bd->query('select * from vehiculo');
$vehiculo = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>


<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/icono.ico">
    <title>Tienda de Vehículos</title>
  </head>
  <body>
    <!-- inicio menú -->
    <?php
  session_start();
  if (!isset($_SESSION['usuario'])) {
    include 'maqueta/menu.php';
  } else {
    include 'maqueta/menu_account.php';
  }
  ?>
    <!-- fin menú -->

    <!-- vehiculos -->
    <div class="container mt-20">
      <div class="row">

        <?php
          foreach ($vehiculo as $dato) {
        ?>

        <div class="col-md-4 text-center mt-4">
          <a href="detalle-vehiculo.php?codigo=<?php echo $dato->idVehiculo ?>"><img src="img/<?php echo $dato->foto ?>" class="img-fluid"></a>
          <h2> <?php echo $dato->nomVehiculo; ?> </h2>
          <h3> <?php echo $dato->precio; ?> € </h3>
          <a href="detalle-vehiculo.php?codigo=<?php echo $dato->idVehiculo ?>" class="btn btn-primary">Ver detalles</a>
        </div>
        <?php
          }
        ?>

      </div>
    </div>
    <!-- fin vehiculos -->
     <!-- inicio footer -->
    <?php include 'maqueta/footer.php' ?>
    <!-- fin footer -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>
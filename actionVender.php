<?php
include 'model/conexion.php';

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$tipo = $_POST['tipo'];
$potencia = $_POST['potencia'];
$combustible = $_POST['combustible'];
$año = $_POST['año'];
$kilometros = $_POST['kilometros'];
$matricula = $_POST['matricula'];

$stmt = $bd->query("INSERT INTO segundamano VALUES ('$nombre','$precio' ,'$tipo', '$potencia','$combustible','$año' ,'$kilometros','$matricula')");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
       <!-- Required meta tags -->
       <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <title>Tienda de Vehículos - Vender</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
<div class="container  p-10 bg-light">

<div class="card-body">
  <div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
      <main>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5">
              <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                  <h3 class="text-center font-weight-light my-4">Vender vehículo</h3>
                </div>
                <div class="card-body">
                  <h3>Los datos del vehículo se han enviado a nuestros servidores. En breve nos pondremos en contacto con usted</h3>
                </div>
                <div class="card-footer text-center">
                  <div class="small"><a href="index.php">Volver</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
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
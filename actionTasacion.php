<?php
include 'model/conexion.php';


$stmt = $bd->query("INSERT INTO tasacion (MarcID,ModelId,año,kilometros) VALUE ($_POST[MarcID],$_POST[ModelId],$_POST[año],$_POST[kilometros])");

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

    <title>Tienda de Vehículos - Tasación</title>
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

    <div class="card-body">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">Tasación de vehículo</h3>
                                    </div>
                                    <div class="card-body">
                                    <form action="index.php" method="POST" >
                                        <h3>Los datos del vehículo se han enviado a nuetros servidores. En breve le indicaremos el valor de la tasación</h3>
                                        <div class="form-group"><label class="small mb-1">Introduce tu email si no te has registrado para recibir el informe </label><input class="form-control py-3" name="correo" id="correo" type="correo" aria-describedby="emailHelp" placeholder="Introduce tu email" required="" /></div>
                                        <div class="form-group mt-4 mb-0"><button type="submit" class="btn btn-primary btn-block" name="enviar" value="Guardar">Enviar correo</button></div>
                                    </form>
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
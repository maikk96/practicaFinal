<?php
include 'model/conexion.php';
$sentencia = $bd->query('select * from usuarios');
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
    <link rel= "css/estilos.css">
    <title>Tienda de Vehículos</title>
  </head>
  <body>
    <!-- inicio menú -->
    <?php include 'maqueta/menu.php' ?>
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
                  <h3 class="text-center font-weight-light my-4">Rellene los datos de su vehiculo</h3>
                </div>
                <div class="card-body">
                  <form method="POST" action="#">
                    <div class="form-group"><input class="form-control py-4" id="nomVehiculo" name="nomVehiculo" type="text" placeholder="Introduce nombre vehiculo" /></div>
                    <div class="form-group"><input class="form-control py-4" id="precio" name="precio" type="text" placeholder="Introducir precio de venta" /></div>
                    <div class="form-group">
                      <select data-qa-selector="step-marke" class="form-control" name="tipo[]">
                        <option value="0">Tipo de vehiculo</option>
                        <option value="1">Autos</option>
                        <option value="2">Camionetas</option>
                        <option value="3">Deportivos</option>
                      </select>
                    </div>
                    <div class="form-group"><input class="form-control py-4" id="precio" name="precio" type="text" placeholder="Introducir precio de venta" /></div>
                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                      <button type="submit" class="btn btn-primary">Vender vehiculo</button>
                    </div>
                  </form>
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

    <?php include 'maqueta/footer.php' ?>
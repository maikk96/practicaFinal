<?php
if (!isset($_GET["codigo"])) {
  exit();
}

$codigo = $_GET["codigo"];
include 'model/conexion.php';
$sentencia = $bd->prepare("select * from vehiculo where idVehiculo = ?");
$sentencia->execute([$codigo]);
$vehiculo = $sentencia->fetch(PDO::FETCH_OBJ);
?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <title>Detalle de Auto</title>
  </head>
  <body>
    <!-- inicio menú -->
    <?php include 'maqueta/menu.php' ?>
    <!-- fin menú -->

    <!-- contenido detalle -->
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="img/<?php echo $vehiculo->foto; ?>" class="img-fluid">
        </div>
        <div class="col-md-6">
          <h1> <?php echo $vehiculo->nomVehiculo; ?> </h1>
          <h6>Desde: <?php echo $vehiculo->precio; ?>€</h6>
          <p><?php echo $vehiculo->detalle; ?></p>
        </div>
      </div>
    </div>
    <!-- fin detalle -->
  <div class="container"> 
      <img src="img/<?php echo $vehiculo->foto1; ?>"  style="width: 285px; height: 185px;" class="rounded float-start" alt="">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <img src="img/<?php echo $vehiculo->foto2; ?>"  style="width: 285px; height: 185pxm-4;" class="rounded float-end" alt="">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <img src="img/<?php echo $vehiculo->foto3; ?>"  style="width: 285px; height: 185px;p-4" class="rounded float-end" alt="">
  <div class="card-bodyp-3">
    <h5 class="card-title"> <?php echo $vehiculo->nomVehiculo; ?></h5>
    <img src="img/icons8-us-dollar-circled.gif" style="width: 50px; height: 50px;" /> 
    <p class="card-text"> <small class="text-primary"><?php echo $vehiculo->precio;?>€</small></p>
  </div>
  </div>
  <!-- Tabla Renault Diesel-->  
  <div class="container mt-5">
    
  
 <table class="specifications-car-table table-secondary col-md-12">
                <thead>
                <tr>
                    <th colspan="2 ">Prestaciones</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Velocidad máxima</td>
                    <td><?php echo $vehiculo->velocidadmax; ?> </td>
                </tr>
                <tr>
                    <td>Aceleración 0-100 km/h</td>
                    <td><?php echo $vehiculo->aceleracion; ?> </td>
                </tr>
                <tr>
                    <td>Consumo (urbano/extraurbano/mixto)</td>
                    <td> <?php echo $vehiculo->consumo; ?> </td>
                </tr>
                </tbody>
                <thead>
                <tr>
                    <th colspan="2">Dimensiones</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Carrocería</td>
                    <td> <?php echo $vehiculo->carroceria; ?> </td>
                </tr>
                <tr>
                    <td>Largo/Ancho/Alto</td>
                    <td> <?php echo $vehiculo->dimensiones; ?> </td>
                </tr>
                    
                <tr>
                    <td>Maletero</td>
                    <td> <?php echo $vehiculo->maletero; ?> </td>
                </tr>
                </tbody>
                <thead>
                <tr>
                    <th colspan="2">Motorización</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Combustible</td>
                    <td> <?php echo $vehiculo->combustible; ?> </td>
                </tr>
                <tr>
                    <td>Cilindrada</td>
                    <td> <?php echo $vehiculo->cilindrada; ?> </td>
                </tr>
                                <tr>
                    <td>Potencia combustión</td>
                    <td> <?php echo $vehiculo->potencia; ?> </td>
                </tr>
                
                <thead>
                <tr>
                    <th colspan="2">Transmisión</th>
                </tr>
                </thead>
                <tbody>                    
                <tr>
                    <td>Cambio</td>
                    <td> <?php echo $vehiculo->cambio; ?> </td>
                </tr>
                </tbody>
                <thead>
                </thead>
                <tbody>
            </table>
            </div>
           
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
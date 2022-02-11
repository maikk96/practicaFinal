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
      <img src="img/renaultclio.png"  style="width: 285px; height: 185px;" class="rounded float-start" alt="">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <img src="img/renaultclio3.png"  style="width: 285px; height: 185px;" class="rounded float-end" alt="">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <img src="img/renaultclio2.png"  style="width: 285px; height: 185px;" class="rounded float-end" alt="">
  <div class="card-body">
    <h5 class="card-title">Renault Clio 1.5DCI</h5>
    <img src="img/icons8-us-dollar-circled.gif" style="width: 50px; height: 50px;" /> 
    <p class="card-text"> <small class="text-primary">20.090€</small></p>
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
                    <td>178 km/h </td>
                </tr>
                <tr>
                    <td>Aceleración 0-100 km/h</td>
                    <td> 14,7 s </td>
                </tr>
                <tr>
                    <td>Consumo (urbano/extraurbano/mixto)</td>
                    <td> 4,3/3,2/3,6 l/100 km </td>
                </tr>
                <tr>
                    <td>CO2</td>
                    <td> 95 </td>
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
                    <td> 5 puertas </td>
                </tr>
                <tr>
                    <td>Largo/Ancho/Alto</td>
                    <td> 4.050 /
                         1.988 /
                         1.440 mm </td>
                </tr>
                                                   <tr>
                        <td>Peso</td>
                        <td>1.277 kg</td>
                    </tr>
                                <tr>
                <tr>
                    <td>Carga máxima</td>
                    <td> 1.702 kg </td>
                </tr>
                <tr>
                    <td>Depósito</td>
                    <td> 39 litros </td>
                </tr>
                <tr>
                    <td>Maletero min</td>
                    <td> 366 litros </td>
                </tr>
                <tr>
                    <td>Maletero max</td>
                    <td> 1.069 litros </td>
                </tr>
                <tr>
                    <td>Plazas</td>
                    <td> 5 </td>
                </tr>
                </tbody>
                <thead>
                <tr>
                    <th colspan="2">Motorización</th>
                </tr>
                </thead>
                <tbody>
                    <td>Número de cilindros</td>
                    <td> 4 </td>
                </tr>
                <tr>
                    <td>Disposición</td>
                    <td> línea </td>
                </tr>
                <tr>
                    <td>Combustible</td>
                    <td> Diésel </td>
                </tr>
                <tr>
                    <td>Cilindrada</td>
                    <td> 1.461 cc </td>
                </tr>
                                <tr>
                    <td>Potencia combustión</td>
                    <td> 85 cv /
                         3.750 rpm </td>
                </tr>
                                                                <tr>
                    <td>Par motor</td>
                    <td> 220 Nm /
                         1.750 rpm </td>
                </tr>
                <tr>
                    <td>Potencia específica</td>
                    <td> 17,2 cv/l </td>
                </tr>
             <thead>
                <tr>
                    <th colspan="2">Transmisión</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Tracción</td>
                    <td> Delantera </td>
                </tr>
                <tr>
                    <td>Cambio</td>
                    <td> Manual </td>
                </tr>
                <tr>
                    <td>Número de velocidades</td>
                    <td> 6 </td>
                </tr>
                </tbody>
                <thead>
                <tr>
                    <th colspan="2">Chasis</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Suspensión delantera</td>
                    <td> McPherson </td>
                </tr>
                <tr>
                    <td>Suspensión trasera</td>
                    <td> Eje rígido </td>
                </tr>
                <tr>
                    <td>Frenos delanteros</td>
                    <td> discos ventilados  </td>
                </tr>
                <tr>
                    <td>Frenos traseros</td>
                    <td> discos macizos  </td>
                </tr>
                <tr>
                    <td>Dirección (tipo/asistencia)</td>
                    <td> Eléctrica de asistencia variable </td>
                </tr>
                <tr>
                    <td>Neumáticos delanteros Ancho/Perfil/Llanta</td>
                    <td> 185 /
                         65 /
                         15  </td>
                </tr>
                <tr>
                    <td>Neumáticos traseros Ancho/Perfil/Llanta</td>
                    <td> 185 /
                         65 /
                         15  </td>
                </tr>
            </table>
            </div>

          
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>
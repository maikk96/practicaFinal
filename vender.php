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
  <link rel="css/estilos.css">
    <link rel="shortcut icon" href="img/icono.ico">

  <title>Tienda de Vehículo - Vender coche</title>
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
                      <h3 class="text-center font-weight-light my-4">Rellene los datos de su vehiculo</h3>
                    </div>
                    <div class="card-body">
                      <form action="actionVender.php" method="POST" >
                        <div class="form-group"><input class="form-control py-4" id="nombre" name="nombre" type="text" placeholder="Introduce nombre vehiculo" required=""/></div>
                        <div class="form-group"><input class="form-control py-4" id="precio" name="precio" type="text" placeholder="Introducir precio de venta" required=""/></div>
                        <div class="form-group">
                          <select data-qa-selector="step-marke" class="form-control" id = "tipo" name="tipo" required="">
                            <option value="0">Tipo de vehiculo</option>
                            <option value="1">Autos</option>
                            <option value="2">Camionetas</option>
                            <option value="3">Deportivos</option>
                          </select>
                          &nbsp;
                          <select data-qa-selector="step-marke" class="form-control " id="potencia" name="potencia" required="">
                            <option value="0">Potencia</option>
                            <option value="1">
                              <=40cv </option>
                            <option value="2">
                              <=50cv</option>
                            <option value="3">
                              <=60cv</option>
                            <option value="4">
                              <=70cv</option>
                            <option value="5">
                              <=80cv</option>
                            <option value="6">
                              <=90cv</option>
                            <option value="7">
                              <=100cv</option>
                            <option value="8">
                              <=110cv</option>
                            <option value="9">
                              <=120cv</option>
                            <option value="10"> >=130cv</option>
                            <option value="11"> >=200cv</option>
                          </select>
                          &nbsp;
                          <select data-qa-selector="step-marke" class="form-control" id="combustible" name="combustible" required="">
                            <option value="0">Combustible</option>
                            <option value="1"> Gasolina </option>
                            <option value="2"> Diesel </option>
                            <option value="3"> Hibrido </option>
                            <option value="4"> Electrico </option>
                            <option value="5"> Hibrido Enchufable </option>
                          </select>
                          &nbsp;
                          <select data-qa-selector="step-marke" class="form-control" id="año" name="año" required="">
                            <option value="0">Año</option>
                            <option value="1"> 1990</option>
                            <option value="2"> 2000</option>
                            <option value="3"> 2001</option>
                            <option value="4"> 2002</option>
                            <option value="5"> 2003</option>
                            <option value="6"> 2004</option>
                            <option value="7"> 2005</option>
                            <option value="8"> 2006</option>
                            <option value="9"> 2007</option>
                            <option value="10"> 2008</option>
                            <option value="11"> 2009</option>
                            <option value="12"> 2010</option>
                            <option value="13"> 2011</option>
                            <option value="14"> 2012</option>
                            <option value="15"> 2013</option>
                            <option value="16"> 2014</option>
                            <option value="17"> 2015</option>
                            <option value="18"> 2016</option>
                            <option value="19"> 2017</option>
                            <option value="20"> 2018</option>
                            <option value="21"> 2019</option>
                            <option value="22"> 2020</option>
                            <option value="23"> 2021</option>
                          </select>
                          &nbsp;
                          <select data-qa-selector="step-marke" class="form-control" id = "kilometros"name="kilometros" required="">
                            <option value="0">Kilometros</option>
                            <option value="1">Desde 10.000km</option>
                            <option value="2">Desde 20.000km</option>
                            <option value="3">Desde 30.000km</option>
                            <option value="4">Desde 40.000km</option>
                            <option value="5">Desde 50.000km</option>
                            <option value="6">Desde 60.000km</option>
                            <option value="7">Desde 70.000km</option>
                            <option value="8">Desde 80.000km</option>
                            <option value="9">Desde 90.000km</option>
                            <option value="10">Desde 100.000km</option>
                            <option value="11">Desde 110.000km</option>
                            <option value="12">Desde 120.000km</option>
                            <option value="13">Desde 130.000km</option>
                            <option value="14">Desde 140.000km</option>
                            <option value="15">Desde 150.000km</option>
                            <option value="16">Desde 160.000km</option>
                            <option value="17">Desde 170.000km</option>
                            <option value="18">Desde 180.000km</option>
                            <option value="19">Desde 190.000km</option>
                            <option value="20">Desde 200.000km</option>
                            <option value="21">Desde 210.000km</option>
                            <option value="22">Desde 220.000km</option>
                            <option value="23">Desde 230.000km</option>
                            <option value="24">Desde 240.000km</option>
                            <option value="25">Desde 250.000km</option>
                            <option value="26">Desde 260.000km</option>
                            <option value="27">Desde 270.000km</option>
                          </select>
                        </div>
                        <div class="form-group"><input class="form-control py-4" id="matricula" name="matricula" type="text" placeholder="Matricula" required=""/></div>
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

  <div class=" container card mb-3 mt-5" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img data-lazy-src="//content.compramostucoche.es/static/car_images/precio-garantizado-coche-2.jpg" class="img-responsive visible-xs" alt="Introducir los detalles del coche online" title="" src="//content.compramostucoche.es/static/car_images/precio-garantizado-coche-2.jpg">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <li>Introduce los datos del coche para obtener el precio final de venta de tu coche.</li>
          <li>Tú decides si quieres vender o no, ¡sin compromiso!</li>
          <li>Entrega tu coche en un de nuestras sucursales</li>
        </div>
      </div>
    </div>
  </div>
  <div class=" container card mb-3 mt-5" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img data-lazy-src="//content.compramostucoche.es/static/car_images/cita-entrega-precio-garantizado.jpg" class="img-responsive visible-xs" alt="precio final de venta recibido online" title="" src="//content.compramostucoche.es/static/car_images/cita-entrega-precio-garantizado.jpg">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <li>Pagamos inmediatamente mediante transferencia bancaria de forma segura. En un plazo de 15 dias laborables</li>
          <li>Abiertos de lunes a domingo de 08:00h a 22:00h y online las 24/7h</li>
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
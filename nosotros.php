<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  <link rel="shortcut icon" href="img/icono.ico">

  <title>Tienda de Vehículos - Nosotros</title>


</head>

<body>
  <!-- inicio menú -->
  <?php
session_start();
if (!isset($_SESSION['usuario'])) {
    include 'maqueta/menu.php';
    }else{
      include 'maqueta/menu_account.php';
    }
    ?>
  <!-- fin menú -->
  

 <!-- fin vehiculos -->

 <div class="container">
<div style="text-align: center;">
<h1>¿Quiénes somos?</h1>
<div style="text-align: justify;"><br style="font-family: Consolas;">
  <span style="font-family: Consolas;">Somos una empresa que se dedica a
la compra-venta de vehiculos, de momento estamos activos en España,
vendiendo vehiculos localmente. En un futuro haremos exportaciones del
extrangero para que puedas tener tu flamante vehiculo nuevo dando igual
la procedencia del vehiculo. </span><br style="font-family: Consolas;">
<br style="font-family: Consolas;">
  <span style="font-family: Consolas;">En cuanto a nuestros servicios
vendemos vehiculos nuevos, tambien hacemos tasaciones de su vehiculo
usado.</span><br style="font-family: Consolas;">
<br style="font-family: Consolas;">
<ul style="font-family: Consolas;">
  <li><span style="font-weight: bold;">Vehiculos nuevos</span>: Como
hemos mencionado, vendemos coches nuevos a precios asequibles. Nostros
nos ocuparemosde enviale un pdf para que firme las condiciones via
online o si quiere tambien tenemos la opcion de hacer la venta en una
de uestras oficinas situadas en Madrid (España).</li>
  <li><span style="font-weight: bold;">Tasaciones:</span> Se puede
tasar su coche para que sepa el precio de valor de venta que se le
ofreceria. Nosotros recibiremos la informacion mediante el relleno de
un formulario web. <br>
  </li>
</ul>
<br>
</div>
</div>
</div>
 
  <!-- inicio footer -->
  <?php include 'maqueta/general.php' ?>
  <?php include 'maqueta/footer.php' ?>


  
</script>
  <!-- fin footer -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>


</body>

</html>

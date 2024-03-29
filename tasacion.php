<?php
include 'model/conexion.php';
$query = $bd->query("SELECT * FROM marca");
$marca = array();
while($r=$query->fetchObject()){ $marca[]=$r; }

?>

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

  <title>Tienda de Vehículos - Tasación</title>
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

  <div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
      <main>
        <div class="container">
          <div class="row justify-content-center">
            <div clas s="col-lg-7">
              <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                  <h3 class="text-center font-weight-light my-4">Tasación gratuita. Introduce los datos de tu vehiculo</h3>
                </div>
                <div class="card-body">
                  <form action="actionTasacion.php" method="POST">
                    <div class="form-row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <select id="MarcID" data-qa-selector="step-marke" class="form-control" name="MarcID" required="" >
                            <?php
                            foreach ($marca as $m) :?>
                              <option value="<?php echo $m->MarcID; ?>"><?php echo $m->MarcDesc; ?></option>;
                              <?php endforeach;
                            ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <select id="ModelId" data-qa-selector="step-marke" class="form-control" name="ModelId" required="" >
                          <option value="">SELECCIONE MODELO</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <select data-qa-selector="step-marke" class="form-control" id="año" name="año" required="" >
                            <option disable="" value="0">MATRICULACION</option>
                            <option value="1">2022</option>
                            <option value="2">2021</option>
                            <option value="3">2020</option>
                            <option value="4">2019</option>
                            <option value="5">2018</option>
                            <option value="6">2017</option>
                            <option value="7">2016</option>
                            <option value="8">2015</option>
                            <option value="9">2014</option>
                            <option value="10">2013</option>
                            <option value="11">2012</option>
                            <option value="12">2011</option>
                            <option value="13">2010</option>
                            <option value="14">2009</option>
                            <option value="15">2008</option>
                            <option value="16">2007</option>
                            <option value="17">2006</option>
                            <option value="18">2005</option>
                            <option value="19">2004</option>
                            <option value="20">2003</option>
                            <option value="21">2002</option>
                            <option value="22">2001</option>
                            <option value="23">2000</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group"><input class="form-control py-1.5" name="kilometros" id="kilometros" type="text" placeholder="Introduce kilometros" required="" /></div>
                      </div>
                    </div>
                    <div class="form-group mt-4 mb-0"><button type="submit" class="btn btn-primary btn-block" name="enviar" value="Guardar">Obtener Tasación</button></div>
                  </form>
                  <?php
                  if (isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['usuario']) && isset($_POST['telefono']) && isset($_POST['correo']) && isset($_POST['contraseña']) && isset($_POST['contraseña_conf']))
                    include 'model/conexion.php';
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
 <!-- fin vehiculos -->
  <!-- inicio footer -->
  <?php include 'maqueta/general.php' ?>
  <?php include 'maqueta/footer.php' ?>

  <script type="text/javascript">
	$(document).ready(function(){
		$("#MarcID").change(function(){
			$.get("modelo.php","MarcID="+$("#MarcID").val(), function(data){
				$("#ModelId").html(data);
				console.log(data);
			});
		});
	});

</script>
  <!-- fin footer -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>


</body>

</html>

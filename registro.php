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
   

    <title>Tienda de Vehículos</title>
   </head>
   <body>
    <!-- inicio menú -->
  <?php include 'maqueta/menu.php' ?>

 <div class= "container  p-10 bg-light">

    <form class="row  needs-validation" novalidate>
       <div class=" container  col-md-6 ">
         <label for="validationCustom01" class="form-label">Nombre</label>
         <input type="text" class="form-control" id="validationCustom01"  required>
           <div class="valid-feedback">
            No es correcto!
           </div>
        </div>
        <div class="  col-md-4 container-form">
          <label for="validationCustom02" class="form-label">Apellido</label>
          <input type="text" class="form-control" id="validationCustom02"  required>
          <div class="valid-feedback">
          No es correcto!
         </div>
        </div>
         <div class="container col-md-6">
             <label for="validationCustomUsername" class="form-label">Correo</label>
              <div class="input-group has-validation">
             <span class="input-group-text" id="inputGroupPrepend">@</span>
              <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
              Por favor introduzca un correo valido.
            </div>
            </div>
        </div>
        <div class="col-md-4">
         <label for="validationCustom03" class="form-label">Telefono</label>
         <input type="text" class="form-control" id="validationCustom03" required>
          <div class="invalid-feedback">
             No es correcto.
            </div>
        </div>
        <div class=" container  col-md-7 container-form">
           <label for="validationCustom02" class="form-label">contraseña</label>
           <input type="text" class="form-control" id="validationCustom02"  required>
           <div class="valid-feedback">
             No es correcto!
             </div>
         </div>
  
        <div class=" container col-7 p-3">
          <div class=" form-check ">
              <input class="  form-check-input" type="checkbox" value="" id="invalidCheck" required>
              <label class=" container form-check-label" for="invalidCheck">
                 Acepto los terminos y condiciones
               </label>
               <div class="invalid-feedback">
                      Debe aceptar condiciones antes de registrarse.
                </div>
            </div>
        </div>
        
        <div class=" form d-grid gap-2 col-7 mx-auto p-4">

             
              <a href="contacto.php">
                <button class="btn btn-primary ml-4" type="button">Vende tu coche</button>
              </a>
        </div>
   </form>
     
</div> 

<?php include 'maqueta/general.php' ?>
<?php include 'maqueta/footer.php' ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
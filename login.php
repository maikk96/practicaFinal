<?php
include 'model/conexion.php';
$sentencia = $bd->query('select * from usuarios');
$usuario = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
       <!-- Required meta tags -->
       <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Tienda de Vehículos</title>
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    

    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
<!-- inicio menú -->
<?php include 'maqueta/menu.php' ?>
<div class= "container  p-10 bg-light">

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post"class="row  needs-validation" novalidate>
       <div class=" container  col-md-6 ">
         <label for="validationCustom01"  class="form-label">Usuario</label>
         <input type="text" name="usuario" class="form-control" id="validationCustom01"  required>
           <div class="valid-feedback">
            No es correcto!
           </div>
        </div>
        
         
        
        <div class=" container  col-md-7 container-form">
           <label for="validationCustom02" class="form-label">contraseña</label>
           <input type="text" name="clave" class="form-control" id="validationCustom02"  required>
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
                      Debe aceptar condiciones antes de iniciar sesion.
                </div>
            </div>
        </div>
        <?php if(!empty($error)): ?>
            <div class="mensaje">
                <?php echo $error; ?>
            </div>
            <?php endif; ?>
            
        <div class=" form d-grid gap-2 col-7 mx-auto p-4">

              
              
              <a href="registro.php">
                <button class="btn btn-primary ml-4" type="button">Registrate</button>
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



    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
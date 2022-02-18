<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  <link rel="shortcut icon" href="img/icono.ico">

  <title>Tienda de Vehículos - Log In</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

</head>

<body>
  <!-- inicio menú -->
  <?php include 'maqueta/menu.php' ?>
  <!-- fin menú -->
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
                      <h3 class="text-center font-weight-light my-4">Recuperar contraseña</h3>
                    </div>
                    <div class="card-body">
                      <form method="POST" action="password_completado.php">
                        <div class="form-group"><label class="small mb-1" for="usuario">Correo</label><input class="form-control py-4" id="usuario" name="usuario" type="text" placeholder="Introduzca correo" required="" /></div>
                        <div class="form-group">
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="small" href="login.php">¿Quieres iniciar sesión?</a>
                          <button type="submit" class="btn btn-primary">Recuperar contraseña</button>
                        </div>
                      </form>
                    </div>
                    <div class="card-footer text-center">
                      <div class="small"><a href="registro.php">¿Necesitas una cuenta? Regístrate</a></div>
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

  <?php include 'maqueta/general.php' ?>
  <?php include 'maqueta/footer.php' ?>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>

</html>
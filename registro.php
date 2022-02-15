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
   

    <title>Tienda de Vehículos - Registro</title>
   </head>
    <!-- inicio menú -->
  <?php include 'maqueta/menu.php' ?>
  <?php

    require 'model/conexion.php';
    require 'funcs.php';

    $errors = array();

    if(!empty($_POST)){
        $nombre = $mysqli->real_escape_string($_POST['nombre']);//nos ayuda a limpiar la cadena recibida por post y evitar sql inyection
        $usuario = $mysqli->real_escape_string($_POST['usuario']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $password = $mysqli->real_escape_string($_POST['password']);
        $password_conf = $mysqli->real_escape_string($_POST['password_conf']);

        $activo = 0;
        $tipo_usuario = 2;
        $secret = '';

        if(isNull($nombre,$usuario,$email,$password,$password_conf)){
            $errors[] = "Debe llenar todos los campos";
        }

        if(!isEmail($email)){
            $errors[] = "Direccion de correo invalida";
        }

        if(!validaPassword($password,$password_conf)){
            $errors[] = "Las contraseñas no coinciden";
        }

        if(usuarioExiste($usuario)){
            $errors[] = "El usuario $usuario ya existe";
        }

        if(!emailExiste($email)){
            $errors[] = "El correo electrónico $email ya existe";
        }

        if(count($errors) == 0){
            $pass_hash = hashPassword($password);
            $token = generateToken();

            $registro = registraUsuario($nombre, $usuario, $email, $pass_hash, $activo, $token, $tipo_usuario);

            if($registro > 0 ){
                $url = 'http://'.$_SERVER["SERVER_NAME"] .'/login/activar.php?id=' .$registro.'&val='.$token;

                $asunto = 'Activar cuenta - Sistema de usuarios';
                $cuerpo = "Estimado $nombre: <br><br>Para continuar ocn el proceso de registro, es indispensable 
                dar click en el siguiente link <a href='$url'>Activar cuenta</a>";

                /*if(enviarEmail($email, $nombre, $asunto, $cuerpo)){
                    echo"Para termianr el proceso de registro siga las instrucciones enviadas a su email: $email";

                    echo "<br><a href='index.php'>Inciar Sesion</a>";
                    exit;
                }else {
                    $errors[] = "Error al enviar email";
                }*/
            }else {
                $errors[] = "Error al registrar";
            }
        }
    }

?>
    <body>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Crear cuenta</h3></div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1">Nombre</label><input class="form-control py-4" name = "nombre"id="nombre" type="text" placeholder="Introduce tu nombre"
                                                    value = "<?php if (isset($nombre)) echo $nombre;?>" required/></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" >Usuario</label><input class="form-control py-4" name = "usuario" id="usuario" type="text" placeholder="Introduce tu usuario"
                                                    value = "<?php if (isset($usuario)) echo $usuario;?>" required/></div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="small mb-1" >Email</label><input class="form-control py-4" name = "email" id="email" type="email" aria-describedby="emailHelp" placeholder="Introduce tu email"
                                            value = "<?php if (isset($email)) echo $email;?>" required/></div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" >Contraseña</label><input class="form-control py-4" name = "password" id="password" type="password" placeholder="Introduce tu contraseña"
                                                    value = "<?php if (isset($password)) echo $password;?>" required /></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" >Confirmar contraseña</label><input class="form-control py-4" name="password_conf" id="password_conf" type="password" placeholder="Confirmar contraseña"
                                                    value = "<?php if (isset($password_conf)) echo $password_conf;?>" required /></div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0"><button type= "submit" class="btn btn-primary btn-block" >Crear Cuenta</button></div>
                                        </form>
                                        <?php  echo resultBlock($errors);?>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="login.php">¿Tienes una cuenta? Dirígete a Iniciar sesión</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
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
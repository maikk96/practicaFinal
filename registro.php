<?php
include 'model/conexion.php';
?>


<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/icono.ico">

    <title>Tienda de Vehículos - Registro</title>
   </head>
    <!-- inicio menú -->
  <?php include 'maqueta/menu.php' ?>

    <body>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div clas s="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Crear cuenta</h3></div>
                                    <div class="card-body">
                                        <form action = "guardar.php" method="POST" id="frmRegistro">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1">Nombre</label><input class="form-control py-3" name = "nombre"id="nombre" type="text" placeholder="Introduce tu nombre"
                                                    required=""/></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1">Apellidos</label><input class="form-control py-3" name = "apellidos"id="apellidos" type="text" placeholder="Introduce tu apellido"
                                                    required=""/></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" >Usuario</label><input class="form-control py-3" name = "usuario" id="usuario" type="text" placeholder="Introduce tu usuario"
                                                    required=""/></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" >Telefono</label><input class="form-control py-3" name="telefono" id="telefono" type="text" placeholder="Introduce telefono"
                                                    required=""/></div>
                                                </div>
                                            </div>
                                                <div class="form-group"><label class="small mb-1" >Correo </label><input class="form-control py-3" name = "correo" id="correo" type="correo" aria-describedby="emailHelp" placeholder="Introduce tu email"
                                                required=""/></div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" >Contraseña</label><input class="form-control py-3" name = "contraseña" id="contraseña" type="password" placeholder="Introduce tu contraseña"
                                                    required=""/></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" >Confirmar contraseña</label><input class="form-control py-3" name="contraseña_conf" id="contraseña_conf" type="password" placeholder="Confirmar contraseña"
                                                    required="" /></div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0"><button type= "submit" class="btn btn-primary btn-block" name = "enviar"value= "Guardar" >Crear Cuenta</button></div>
                                        </form>
                                      <?php
                                        if(isset($_POST['nombre']) && isset($_POST['apellidos'])&& isset($_POST['usuario'])&& isset($_POST['telefono'])&& isset($_POST['correo'])&& isset($_POST['contraseña'])&& isset($_POST['contraseña_conf']))
                                            include 'model/conexion.php';
                                      ?>
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
<!--
<script type="text/javascript">
	$(document).ready(function(){
		$('#enviar').click(function(){

			if($('#nombre').val()==""){
				alertify.alert("Debes agregar el nombre");
				return false;
			}else if($('#apellidos').val()==""){
				alertify.alert("Debes agregar el apellido");
				return false;
			}else if($('#usuario').val()==""){
				alertify.alert("Debes agregar el usuario");
				return false;
            }else if($('#correo').val()==""){
				alertify.alert("Debes agregar el correo");
				return false;
            }else if($('#telefono').val()==""){
				alertify.alert("Debes agregar el telefono");
				return false;
			}else if($('#contraseña').val()==""){
				alertify.alert("Debes agregar el password");
				return false;
            }else if($('#contraseña_conf').val()==""){
				alertify.alert("Debes agregar el password");
				return false;
			}

			cadena="nombre=" + $('#nombre').val() +
					"&apellidos=" + $('#apellidos').val() +
					"&usuario=" + $('#usuario').val() + 
                    "&correo=" + $('#correo').val() + 
                    "&telefono=" + $('#telefono').val() + 
                    "&password=" + $('#password').val() + 
					"&password_conf=" + $('#password_conf').val();

					$.ajax({
						type:"POST",
						url:"registro.php",
						data:cadena,
						success:function(r){

							if(r==2){
								alertify.alert("Este usuario ya existe, prueba con otro :)");
							}
							else if(r==1){
								$('#frmRegistro')[0].reset();
								alertify.success("Agregado con exito");
							}else{
								alertify.error("Fallo al agregar");
							}
						}
					});
		});
	});
</script-->
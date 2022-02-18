<?php
include 'model/conexion.php';
include 'funcs.php';

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$usuario = $_POST['usuario'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$contraseña_conf = $_POST['contraseña_conf'];


if(!usuarioExiste($usuario)){  //controla que sea un usuario unico
  echo '<script language="javascript">alert("El usuario ya existe");window.location.href="registro.php"</script>';
  die;
}
if(!validaPassword($contraseña,$contraseña_conf)){
  echo '<script language="javascript">alert("Las contraseñas no coinciden");window.location.href="registro.php"</script>';
  die;
}

if(!isEmail($correo)){  //controla que sea un email valido
  echo '<script language="javascript">alert("Introduzca un email valido");window.location.href="registro.php"</script>';
  die;
}


if(!emailExiste($correo)){  //controla que sea un email valido
  echo '<script language="javascript">alert("El email ya existe");window.location.href="registro.php"</script>';
  die;
}



$contraseña = hash('sha256',$contraseña);


$stmt = $bd->query("INSERT INTO usuarios VALUES ('','$nombre', '$apellidos', '$usuario', '$correo', '$telefono', '$contraseña')");


if($stmt)
{
//session_start();
//$_SESSION["usuario"] = $usuario;

header("location:registro_completado.php?q=1");
}
else
{
header("location:index.php?q7=El usuario ya está registrado");
}
ob_end_flush();
?>



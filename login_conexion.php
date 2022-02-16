<?php
session_start();
if(isset($_SESSION["usuario"])){
session_destroy();
}
include_once 'model/conexion.php';
$ref=@$_GET['q'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$usuario = stripslashes($usuario);//quita barras
$usuario = addslashes($usuario);//añade barras
$contraseña = stripslashes($contraseña); 
$contraseña = addslashes($contraseña);
$contraseña=md5($contraseña); //funcion md5 para encriptar la contraseña
$result = $bd->query("SELECT nombre FROM usuarios WHERE usuario = '$usuario' and contraseña = '$contraseña'") or die('Error');
$count=$result->rowCount;

if($count==1){
while($row = $result->fetchAll()) {
	$usuario = $row['usuario'];
}
$_SESSION["usuario"] = $usuario;
$_SESSION["nombre"] = $nombre;
header("location:account.php?q=1");
}
else
header("location:$ref?w=Usuario o contraseña incorrectos");


?>

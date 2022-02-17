<?php
include 'model/conexion.php';
include 'funcs.php';

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$usuario = $_POST['usuario'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

$hash = hashPassword($contraseña);

$stmt = $bd->query("INSERT INTO usuarios VALUES ('','$nombre', '$apellidos', '$usuario', '$correo', '$telefono', '$contraseña')");




if($stmt)
{
session_start();
$_SESSION["usuario"] = $usuario;
$_SESSION["nombre"] = $nombre;

header("location:account.php?q=1");
}
else
{
header("location:index.php?q7=El usuario ya está registrado");
}
ob_end_flush();
?>

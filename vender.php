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
    <link rel= "css/estilos.css">
    <title>Tienda de Vehículos</title>
  </head>
  <body>
    <!-- inicio menú -->
    <?php include 'maqueta/menu.php' ?>


    <?php include 'maqueta/footer.php' ?>
<?php


  function isEmail ($email){
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
      return true;
    } else {
      return false;
    }
  }

  function validaPassword($var1, $var2){
    if(strcmp($var1,$var2) !== 0){
      return false;
    }else {
      return true;
    }
  }

  function emailExiste($correo){
    include 'model/conexion.php';
    $stmt = $bd->query("SELECT id FROM usuarios WHERE correo = '$correo'");
    $num = $stmt->rowCount();
    if($num >0){
      return false;
    }else{
      return true;
    }
  }
  function usuarioExiste($usuario){
    include 'model/conexion.php';
    $stmt = $bd->query("SELECT id FROM usuarios WHERE usuario = '$usuario'");
    $num = $stmt->rowCount();
    if($num >0){
      return false;
    }else{
      return true;
    }
  }

?>
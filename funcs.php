<?php

  function isNull($nombre, $user,$email, $pass, $pass_con ){
    if(strlen(trim($nombre)) < 1 || strlen(trim($user)) < 1 || strlen(trim($pass)) < 1 || strlen(trim($pass_con)) < 1 || strlen(trim($email)) < 1){
      return true;
    } else {
      return false;
    }
  }

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

  function minMax($min,$max,$valor){
    if(strlen(trim($valor)) < $min){
      return true;
    }
    else if(strlen(trim($valor)) > $max){
      return true;
    }
    else{
      return false;
    }
  }

  function usuarioExiste($usuario){
    global $mysqli;

    $stmt = $mysqli->prepare("SELECT id FROM usuarios WHERE usuario = ? LIMIT 1");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $stmt->store_result();
    $num = $stmt->num_rows();
    $stmt->close();

    if($num >0){
      return true;
    }else{
      return false;
    }
  }

 

  function generateToken(){
    $gen = md5(uniqid(mt_rand(),false));
    return $gen;
  }


  function registraUsuario($nombre,$apellidos,$usuario,$email,$telefono,$pass_hash){
    global $bd;

    $stmt = $bd->prepare("INSERT INTO usuarios (nombre, apellidos, usuario, correo, telefono, contraseña) VALUES (:nombre, :apellidos, :usuario, :correo, :telefono, :contraseña)");
    $stmt->bindParam(':nombre',$nombre);
    $stmt->bindParam(':apellidos',$apellidos);
    $stmt->bindParam(':usuario',$usuario);
    $stmt->bindParam(':correo',$$email);
    $stmt->bindParam(':telefono',$telefono);
    $stmt->bindParam(':contraseña',$pass_hash);


    if($stmt->execute()){
      echo "Datos guardados correctamente";
    }else {
      return "No se han guardado los datos";
    }
  }
  /*function enviarEmail($email, $nombre, $asunto, $cuerpo){

    require_once 'PHPMailer/PHPMailerAutoload.php';

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tipo de seguridad';
    $mail->Host = 'smtp.hosting.com';
    $mail->Port = 'puerto';

    $mail->Username =' miemail@dominio.com';
    $mail->Password = 'password';

    $mail->setFrom('miemail@dominio.com', 'Sistema de Usuarios');
    $mail->addAdress($email, $nombre);

    $mail->Subject = $asunto;
    $mail->Body = $cuerpo;
    $mail->IsHTML(true);

    if($mail->send())
    return true;
    else
    return false;

  }*/

  function resultBlock($errors){
    if(count($errors)>0){
      echo "<div id= 'error' class='alert alert-danger' role='alert'>
      <a href='#' onclick=\"showHide('error');\">[X]</a><ul>";
      foreach($errors as $error){
        echo "<li>".$error."</li>";
      }
      echo "</ul>";
      echo"</div>";
    }
  }
?>
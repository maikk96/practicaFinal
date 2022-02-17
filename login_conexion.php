
<?php

try{
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
    $hash_password = hash('sha256',$contraseña); //funcion hash para encriptar la contraseña
    $result = $bd->prepare("SELECT id FROM usuarios WHERE usuario=:usuario AND contraseña=:hash_password");
    $result->bindParam("usuario",$usuario,PDO::PARAM_STR);
    $result->bindParam("hash_password",$hash_password,PDO::PARAM_STR);
    $result->execute();
    $count=$result->rowCount();

    if($count==1){
        while($row = $result->fetch(PDO::FETCH_OBJ)) {
            $usuario = $row['id'];
        }
        $_SESSION["id"] = $id;
        $_SESSION["usuario"] = $usuario;
        header("location:account.php?q=1");
        }
        else
        header("location:$ref?w=Usuario o contraseña incorrectos");
}catch(PDOException $e){
    echo'{"error":{"text":'. $e->getMessage() .'}}';
}

?>


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
    //$contraseña = md5($contraseña); //funcion hash para encriptar la contraseña
    $contraseña = hash('sha256',$contraseña);
    $result = $bd->query("SELECT id FROM usuarios WHERE usuario= '$usuario' AND contraseña= '$contraseña'");
    /*$result->execute();*/
    $count=$result->rowCount();

    if($count==1){

        $_SESSION["usuario"] = $usuario;
        header("location:account.php?q=1");
        }
        else{
            echo '<script language="javascript">alert("El usuario o la contraseña son erróneas");window.location.href="login.php"</script>';
        }
}catch(PDOException $e){
    echo'{"error":{"text":'. $e->getMessage() .'}}';
}

?>

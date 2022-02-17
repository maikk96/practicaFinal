
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

        $_SESSION["id"] = $id;
        $_SESSION["usuario"] = $usuario;
        header("location:account.php?q=1");
        }
        else{
            echo '<p>El usuario y/o clave son incorrectas, vuelva a intentarlo.</p>';
        }
}catch(PDOException $e){
    echo'{"error":{"text":'. $e->getMessage() .'}}';
}

?>

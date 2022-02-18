<?php
$usuariobd = "root";
$contrasenabd = "";
$nombre_bd = "concesionario";

try {
	$bd = new PDO (
		'mysql:host=localhost;
		dbname='.$nombre_bd,
		$usuariobd,
		$contrasenabd
	);
} catch (Exception $e) {
	echo "Problema con la conexión";
}

?>
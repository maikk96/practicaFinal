<?php
include "model/conexion.php";

$query=$bd->query("select * from modelomarca where MarcID=$_GET[MarcID]");
$modelosmarca = array();
while($r=$query->fetchObject()){ $modelosmarca[]=$r; }
if(count($modelosmarca)>0){
print "<option value=''>-- SELECCIONE --</option>";
foreach ($modelosmarca as $s) {
	print "<option value='$s->ModelId'>$s->ModelDesc</option>";
}
}else{
print "<option value=''>-- NO HAY DATOS --</option>";
}
?>
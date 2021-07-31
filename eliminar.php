<?php
if(!isset($_GET['id'])){
    header('Location: index.php');

}

$codigo=$_GET['id'];
include'model/conexion.php';
$sentencia = $bd->prepare("DELETE FROM alumno WHERE id_alumno=?;");
$resultado = $sentencia->execute([$codigo]);

if($resultado==true){
header('Location: index.php');
}else{
    echo 'error';
}

?>
<?php
if(!isset($_POST['oculto'])){
    exit();
}else{
    include 'model/conexion.php';
    $prap=$_POST['pr_ap'];
    $sgap=$_POST['sg_ap'];
    $nom=$_POST['nombre'];
    $expa=$_POST['ex_parcial'];
    $exfi=$_POST['ex_final'];

    $sentencia= $bd->prepare("INSERT INTO alumno(primer_apellido,segundo_apellido,nombres,examen_parcial,examen_final)
     VALUES(?,?,?,?,?)");
     
     $resultado = $sentencia->execute([$prap,$sgap,$nom,$expa,$exfi]);

     if($resultado==true){
        header("Location: index.php"); //me refresca la pagina

     }else{
         echo "no se ingresaron los datos";
     }
     
}

?>
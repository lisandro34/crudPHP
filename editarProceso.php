<?php
if(!isset($_POST['oculto'])){
   header('Location: index.php');
}else{
    include 'model/conexion.php';
    $id=$_POST['id2'];
    $prap=$_POST['pr_ap'];
    $sgap=$_POST['sg_ap'];
    $nom=$_POST['nombre'];
    $expa=$_POST['ex_parcial'];
    $exfi=$_POST['ex_final'];

    $sentencia= $bd->prepare("UPDATE alumno SET primer_apellido=?, segundo_apellido=?, nombres=?, examen_parcial=?, examen_final=? 
    WHERE id_alumno=?;");
     
     
     $resultado = $sentencia->execute([$prap,$sgap,$nom,$expa,$exfi,$id]);

     if($resultado==true){
        header("Location: index.php"); //me refresca la pagina

     }else{
         echo "no se actualizaron los datos";
     }
     
}

?>
<?php

if(!isset($_GET['id'])){
    header('Location: index.php');

}
$codigo=$_GET['id'];
include 'model/conexion.php';
$sentencia =$bd->prepare("SELECT * FROM alumno WHERE id_alumno=?;");
$resultado = $sentencia->execute([$codigo]);
$alumno = $sentencia->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Crud</title>
</head>
<body>
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
     <div class="container">
         <a href="index.php" class="navbar-brand">CRUD Lisandro Reinozo</a>
     </div>
 </nav>
 <br>
 <div class="container p-10">
 <div class="row">
     <div class="col-md-6 mx-auto">
         <div class="card card-body">
             <h4 class="text-success text-center">EDITAR DATOS</h4>
             <form action="editarProceso.php" method="POST">

                     <div class="form-group">
                         <label for="primer_apellido">Primer Apellido</label>
                         <input type="text" name="pr_ap" class="form-control" value="<?php echo $alumno->primer_apellido?>" autofocus>
                     </div>
                     <div class="form-group">
                     <label for="segundo_apellido">Segundo Apellido</label>
                         <input type="text" name="sg_ap" class="form-control" value="<?php echo $alumno->segundo_apellido?>" >
                     </div>
                     <div class="form-group">
                     <label for="nombre">Nombres</label>
                         <input type="text" name="nombre" class="form-control" value="<?php echo $alumno->nombres?>" >
                     </div>
                     <div class="form-group">
                     <label for="examen_Parcial">Examen_parcial</label>
                         <input type="number" name="ex_parcial" class="form-control" value="<?php echo $alumno->examen_parcial?>" >
                     </div>
                     <div class="form-group">
                     <label for="Examen_final">Examen_final</label>
                         <input type="number" name="ex_final" class="form-control" value="<?php echo $alumno->examen_final?>" >
                     </div>

                     <div class="form-group">
                         <input type="hidden" name="oculto" value="1">
                         <input type="hidden" name="id2" value="<?php echo $alumno->id_alumno?>">
                         <input type="submit" name="enviar_datos" class="btn btn-success" value="Editar Datos">
                         
                     </div>
                 </form>

         </div>

     </div>

 </div>
 </div>
    
</body>
</html>
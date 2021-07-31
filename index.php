<?php
include 'model/conexion.php';
$sentencia = $bd->query("SELECT * FROM alumno;");
$alumno = $sentencia->fetchAll(PDO::FETCH_OBJ);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>CRUD</title>
</head>
<body>
 <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
     <div class="container">
         <a href="index.php" class="navbar-brand">CRUD Lisandro Reinozo</a>
     </div>
 </nav>
 <div class="container p-4">
     <div class="row">
         <!--Inicio de insertar-->
         <div class="col-md3">
             <div class="card card-body">
                 <h4 class="text-primary text-center">INSERTAR DATOS</h4>
                 <form action="insertar.php" method="POST">

                     <div class="form-group">
                         <input type="text" name="pr_ap" class="form-control" placeholder="Primer Apellido" autofocus>
                     </div>
                     <div class="form-group">
                         <input type="text" name="sg_ap" class="form-control" placeholder="Segundo Apellido" >
                     </div>
                     <div class="form-group">
                         <input type="text" name="nombre" class="form-control" placeholder="Nombre" >
                     </div>
                     <div class="form-group">
                         <input type="number" name="ex_parcial" class="form-control" placeholder="Examen parcial" >
                     </div>
                     <div class="form-group">
                         <input type="number" name="ex_final" class="form-control" placeholder="Examen Final" >
                     </div>

                     <div class="form-group">
                         <input type="hidden" name="oculto" value="1">
                         <input type="submit" name="enviar_datos" class="btn btn-success">
                         <input type="reset"  name="limpiar" class="btn btn-danger" value="Limpiar">
                     </div>
                 </form>
             </div>


         </div>
         <div class="col-md-9">
             <table class="table table-bordered">
                 <thead>
                     <th>Primer Apellido</th>
                     <th>Segundo Apellido</th>
                     <th>Nombre</th>
                     <th>Examen Parcial</th>
                     <th>Examen Final</th>
                     <th>Promedio</th>
                     <th>Editar</th>
                     <th>Eliminar</th>
                     </thead>

                     <tbody>
                         <?php
                         foreach($alumno as $Dato){
 
                         ?>
                          <tr>
                              <td><?php echo $Dato->primer_apellido?></td>
                              <td><?php echo $Dato->segundo_apellido?></td>
                              <td><?php echo $Dato->nombres?></td>
                              <td><?php echo $Dato->examen_parcial?></td>
                              <td><?php echo $Dato->examen_final?></td>
                              <td><?php echo ($Dato->examen_parcial+$Dato->examen_final)/2?></td>

                              <td><a href="editar.php?id=<?php echo  $Dato->id_alumno?>" class="btn btn-primary">
                            <i class="fas fa-marker"></i>
                        </a></td>
                              <td><a href="eliminar.php?id=<?php echo  $Dato->id_alumno?>" class="btn btn-danger">
                            <i class="fas fa-trash-alt"></i>
                        </a></td>
                         
                         </tr>
                          <?php
                        
                             
                         }
                         ?>


                     </tbody>

             </table>


         </div>

     </div>
 </div>   








<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
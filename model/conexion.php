<?php
try{

    $bd = new PDO("mysql:host=localhost;dbname=crud","root","",
    array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    
}catch(Exception $e){

    echo "Error de conexion".$e->getMessage();
}


?>
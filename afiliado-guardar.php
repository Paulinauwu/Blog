<?php
 require 'php/conexion.php';
  
 
 $nombre  = $_POST['nombre'];
 $a_paterno  = $_POST['a_paterno'];
 $a_materno = $_POST['a_materno'];
 $direccion  = $_POST['direccion'];
 $profesion  = $_POST['profesion'];
 $descrip = $_POST['descrip'];

$insertar = "INSERT INTO afiliados VALUES ('','$nombre','$a_paterno','$a_materno','$direccion','$profesion','$descrip') ";

$query = mysqli_query($conectar, $insertar);

if($query){

   echo "<script> alert('correcto');
    location.href = 'confirmar-afiliado.php';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = 'regis-afiliado.php';
    </script>";
}






?>
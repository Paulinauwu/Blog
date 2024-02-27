<?php

require_once('funciones.php');
conectar();
$usuario = $_POST['usuario'];
$pass = $_POST['new_password'];

$query = "UPDATE usuarios SET clave = '$pass' WHERE usuario = '$usuario'";
//$query = "UPDATE usuarios SET New.clave = ‘$pass’ AES_ENCRYPT(NEW.clave, '061219') WHERE usuario = '$usuario'";


$conexion->query($query);

header("Location: ../login.php?message=success_password");

?>

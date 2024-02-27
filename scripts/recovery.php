<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

require_once('funciones.php');
conectar();

$email = $_POST['email'];
$query = "SELECT * FROM usuarios where email = '$email'";
$result = $conexion->query($query);
$row = $result->fetch_assoc();

if($result->num_rows > 0){
  $mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp-mail.outlook.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'comunidadindigenanacional@outlook.com';
    $mail->Password   = 'Comunidad-indigena1.,';
    $mail->Port       = 587;

    $mail->setFrom('comunidadindigenanacional@outlook.com', 'Comunidad indigena');
    $mail->addAddress($email, 'Prueba');
    $mail->isHTML(true);
    $mail->Subject = 'Recuperacion de contrasena';
    $mail->Body    = 'Hola, este es un correo generado para solicitar tu recuperacion de contraseña, por favor, visita la página de <a href="https://comunidadindigenanacional.online/change_password.php?usuario='.$row['usuario'].'">Recuperación de contraseña</a>';

    $mail->send();
    header("Location: ../login.php?message=ok");
} catch (Exception $e) {
  header("Location: ../login.php?message=error");
}

}else{
  header("Location: ../login.php?message=not_found");
}

?>

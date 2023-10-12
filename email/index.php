<?php
// Importar la librería PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
// Crear una nueva instancia de PHPMailer
$mail = new PHPMailer();
// Configurar el servidor SMTP
$mail->isSMTP();
$mail->Host = 'localhost';
$mail->SMTPAuth = true;
$mail->Username = 'user@example.com';
$mail->Password = 'password';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
// Configurar el remitente y el destinatario
$mail->setFrom('user@example.com', 'Nombre del remitente');
$mail->addAddress('recipient@example.com', 'Nombre del destinatario');
// Configurar el asunto y el cuerpo del mensaje
$mail->Subject = 'Asunto del mensaje';
$mail->Body = 'Cuerpo del mensaje';
// Enviar el mensaje
if ($mail->send()) {
  echo 'El mensaje se ha enviado correctamente.';
} else {
  echo 'Error al enviar el mensaje: ' . $mail->ErrorInfo;
}
?>
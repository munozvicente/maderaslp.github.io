<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$mail = $_POST['eaddress'];
$telefono = $_POST['tel'];
$uso = $_POST['opt'];
$empresa = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$message .= "Su correo es: " . $mail . "\r\n";
$message .= "Su teléfono es: " . $telefono . "\r\n";
$message .= "El uso es: " . $uso . "\r\n";
$message .= "Mensaje: " .$_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'vanm@outlook.cl';
$asunto = '[CONTACTO] Maderas Nativas Los Prados';

mail($para, $asunto, utf8_decode($message), $header);

echo 'El mensaje ha sido enviado exitosamente';

?>
<?php
$to = 'vanm@outlook.cl';
$subject = 'Correo de prueba';
$message = 'Este es sólo un mensaje de prueba.';
$from = 'vanm@outlook.dk';
$headers = 'From: ' . $from;
mail($to,$subject,$message,$headers);
echo 'Correo enviado';
?>
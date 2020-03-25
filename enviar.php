<?php

$to = "gastonbarbaccia@hotmail.com";
$from = $_POST['nombre'];
$email = $_POST['email'];
$subject = $_POST['asunto'];
$message = $_POST['mensaje'];
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";
$headers .= "From: DevAcademy < contacto@devacademy.com >" . "\r\n";

 
mail($to,$subject, $message, $headers);

echo(1); 



?>
<?php


$to = "gastonbarbaccia@hotmail.com";
$from = $_POST['nombre'];
$email = $_POST['email'];
$subject = $_POST['asunto'];
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";
 
$message = $_POST['mensaje'];
 
mail($to,$email, $subject, $message, $headers);

echo(1); 


?>
<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$address = $_POST['address'];
$numeroequipos = $_POST['numeroequipos'];
$sucursal = $_POST['sucursal'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];





$header = 'From: NUEVO CLIENTE N/CODER <email@ncoder.com>' . "\r\n"; // cambiar email@ncoder.com por email@el dominio de tu hosting esto solo sera representativo
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";



$message = "Haz recibido un nuevo contacto  \r\n";
$message = "Nombre Completo: " . $name . " \r\n";
$message .= "Telefono Celular: " . $phone . " \r\n";
$message .= "Correo: " . $mail . " \r\n";
$message .= "Dirección: " . $address . " \r\n";
$message .= "¿Cuantos Equipos de aire Compró? " . $numeroequipos . "\r\n";
$message .= "¿En que sucursal compró su Equipo? " . $sucursal . "\r\n";
$message .= "Modelos: " . $nota1 . " \r\n";
$message .= "Notas Adicionales: " . $nota2 . " \r\n";




$para = $mail; //'coloca aqui tu correo (con comas si son varios)'; // aqui iran los correro a los que el mensaje llegará borra $mail y solo deja entre comillas los correos
$asunto = 'Nueva solicitud Cliente para Registro de Garantía';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html"); // aqui colocas la pagina a donde se redirige al enviar
?>

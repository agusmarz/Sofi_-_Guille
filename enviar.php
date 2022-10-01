<?php
$name = $_POST['name'];
$message = $_POST['message'];

$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";


$para = 'agusmarzioni24@gmail.com';
$asunto = 'Mensaje de amor';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>
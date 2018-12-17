<?php

$body = "";
$body .= "<p>Hi $contactos_contacto</p>";
$body .= "<p>The administrator of $config_nombre_web sends you an invitation to use his system</p>";
$body .= "<p>For this we created a user and password for you</p>";
$body .= "<p>User: $contactos_email</p>";
$body .= "<p>password: $contactos_clave_sin_codificar</p>";
$body .= "<p>To use the sistem go to:</p>";
$body .= "<p><a href=\"$config_url/gestion/z_index.php\">$config_url/gestion/z_index.php</a></p>";
$body .= "<p>If you have any questions, please contact us.</p>";




$body .= "<p>Atentamente,</p>";
$body .= "<h2>$config_nombre_web</h2>";
$body .= "<p>$config_direccion</p>";
$body .= "<p>$config_tel</p>";

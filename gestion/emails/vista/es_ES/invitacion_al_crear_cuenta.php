<?php

$body = "";
$body .= "<p>Hola $contactos_contacto</p>";
$body .= "<p>El administrador de $config_nombre_web le hace llegar una invitación para que use su sistema</p>";
$body .= "<p>Para ello le ha creado un usuario y clave</p>";
$body .= "<p>Usuario: $contactos_email</p>";
$body .= "<p>Clave: $contactos_clave_sin_codificar</p>";
$body .= "<p>Puede entrar el al siguiente dirección</p>";
$body .= "<p><a href=\"$config_url/gestion/z_index.php\">$config_url/gestion/z_index.php</a></p>";
$body .= "<p>Si tiene alguna pregunta, contáctenos</p>";




$body .= "<p>Atentamente,</p>";
$body .= "<h2>$config_nombre_web</h2>";
$body .= "<p>$config_direccion</p>";
$body .= "<p>$config_tel</p>";

<?php
$body  = "";
$body .= "<p>Estimado/a, $contactos_contacto ($contactos_email)</p>";
$body .= "<p>El administrador ha activado su cuenta en: $config_nombre_web</p>";
//$body .= "<p>Ya puede realizar pedidos</p>";
$body .= "<p>Usuario:  $contactos_email</p>";

$body .= "<p>Atentamente,</p>";
$body .= "<h2>$config_nombre_web</h2>";
$body .= "<p>$config_direccion</p>";
$body .= "<p>$config_tel</p>";

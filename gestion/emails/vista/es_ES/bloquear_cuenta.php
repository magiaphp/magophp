<?php

$body = "";
$body .= "<p>Estimado/a, $contactos_contacto ($contactos_email)</p>";
$body .= "<p>El administrador ha bloqueado su cuenta en: $config_nombre_web</p>";
//$body .= "<p>Ud. puede consultar sus pedidos realizados pero no puede realizar nuevos</p>";
$body .= "<p>Si tiene alguna pregunta, porfavor contactenos</p>";

$body .= "<p>Atentamente,</p>";
$body .= "<h2>$config_nombre_web</h2>";
$body .= "<p>$config_direccion</p>";
$body .= "<p>$config_tel</p>";


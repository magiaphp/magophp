<?php

$body = "";
$body .= "<p>Estimado/a, $contactos_contacto ($contactos_email)</p>";
$body .= "<p>Ud. (u otra persona), ha solicitado el acceso a la plataforma web de: $config_nombre_web</p></p>";
$body .= "<p>Un mensaje ha sido enviado al administrador para que apruebe su registro, una vez aprobado ingresar</p>";
$body .= "<p>Si tiene alguna pregunta, no dude en contactarnos</p>";

$body .= "<p>Usuario:  $contactos_email</p>";
$body .= "<p>Clave:  $contactos_clave_sin_codiicar</p>";


//***************************************************
$body .= '<table border=0 width="600">';
$body .= '<tr><td colspan=3><h2>Detalles de su cuenta</h2></td></tr>';
$body .= '<tr bgcolor="#F5EFFB"><td><b>Item</b></td><td><b>Valor</b></td></tr>';
$i = 0;
foreach ($_REQUEST as $key => $value) {
    $color = ($i % 2 == 0) ? "#F5EFFB" : "#ffffff";
    if ($value && $i > 2) {
        $body .= '<tr bgcolor="' . $color . '"><td width="40%"><font color="#2E64FE">' . _tr($key) . '</font> </td><td>' . $value . ' </td></tr>';
    }    
    $i++;
}
$body .= '<tr bgcolor="#F5EFFB"><td colspan="3"> &nbsp;</td></tr>';
$body .= "</table>";


$body .= "<p>Atentamente,</p>";
$body .= "<h2>$config_nombre_web</h2>";
$body .= "<p>$config_direccion</p>";
$body .= "<p>$config_tel</p>";


<?php

$body = "";
$body .= "<p>Hi, $contactos_contacto ($contactos_email)</p>";
$body .= "<p>You (or another person) have requested access to the web platform: $config_nombre_web</p>";
$body .= "<p>A message has been sent to the administrator to approve your registration, once approved you can login</p>";
$body .= "<p>If you have any questions, do not hesitate to contact us</p>";

$body .= "<p>User: $contactos_email</p>";
$body .= "<p>Password:  $contactos_clave_sin_codiicar</p>";


//***************************************************
$body .= '<table border=0 width="600">';
$body .= '<tr><td colspan=3><h2>Details</h2></td></tr>';
$body .= '<tr bgcolor="#F5EFFB"><td><b>Items</b></td><td><b>Value</b></td></tr>';
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


$body .= "<p>Best regards</p>";
$body .= "<h2>$config_nombre_web</h2>";
$body .= "<p>$config_direccion</p>";
$body .= "<p>$config_tel</p>";


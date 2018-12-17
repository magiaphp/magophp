<?php

$body = "";
$body .= "<p>" . _tr("Estimado/a") . ", $contactos_contacto ($contactos_email)</p>";
$body .= "<p>" . _tr("Ud. (u otra persona), ha solicitado el acceso a la plataforma web para realizar pedidos en: $config_nombre_web</p>") . "</p>";
$body .= "<p>" . _tr("Un mensaje ha sido enviado al administrador para que apruebe su registro, una vez aprobado podra realizar pedidos") . "</p>";
$body .= "<p>" . _tr("Si tiene alguna pregunta, no dude en contactarnos") . "</p>";

$body .= "<p>" . _tr("Usuario") . ":  $contactos_email</p>";
$body .= "<p>" . _tr("Clave") .   ":  $contactos_clave_sin_codiicar</p>";


//***************************************************
$body .= '<table border=0 width="600">';
$body .= '<tr><td colspan=3><h2>' . _tr('Detalles de su cuenta') . '</h2></td></tr>';
$body .= '<tr bgcolor="#F5EFFB"><td><b>' . _tr('Item') . '</b></td><td><b>' . _tr('Valor') . '</b></td></tr>';
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


$body .= "<p>". _tr('Atentamente').",</p>";
$body .= "<h2>$config_nombre_web</h2>";
$body .= "<p>$config_direccion</p>";
$body .= "<p>$config_tel</p>";


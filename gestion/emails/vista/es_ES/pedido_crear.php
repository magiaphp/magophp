<?php

$body = "";
$body .= "<p>Estimado/a $pedidos_contacto </p>";
$body .= "<p>Un nuevo pedido se ha registrado en el sistema:</p>";
$body .= "<p><b>Empresa:</b> $pedidos_empresa </p>";
$body .= "<p><b>Contactos:</b> $pedidos_contacto</p>";
$body .= "<p><b>Email:</b> $pedidos_email</p>";
//***************************************************
$body .= '<table border=0 width="600">';
$body .= '<tr><td colspan=3><h2>Detalles del pedido</h2></td></tr>';
$body .= '<tr bgcolor="#F5EFFB"><td><b>' . _tr('Item') . '</b></td><td><b>' . _tr('Valor') . '</b></td></tr>';
$i = 0;
foreach ($_REQUEST as $key => $value) {

    $color = ($i % 2 == 0) ? "#F5EFFB" : "#ffffff";

    //if($i > 3  && $i < count($_REQUEST) ){

    if ($value) {
        $body .= '<tr bgcolor="' . $color . '"><td width="40%">' . $i . ' : <font color="#2E64FE">' . _tr($key) . '</font> </td><td>' . $value . ' </td></tr>';
        //$body .=  '$'.$key.' = ($_REQUEST[\''.$key.'\'])?mysql_real_escape_string($_REQUEST[\''.$key.'\']):null; <br>';             
        //$body .=  '$'.$key.' = $pedidos[\''.$key.'\']; <br>';
        // $body .=  '$'.$key.' = $pedidos[\''.$key.'\']; <br>';
    }
    // }
    $i++;
}
$body .= '<tr bgcolor="#F5EFFB"><td colspan="3"> &nbsp;</td></tr>';
$body .= "</table>";

$body .= "<p>Atentamente,</p>";
$body .= "<h2>$config_nombre_web</h2>";
$body .= "<p>$config_direccion</p>";
$body .= "<p>$config_tel</p>";


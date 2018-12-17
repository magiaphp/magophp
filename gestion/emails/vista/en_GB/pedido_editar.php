<?php

$body = "";
$body .= "<p>Hi, </p>";
$body .= "<p>The order has edit</p>";
$body .= "<p>Order : $pedidos_id</p>";
$body .= "<p>Here you are the new data in the order</p>";
//***************************************************
$body .= '<table border=0 width="600">';
$body .= '<tr><td colspan=3 style="color:red;"><h2>Details</h2></td></tr>';

$body .= '<tr bgcolor="#F5EFFB"><td><b>Items</b></td><td><b>Value</b></td></tr>';
$i = 0;
foreach ($_REQUEST as $key => $value) {

    $color = ($i % 2 == 0) ? "#F5EFFB" : "#ffffff";


    $body .= '<tr bgcolor="' . $color . '"><td width="40%">' . $i . ' : <font color="#2E64FE">' . _tr($key) . '</font> </td><td>' . $value . ' </td></tr>';

    $i++;
}
$body .= '<tr bgcolor="#F5EFFB"><td colspan="3">&nbsp;</td></tr>';
$body .= "</table>";

$body .= "<p>Best regards</p>";
$body .= "<h2>$config_nombre_web</h2>";
$body .= "<p>$config_direccion</p>";
$body .= "<p>$config_tel</p>";

<?php

$body = "";
$body .= "<p>" . _tr("Estimado/a") . ", aaaaa </p>";
$body .= "<p>" . _tr('Un pedido ha sido editado') . "</p>";
$body .= "<p>" . _tr('Pedido') . ": $pedidos_id</p>";
$body .= "<p>" . _tr('Los datos aca expuestos son los nuevos datos del pedido') . "</p>";
//***************************************************
$body .= '<table border=0 width="600">';
$body .= '<tr><td colspan=3 style="color:red;"><h2>' . _tr('Detalles del pedido editado') . '</h2></td></tr>';

$body .= '<tr bgcolor="#F5EFFB"><td><b>' . _tr('Item') . '</b></td><td><b>' . _tr('Valor') . '</b></td></tr>';
$i = 0;
foreach ($_REQUEST as $key => $value) {

    $color = ($i % 2 == 0) ? "#F5EFFB" : "#ffffff";


    $body .= '<tr bgcolor="' . $color . '"><td width="40%">' . $i . ' : <font color="#2E64FE">' . _tr($key) . '</font> </td><td>' . $value . ' </td></tr>';

    $i++;
}
$body .= '<tr bgcolor="#F5EFFB"><td colspan="3">&nbsp;</td></tr>';
$body .= "</table>";

$body .= "<p>". _tr('Atentamente').",</p>";
$body .= "<h2>$config_nombre_web</h2>";
$body .= "<p>$config_direccion</p>";
$body .= "<p>$config_tel</p>";

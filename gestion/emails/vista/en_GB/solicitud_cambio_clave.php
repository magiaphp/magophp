<?php

$body = "";
$body .= "<p>Hi, ($email)</p>";
$body .= "<p>You, (Or someone else), have requested the change of password in: $config_nombre_web</p>";
$body .= "<p>If you do not want to change the password, do nothing</p>";
$body .= "<p>If you want to change the password, go to:</p>";
$body .= "<p><a href=\"$config_url/gestion/z_index.php?c=zz_vccc\">$config_url/gestion/z_index.php?c=zz_vccc</a></p>";
$body .= "<p>Use the following code</p>";
$body .= "<h3>$cambio_claves_codigo</h3>";



$body .= "<p>Best regards</p>";
$body .= "<h2>$config_nombre_web</h2>";
$body .= "<p>$config_direccion</p>";
$body .= "<p>$config_tel</p>";

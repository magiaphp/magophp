<?php

$body = "";
$body .= "<p>Estimado/a, ($email)</p>";
$body .= "<p>Ud. (u otra persona), ha solicitado el cambio de clave en: $config_nombre_web</p></p>";
$body .= "<p>Si no desea cambiar la clave, no haya nada</p>";
$body .= "<p>Si desea cambiar de clave, ingrese en:</p>";
$body .= "<p><a href=\"$config_url/gestion/z_index.php?c=zz_vccc\">$config_url/gestion/z_index.php?c=zz_vccc</a></p>";
$body .= "<p>Ponga el siguiente código</p>";
$body .= "<h3>$cambio_claves_codigo</h3>";



$body .= "<p>Atentamente,</p>";
$body .= "<h2>$config_nombre_web</h2>";
$body .= "<p>$config_direccion</p>";
$body .= "<p>$config_tel</p>";

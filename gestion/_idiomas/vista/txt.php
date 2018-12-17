<?php

/**
  magia_version: 0.0.8
 * */
$html = "
_idiomas_id : %_idiomas_id%
_idiomas_idioma : %_idiomas_idioma%
_idiomas_nombre : %_idiomas_nombre%
_idiomas_orden : %_idiomas_orden%
";

include "./_idiomas/reg/var.php";

echo "<h1>Variables disponibles</h1><pre>$html</pre>";
?>
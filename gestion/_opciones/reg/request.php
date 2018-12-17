<?php

/**
  magia_version: 0.0.8
 * */
$_opciones_id = (isset($_REQUEST['_opciones_id'])) ? mysql_real_escape_string($_REQUEST['_opciones_id']) : null;
$_opciones_opcion = (isset($_REQUEST['_opciones_opcion'])) ? mysql_real_escape_string($_REQUEST['_opciones_opcion']) : null;
$_opciones_valor = (isset($_REQUEST['_opciones_valor'])) ? mysql_real_escape_string($_REQUEST['_opciones_valor']) : null;
$_opciones_grupo = (isset($_REQUEST['_opciones_grupo'])) ? mysql_real_escape_string($_REQUEST['_opciones_grupo']) : null;

if ($config_debug) {
    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";
    echo "<table border>";
    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
    foreach ($_REQUEST as $key => $value) {
        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
    }
    echo "</table>";
}
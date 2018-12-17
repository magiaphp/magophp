<?php

/**
  magia_version: 0.0.8
 * */
//$_opciones_id = mysql_real_escape_string($_POST['_opciones_id']); 
$_opciones_opcion = (isset($_POST['_opciones_opcion'])) ? mysql_real_escape_string($_POST['_opciones_opcion']) : null;
$_opciones_valor = (isset($_POST['_opciones_valor'])) ? mysql_real_escape_string($_POST['_opciones_valor']) : null;
$_opciones_grupo = (isset($_POST['_opciones_grupo'])) ? mysql_real_escape_string($_POST['_opciones_grupo']) : null;

if ($config_debug) {
    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";
    echo "<table border>";
    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
    foreach ($_POST as $key => $value) {
        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
    }
    echo "</table>";
}
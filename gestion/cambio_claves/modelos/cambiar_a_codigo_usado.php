<?php

/**
  magia_version: 0.0.8
 * */
$sql = mysql_query(" UPDATE cambio_claves SET  
codigo_usado = '1'  
 WHERE usuario = '$cambio_claves_usuario' AND codigo = '$cambio_claves_codigo' 
 ", $conexion) or error(__DIR__, __FILE__, __LINE__);


if ($config_debug) {
    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";

    $variables = array(
        "\$sql" => "$sql",
        "\$cambio_claves_id" => "$cambio_claves_id"
    );

    echo "<table border>";
    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
    foreach ($variables as $key => $value) {
        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
    }
    echo "</table>";
}
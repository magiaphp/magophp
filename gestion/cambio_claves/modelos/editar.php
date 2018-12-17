<?php

/**
  magia_version: 0.0.8
 * */
$sql = mysql_query(" UPDATE cambio_claves SET  
 usuario = '$cambio_claves_usuario'  
 ,  codigo = '$cambio_claves_codigo'  
 ,  codigo_usado = '$cambio_claves_codigo_usado'  
 WHERE id = '$cambio_claves_id' 
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
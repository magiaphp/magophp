<?php

/**
  magia_version: 0.0.8
 * */
$sql = mysql_query(
        "SELECT *  
 FROM cambio_claves  
 WHERE  
 usuario like '%$cambio_claves_usuario%'    
 AND  codigo like '%$cambio_claves_codigo%'    
 AND  fecha_solicitud like '%$cambio_claves_fecha_solicitud%'    
 AND  codigo_usado like '%$cambio_claves_codigo_usado%'    
 ORDER BY id DESC    
 ", $conexion) or error(__DIR__, __FILE__, __LINE__);
$total_items = mysql_num_rows(mysql_query("$comando ", $conexion));


if ($config_debug) {
    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";

    $variables = array(
        "\$sql" => "$sql"
    );

    echo "<table border>";
    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
    foreach ($variables as $key => $value) {
        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
    }
    echo "</table>";
}
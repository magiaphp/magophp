<?php

/**
  magia_version: 0.0.8
 * */
$comando = "SELECT *  
 FROM actualizaciones  
 WHERE  
 codigo like '%$actualizaciones_codigo%'    
 AND  requiere like '%$actualizaciones_requiere%'    
 AND  nombre like '%$actualizaciones_nombre%'    
 AND  descripcion like '%$actualizaciones_descripcion%'    
 AND  ejecutar like '%$actualizaciones_ejecutar%'    
 AND  estatus like '%$actualizaciones_estatus%'    
 ORDER BY id DESC"; 

$sql = mysql_query(
        "$comando    
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
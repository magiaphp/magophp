<?php

/**
  magia_version: 0.0.8
 * */
$comando = "SELECT *  
 FROM _opciones  
 WHERE  
 opcion like '%$_opciones_opcion%'    
 AND  valor like '%$_opciones_valor%'    
 AND  grupo like '%$_opciones_grupo%'    
 ORDER BY id DESC ";

$sql = mysql_query("$comando Limit $inicia, $cfg_limite_items_en_tablas ", $conexion)
        or error(__DIR__, __FILE__, __LINE__);

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
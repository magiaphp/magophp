<?php

/**
  magia_version: 0.0.8
 * */

$comando = "SELECT *  
 FROM logs  
 WHERE  
 fecha like '%$logs_fecha%'    
 AND  usuario like '%$logs_usuario%'    
 AND  grupo like '%$logs_grupo%'    
 AND  ip like '%$logs_ip%'    
 AND  mac like '%$logs_mac%'    
 AND  p like '%$logs_p%'    
 AND  c like '%$logs_c%'    
 AND  a like '%$logs_a%'    
 AND  comando like '%$logs_comando%'    
 AND  argumento like '%$logs_argumento%'    
 AND  sospechoso like '%$logs_sospechoso%'    
 ORDER BY id DESC"; 

$sql = mysql_query(
        " $comando   
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
<?php

/**
  magia_version: 0.0.8
 * */
$comando = "SELECT * FROM _opciones WHERE grupo <> '1000' ORDER BY grupo   ";


$sql = mysql_query("$comando Limit $inicia, $cfg_limite_items_en_tablas ", $conexion)
        or error(__DIR__, __FILE__, __LINE__);
// esto es para la paginacion	  
$total_items = mysql_num_rows(mysql_query("$comando ", $conexion));


if ($config_debug) {
    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";

    $variables = array(
        "\$sql" => "$sql",
        "\$comando" => "$comando",
        "\$total_items" => "$total_items"
    );

    echo "<table border>";
    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
    foreach ($variables as $key => $value) {
        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
    }
    echo "</table>";
}
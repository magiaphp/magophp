<?php

/**
  magia_version: 0.0.11
 * */
$sql = mysql_query(" UPDATE _actualizaciones SET  
 version = '$_actualizaciones_version'  
 ,  requiere = '$_actualizaciones_requiere'  
 ,  nombre = '$_actualizaciones_nombre'  
 ,  descripcion = '$_actualizaciones_descripcion'  
 ,  ejecutar = '$_actualizaciones_ejecutar'  
 ,  estatus = '$_actualizaciones_estatus'  
 WHERE id = '$_actualizaciones_id' 
 ", $conexion) or error(__DIR__, __FILE__, __LINE__);


if ($config_debug) {
    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";

    $variables = array(
        "\$sql" => "$sql",
        "\$_actualizaciones_id" => "$_actualizaciones_id"
    );

    echo "<table border>";
    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
    foreach ($variables as $key => $value) {
        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
    }
    echo "</table>";
}
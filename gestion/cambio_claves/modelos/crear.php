<?php

/**
  magia_version: 0.0.8
 * */
$sql = "INSERT INTO cambio_claves ( 
 usuario 
 ,  codigo 
 ,  codigo_usado 
 ) VALUES ( 
 :usuario 
 ,  :codigo 
 ,  :codigo_usado 
   )";
$stmt = $dbh->prepare($sql);
$stmt->execute(array(
    ":usuario" => "$cambio_claves_usuario"
    , ":codigo" => "$cambio_claves_codigo"
    , ":codigo_usado" => "$cambio_claves_codigo_usado"
        )
);


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
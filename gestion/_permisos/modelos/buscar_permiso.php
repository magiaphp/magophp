<?php

$comando = "SELECT * FROM _permisos  WHERE  
permiso like '%$busqueda%'     ORDER BY grupo, pagina DESC  ";
$sql = mysql_query("$comando Limit $inicia, $cfg_limite_items_en_tablas ", $conexion)
        or die("Error: en el fichero:" . __FILE__ . ' linea: ' . __LINE__ . '  ' . mysql_error());
// esto es para la paginacion	  
$total_items = mysql_num_rows(mysql_query("$comando ", $conexion));

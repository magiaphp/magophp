<?php
$comando = "SELECT *  
 FROM _contenido  
 WHERE  

frase like '%$b%' OR contexto like '%$b%'   

 ORDER BY id DESC";

$sql = mysql_query("$comando", $conexion) or die("Error:" . mysql_error());

$total_items = mysql_num_rows(mysql_query("$comando ", $conexion));



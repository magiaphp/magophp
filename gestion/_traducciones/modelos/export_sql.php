<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
$comando = "SELECT * FROM _traducciones ORDER BY frase DESC  "; 
$sql=mysql_query("$comando Limit $inicia, 999999999 ",$conexion) 
or die ("Error: en el fichero:" .__FILE__ .' linea: '. __LINE__ .'  '.mysql_error());	  
// esto es para la paginacion	  
$total_items = mysql_num_rows(mysql_query("$comando ",$conexion));	  

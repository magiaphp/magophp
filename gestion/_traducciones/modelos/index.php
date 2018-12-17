<?php 
/*
$comando = ""
        . "SELECT _contenido.frase as frase, _traducciones.idioma as idioma, _traducciones.traduccion as traduccion "
        . "FROM _traducciones "
        . "INNER JOIN _contenido ON _traducciones.frase=_contenido.frase  "
        . "ORDER BY frase"; 
 * 
 */

$comando = "SELECT * FROM _traducciones ORDER BY frase  "; 
$sql=mysql_query("$comando Limit $inicia, $cfg_limite_items_en_tablas ",$conexion) 
//$sql=mysql_query("$comando ",$conexion) 
        
or die ("Error: en el fichero:" .__FILE__ .' linea: '. __LINE__ .'  '.mysql_error());	  

// esto es para la paginacion	  
$total_items = mysql_num_rows(mysql_query("$comando ",$conexion));	  
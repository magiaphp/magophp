<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
$comando = "SELECT * FROM _traducciones WHERE idioma = 'en_GB'   "; 
$sql=mysql_query("$comando Limit $inicia, $cfg_limite_items_en_tablas ",$conexion) ;

//$comando = "SELECT _traducciones.id, _contenido.frase, _traducciones.idioma, _traducciones.traduccion FROM _traducciones INNER JOIN _contenido ON _traducciones.frase=_contenido.frase ORDER BY frase"; 
$sql=mysql_query("$comando ",$conexion) 


or die ("Error: en el fichero:" .__FILE__ .' linea: '. __LINE__ .'  '.mysql_error());	  
// esto es para la paginacion	  
$total_items = mysql_num_rows(mysql_query("$comando ",$conexion));	  

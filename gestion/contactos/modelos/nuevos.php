<?php 
 /**  
 magia_version: 0.0.8 
 **/ 

if (permisos_tiene_permiso("crear", "contactos_ajenos", $_usuarios_grupo)) {
$comando = "SELECT * FROM contactos WHERE estatus = '0' ORDER BY $ordenpor $orden  "; 
} else {
    $comando = "SELECT * FROM contactos WHERE estatus = '0' AND id = '" . contactos_campo_segun_email('id', $_usuarios_usuario) . "' ORDER BY $ordenpor $orden ";
}


$sql=mysql_query("$comando Limit $inicia, $cfg_limite_items_en_tablas ",$conexion) 
or die ("Error: en el fichero:" .__FILE__ .' linea: '. __LINE__ .'  '.mysql_error());	  
// esto es para la paginacion	  
$total_items = mysql_num_rows(mysql_query("$comando ",$conexion));	  

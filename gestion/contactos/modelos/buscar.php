 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 
 
 
if (permisos_tiene_permiso("ver", "contactos_ajenos", $_usuarios_grupo)) {
 $comando= "SELECT *  
 FROM contactos  
 WHERE  
 tipo_documento like '%$b%'    
 OR  ruc_prefijo like '%$b%'    
 OR  numero_documento like '%$b%'    
 OR  empresa like '%$b%'    
 OR  contacto like '%$b%'    
 OR  saludo like '%$b%'    
 OR  direccion like '%$b%'    
 OR  cpostal like '%$b%'    
 OR  ciudad like '%$b%'    
 OR  provincia like '%$b%'    
 OR  pais like '%$b%'    
 OR  tel like '%$b%'    
 OR  fax like '%$b%'    
 OR  email like '%$b%'    
 OR  notas like '%$b%'    
 OR  tipo like '%$b%'    
 OR  fecha_registro like '%$b%'    
 OR  es_contacto like '%$b%'    
 OR  estrellas like '%$b%'    
 OR  estatus like '%$b%'    
 ORDER BY id DESC ";
 
} else {
 $comando= "SELECT *  
 FROM contactos  
 WHERE  (
 tipo_documento like '%$b%'    
 OR  ruc_prefijo like '%$b%'    
 OR  numero_documento like '%$b%'    
 OR  empresa like '%$b%'    
 OR  contacto like '%$b%'    
 OR  saludo like '%$b%'    
 OR  direccion like '%$b%'    
 OR  cpostal like '%$b%'    
 OR  ciudad like '%$b%'    
 OR  provincia like '%$b%'    
 OR  pais like '%$b%'    
 OR  tel like '%$b%'    
 OR  fax like '%$b%'    
 OR  email like '%$b%'    
 OR  notas like '%$b%'    
 OR  tipo like '%$b%'    
 OR  fecha_registro like '%$b%'    
 OR  es_contacto like '%$b%'    
 OR  estrellas like '%$b%'    
 OR  estatus like '%$b%'    )
  AND id = '" . contactos_campo_segun_email('id', $_usuarios_usuario) . "'   ";
}





 
 //$comando = "SELECT * FROM contactos ORDER BY id DESC  "; 
 
$sql=mysql_query("$comando Limit $inicia, $cfg_limite_items_en_tablas ",$conexion) 
or die ("Error: en el fichero:" .__FILE__ .' linea: '. __LINE__ .'  '.mysql_error());	  
// esto es para la paginacion	  
$total_items = mysql_num_rows(mysql_query("$comando ",$conexion));	

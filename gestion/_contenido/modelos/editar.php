 <?php  
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql=mysql_query(" UPDATE _contenido SET  
 frase = '$_contenido_frase'  
 ,  contexto = '$_contenido_contexto'  
 WHERE id = '$_contenido_id' ",$conexion) or die ("Error: ".mysql_error());   

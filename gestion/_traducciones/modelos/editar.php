 <?php  
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql=mysql_query(" UPDATE _traducciones SET  
 frase = '$_traducciones_frase'  
 ,  idioma = '$_traducciones_idioma'  
 ,  traduccion = '$_traducciones_traduccion'  
 WHERE id = '$_traducciones_id' ",$conexion) or die ("Error: ".mysql_error());   

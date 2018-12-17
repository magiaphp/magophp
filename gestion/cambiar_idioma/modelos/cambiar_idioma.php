 <?php  
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql=mysql_query(" UPDATE contactos SET  
 idioma = '$idioma'  
 WHERE email = '$email' ",$conexion) or die ("Error: ".mysql_error());   

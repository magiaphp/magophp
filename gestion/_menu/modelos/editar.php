 <?php  
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql=mysql_query(" UPDATE _menu SET  
 ubicacion = '$_menu_ubicacion'  
 ,  padre = '$_menu_padre'  
 ,  label = '$_menu_label'  
 ,  url = '$_menu_url'  
 ,  icono = '$_menu_icono'  
 ,  orden = '$_menu_orden'  
 WHERE id = '$_menu_id' ",$conexion) or die ("Error: ".mysql_error());   

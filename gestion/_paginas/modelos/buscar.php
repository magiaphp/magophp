 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 
 $comando = "SELECT *  
 FROM _paginas  
 WHERE  
 pagina like '%$_paginas_pagina%'    
 ORDER BY id DESC"; 
 
 $sql=mysql_query($comando,$conexion) or die ("Error:".mysql_error()); 

 
 $total_items = mysql_num_rows(mysql_query("$comando ",$conexion));

<?php

 
 $comando = "SELECT *  
 FROM _grupos  
 WHERE  
 grupo like '%$_grupos_grupo%'    
 ORDER BY id DESC"; 
 $sql=mysql_query("$comando",$conexion) or die ("Error:".mysql_error());  
 
 $total_items = mysql_num_rows(mysql_query("$comando ",$conexion));

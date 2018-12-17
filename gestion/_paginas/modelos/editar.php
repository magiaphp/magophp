 <?php  
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql=mysql_query(" UPDATE _paginas SET  
 pagina = '$_paginas_pagina'  
 WHERE id = '$_paginas_id' ",$conexion) or die ("Error: ".mysql_error());   

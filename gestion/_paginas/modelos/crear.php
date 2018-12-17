 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql = "INSERT INTO _paginas ( 
 pagina  ) VALUES ( 
 :pagina    )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":pagina"=>"$_paginas_pagina"              ) 
 ); 
 $mensaje = "Realizado con exito"; 

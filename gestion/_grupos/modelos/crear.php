 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql = "INSERT INTO _grupos ( 
 grupo  ) VALUES ( 
 :grupo    )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":grupo"=>"$_grupos_grupo"              ) 
 ); 
 $mensaje = "Realizado con exito"; 

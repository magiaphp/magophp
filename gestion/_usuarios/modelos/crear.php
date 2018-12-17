 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql = "INSERT INTO _usuarios ( 
 grupo  ,  usuario  ,  clave  ,  estatus  ) VALUES ( 
 :grupo  ,  :usuario  ,  :clave  ,  :estatus    )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":grupo"=>"$t_usuarios_grupo"  ,  
     ":usuario"=>"$t_usuarios_usuario"  ,  
     ":clave"=>"$t_usuarios_clave"  ,  
     ":estatus"=>"$t_usuarios_estatus"              ) 
 ); 
 $mensaje = "Realizado con exito"; 

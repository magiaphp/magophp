 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql = "INSERT INTO _menu ( 
 ubicacion  ,  padre  ,  label  ,  url  ,  icono  ,  orden  ) VALUES ( 
 :ubicacion  ,  :padre  ,  :label  ,  :url  ,  :icono  ,  :orden    )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":ubicacion"=>"$_menu_ubicacion"  ,  ":padre"=>"$_menu_padre"  ,  ":label"=>"$_menu_label"  ,  ":url"=>"$_menu_url"  ,  ":icono"=>"$_menu_icono"  ,  ":orden"=>"$_menu_orden"              ) 
 ); 
 $mensaje = "Realizado con exito"; 

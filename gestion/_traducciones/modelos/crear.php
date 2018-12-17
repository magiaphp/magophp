 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql = "INSERT INTO _traducciones ( 
 frase  ,  idioma  ,  traduccion  ) VALUES ( 
 :frase  ,  :idioma  ,  :traduccion    )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":frase"=>"$_traducciones_frase"  ,  ":idioma"=>"$_traducciones_idioma"  ,  ":traduccion"=>"$_traducciones_traduccion"              ) 
 ); 
 $mensaje = "Realizado con exito"; 

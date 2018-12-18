 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql = "INSERT INTO _actualizaciones ( 
 version 
 ,  requiere 
 ,  nombre 
 ,  descripcion 
 ,  ejecutar 
 ,  estatus 
 ) VALUES ( 
 :version 
 ,  :requiere 
 ,  :nombre 
 ,  :descripcion 
 ,  :ejecutar 
 ,  :estatus 
   )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":version"=>"$_actualizaciones_version" 
 ,  ":requiere"=>"$_actualizaciones_requiere" 
 ,  ":nombre"=>"$_actualizaciones_nombre" 
 ,  ":descripcion"=>"$_actualizaciones_descripcion" 
 ,  ":ejecutar"=>"$_actualizaciones_ejecutar" 
 ,  ":estatus"=>"$_actualizaciones_estatus" 
             ) 
 ); 


if($config_debug){
    echo "<h3>Debug mode (".__FILE__." )</h3>";
    
    $variables = array(
        "\$sql"=>"$sql"
    );
        
    echo "<table border>";
    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";       
    foreach ($variables as $key => $value) {
        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
    }    
    echo "</table>";

}
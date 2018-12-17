 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql = "INSERT INTO actualizaciones ( 
 codigo 
 ,  requiere 
 ,  nombre 
 ,  descripcion 
 ,  ejecutar 
 ,  estatus 
 ) VALUES ( 
 :codigo 
 ,  :requiere 
 ,  :nombre 
 ,  :descripcion 
 ,  :ejecutar 
 ,  :estatus 
   )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":codigo"=>"$actualizaciones_codigo" 
 ,  ":requiere"=>"$actualizaciones_requiere" 
 ,  ":nombre"=>"$actualizaciones_nombre" 
 ,  ":descripcion"=>"$actualizaciones_descripcion" 
 ,  ":ejecutar"=>"$actualizaciones_ejecutar" 
 ,  ":estatus"=>"$actualizaciones_estatus" 
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
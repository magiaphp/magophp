 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql = "INSERT INTO _opciones ( 
 opcion 
 ,  valor 
 ,  grupo 
 ) VALUES ( 
 :opcion 
 ,  :valor 
 ,  :grupo 
   )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":opcion"=>"$_opciones_opcion" 
 ,  ":valor"=>"$_opciones_valor" 
 ,  ":grupo"=>"$_opciones_grupo" 
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
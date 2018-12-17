 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql = "INSERT INTO logs ( 
    usuario 
 ,  grupo 
 ,  ip 
 ,  mac 
 ,  p 
 ,  c 
 ,  a 
 ,  comando 
 ,  argumento 
 ,  sospechoso 
 ) VALUES ( 
 :usuario 
 ,  :grupo 
 ,  :ip 
 ,  :mac 
 ,  :p 
 ,  :c 
 ,  :a 
 ,  :comando 
 ,  :argumento 
 ,  :sospechoso 
   )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":usuario"=>"$logs_usuario" 
 ,  ":grupo"=>"$logs_grupo" 
 ,  ":ip"=>"$logs_ip" 
 ,  ":mac"=>"$logs_mac" 
 ,  ":p"=>"$logs_p" 
 ,  ":c"=>"$logs_c" 
 ,  ":a"=>"$logs_a" 
 ,  ":comando"=>"$logs_comando" 
 ,  ":argumento"=>"$logs_argumento" 
 ,  ":sospechoso"=>"$logs_sospechoso" 
             ) 
 ); 
 
     $variables = array(
        "\$sql"=>"$sql"
    );


if($config_debug){
    echo "<h3>Debug mode (".__FILE__." )</h3>";
    

        
    echo "<table border>";
    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";       
    foreach ($variables as $key => $value) {
        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
    }    
    echo "</table>";

}
 <?php  
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql=mysql_query(" UPDATE logs SET  
 usuario = '$logs_usuario'  
 ,  grupo = '$logs_grupo'  
 ,  ip = '$logs_ip'  
 ,  mac = '$logs_mac'  
 ,  p = '$logs_p'  
 ,  c = '$logs_c'  
 ,  a = '$logs_a'  
 ,  comando = '$logs_comando'  
 ,  argumento = '$logs_argumento'  
 ,  sospechoso = '$logs_sospechoso'  
 WHERE id = '$logs_id' 
 ",$conexion) or error(__DIR__, __FILE__, __LINE__);   


            if($config_debug){
                echo "<h3>Debug mode (".__FILE__." )</h3>";

                $variables = array(
                    "\$sql"=>"$sql",
                    "\$logs_id"=>"$logs_id"
                );

                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";       
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }    
                echo "</table>";

            }
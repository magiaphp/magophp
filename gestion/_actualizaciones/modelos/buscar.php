 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql=mysql_query( 
         "SELECT *  
 FROM _actualizaciones  
 WHERE  
 version like '%$_actualizaciones_version%'    
 AND  requiere like '%$_actualizaciones_requiere%'    
 AND  nombre like '%$_actualizaciones_nombre%'    
 AND  descripcion like '%$_actualizaciones_descripcion%'    
 AND  ejecutar like '%$_actualizaciones_ejecutar%'    
 AND  estatus like '%$_actualizaciones_estatus%'    
 ORDER BY id DESC    
 ",$conexion) or error(__DIR__, __FILE__, __LINE__);  
 $total_items = mysql_num_rows(mysql_query("$comando ", $conexion)); 


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
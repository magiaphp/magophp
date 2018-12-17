 <?php  
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql=mysql_query(" UPDATE actualizaciones SET  
 codigo = '$actualizaciones_codigo'  
 ,  requiere = '$actualizaciones_requiere'  
 ,  nombre = '$actualizaciones_nombre'  
 ,  descripcion = '$actualizaciones_descripcion'  
 ,  ejecutar = '$actualizaciones_ejecutar'  
 ,  estatus = '$actualizaciones_estatus'  
 WHERE id = '$actualizaciones_id' 
 ",$conexion) or error(__DIR__, __FILE__, __LINE__);   


            if($config_debug){
                echo "<h3>Debug mode (".__FILE__." )</h3>";

                $variables = array(
                    "\$sql"=>"$sql",
                    "\$actualizaciones_id"=>"$actualizaciones_id"
                );

                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";       
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }    
                echo "</table>";

            }
 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "editar"; 
 $pagina = "actualizaciones"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
 if(isset($_REQUEST['a'])=='editar'){ 
 $actualizaciones_id = mysql_real_escape_string($_REQUEST['actualizaciones_id']);      
 include "./actualizaciones/reg/post.php";  
 include "./actualizaciones/modelos/editar.php";  

 include "./actualizaciones/modelos/ver.php";  
 include "./actualizaciones/reg/reg.php"; 
 include "./actualizaciones/vista/ver.php";  
 }else{ 
 $actualizaciones_id = mysql_real_escape_string($_REQUEST['actualizaciones_id']);      
 include "./actualizaciones/modelos/ver.php"; 
 include "./actualizaciones/reg/reg.php"; 
 include "./actualizaciones/vista/editar.php"; 
 }  
 } else { 
 permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 

            if($config_debug){
                echo "<h3>Debug mode (".__FILE__." )</h3>";

                $variables = array(
                    "\$accion"=>"$accion",
                    "\$pagina"=>"$pagina",
                    "\$_usuarios_grupo"=>"$_usuarios_grupo",
                    "permisos_tiene_permiso(\$accion, \$pagina, \$_usuarios_grupo)"=>permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo),
                    "\$_REQUEST['a']"=>"$_REQUEST[a]",
                    "\$_REQUEST['a']"=>"$_REQUEST[a]",       
                    "$actualizaciones_id"=>"$actualizaciones_id"        
                );
                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }
                echo "</table>";
            }
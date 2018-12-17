 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "editar"; 
 $pagina = "_opciones"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
 if(isset($_REQUEST['a'])=='editar'){ 
 $_opciones_id = mysql_real_escape_string($_REQUEST['_opciones_id']);      
 include "./_opciones/reg/post.php";  
 include "./_opciones/modelos/editar.php";  

 include "./_opciones/modelos/ver.php";  
 include "./_opciones/reg/reg.php"; 
 include "./_opciones/vista/ver.php";  
 }else{ 
 $_opciones_id = mysql_real_escape_string($_REQUEST['_opciones_id']);      
 include "./_opciones/modelos/ver.php"; 
 include "./_opciones/reg/reg.php"; 
 include "./_opciones/vista/editar.php"; 
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
                    "$_opciones_id"=>"$_opciones_id"        
                );
                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }
                echo "</table>";
            }
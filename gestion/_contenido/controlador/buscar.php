 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "buscar"; 
 $pagina = "_contenido"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
     $b = mysql_real_escape_string($_REQUEST['b']);
     include "./_contenido/modelos/buscar.php"; 
     
     include "./_contenido/vista/correccion.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina,$_usuarios_usuario); 
 } 

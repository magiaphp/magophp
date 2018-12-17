 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "ver"; 
 $pagina = "_idiomas"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $_idiomas_id 		= mysql_real_escape_string($_REQUEST['_idiomas_id']);   
     include "./_idiomas/modelos/var.php"; 
     $html = file_get_contents("./_idiomas/vista/var.php"); 
     include "./_idiomas/reg/var.php"; 
     // aca la traduccion no va ya que imprimimos el html directo 
     echo $html; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 

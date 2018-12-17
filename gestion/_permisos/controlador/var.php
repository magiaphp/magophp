 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "ver"; 
 $pagina = "_permisos"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $_permisos_id 		= mysql_real_escape_string($_REQUEST['_permisos_id']);   
     include "./_permisos/modelos/var.php"; 
     $html = file_get_contents("./_permisos/vista/var.php"); 
     include "./_permisos/reg/var.php"; 
     // aca la traduccion no va ya que imprimimos el html directo 
     echo $html; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 

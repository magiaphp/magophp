 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "ver"; 
 $pagina = "_traducciones"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $_traducciones_id 		= mysql_real_escape_string($_REQUEST['_traducciones_id']);   
     include "./_traducciones/modelos/var.php"; 
     $html = file_get_contents("./_traducciones/vista/var.php"); 
     include "./_traducciones/reg/var.php"; 
     // aca la traduccion no va ya que imprimimos el html directo 
     echo $html; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 

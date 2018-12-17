 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "ver"; 
 $pagina = "_menu"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $_menu_id 		= mysql_real_escape_string($_REQUEST['_menu_id']);   
     include "./_menu/modelos/var.php"; 
     $html = file_get_contents("./_menu/vista/var.php"); 
     include "./_menu/reg/var.php"; 
     // aca la traduccion no va ya que imprimimos el html directo 
     echo $html; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 

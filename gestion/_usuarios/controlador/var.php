 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "ver"; 
 $pagina = "_usuarios"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $t_usuarios_id 		= mysql_real_escape_string($_REQUEST['t_usuarios_id']);   
     include "./_usuarios/modelos/var.php"; 
     $html = file_get_contents("./_usuarios/vista/var.php"); 
     include "./_usuarios/reg/var.php"; 
     // aca la traduccion no va ya que imprimimos el html directo 
     echo $html; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 

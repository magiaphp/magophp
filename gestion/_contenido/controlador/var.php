 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "ver"; 
 $pagina = "_contenido"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $_contenido_id 		= mysql_real_escape_string($_REQUEST['_contenido_id']);   
     include "./_contenido/modelos/var.php"; 
     $html = file_get_contents("./_contenido/vista/var.php"); 
     include "./_contenido/reg/var.php"; 
     // aca la traduccion no va ya que imprimimos el html directo 
     echo $html; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 

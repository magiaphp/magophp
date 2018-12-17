 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "ver"; 
 $pagina = "_paginas"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $_paginas_id 		= mysql_real_escape_string($_REQUEST['_paginas_id']);   
     include "./_paginas/modelos/var.php"; 
     $html = file_get_contents("./_paginas/vista/var.php"); 
     include "./_paginas/reg/var.php"; 
     // aca la traduccion no va ya que imprimimos el html directo 
     echo $html; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 

 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "buscar"; 
 $pagina = "_usuarios"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
     include "./_usuarios/reg/get.php"; 
     include "./_usuarios/modelos/buscar.php"; 
     //include "./_usuarios/reg/ttt.php"; 
     include "./_usuarios/vista/index.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina,$_usuarios_usuario); 
 } 

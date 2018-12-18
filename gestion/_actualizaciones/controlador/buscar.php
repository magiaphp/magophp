 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "buscar"; 
 $pagina = "_actualizaciones"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
       $inicia = (isset($_REQUEST['pag']) && $_REQUEST['pag'] != 0 ) ? $_REQUEST['pag'] * $cfg_limite_items_en_tablas : 0;  
     include "./_actualizaciones/modelos/buscar.php"; 
     include "./_actualizaciones/vista/buscar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina,$_usuarios_usuario); 
 } 

 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "buscar"; 
 $pagina = "_paginas"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
     $inicia = (isset($_REQUEST['pag']) && $_REQUEST['pag'] != 0 ) ? $_REQUEST['pag'] * $cfg_limite_items_en_tablas : 0;  
     include "./_paginas/reg/get.php";
     include "./_paginas/modelos/buscar.php"; 
      
     include "./_paginas/vista/index.php"; 
     logs_historico($p,$c,false);
 } else { 
     permisos_sin_permiso($accion,$pagina,$_usuarios_usuario); 
 } 

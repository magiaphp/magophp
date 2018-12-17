<?php

/**
  magia_version: 0.0.8
 * */
$accion = "crear";
$pagina = "_permisos";

if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    
    if (isset($_REQUEST['a']) == 'crear') {      
        
        include "./_permisos/reg/post.php";
        
        include "./_permisos/modelos/crear.php";
        
        
        
        
        
      echo '<meta http-equiv="refresh" content="0; url=index.php?p=' . $p . '&c=buscar&donde=grupo&busqueda='.$_permisos_grupo.'">';
        
        
        
        //echo '<META http-equiv="refresh" content="0; URL=index.php?p='.$pagina.'">';
    } else {
        include "./_permisos/vista/crear.php";
    }
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 

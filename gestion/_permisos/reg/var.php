<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
  
 $datos= [
            "_permisos"=>[ "id"=>"$_permisos_id",  
 "grupo"=>"$_permisos_grupo",  
 "pagina"=>"$_permisos_pagina",  
 "permiso"=>"$_permisos_permiso",  
                ]
        ];  $html = str_replace('%_permisos_id%',       $datos['_permisos']['id'], $html); 
  $html = str_replace('%_permisos_grupo%',       $datos['_permisos']['grupo'], $html); 
  $html = str_replace('%_permisos_pagina%',       $datos['_permisos']['pagina'], $html); 
  $html = str_replace('%_permisos_permiso%',       $datos['_permisos']['permiso'], $html); 

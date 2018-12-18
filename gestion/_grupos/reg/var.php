<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
  
 $datos= [
            "_grupos"=>[ "id"=>"$_grupos_id",  
 "grupo"=>"$_grupos_grupo",  
                ]
        ];  $html = str_replace('%_grupos_id%',       $datos['_grupos']['id'], $html); 
  $html = str_replace('%_grupos_grupo%',       $datos['_grupos']['grupo'], $html); 

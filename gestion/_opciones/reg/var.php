<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
  
 $datos= [
            "_opciones"=>[ "id"=>"$_opciones_id",  
 "opcion"=>"$_opciones_opcion",  
 "valor"=>"$_opciones_valor",  
 "grupo"=>"$_opciones_grupo",  
                ]
        ];  $html = str_replace('%_opciones_id%',       $datos['_opciones']['id'], $html); 
  $html = str_replace('%_opciones_opcion%',       $datos['_opciones']['opcion'], $html); 
  $html = str_replace('%_opciones_valor%',       $datos['_opciones']['valor'], $html); 
  $html = str_replace('%_opciones_grupo%',       $datos['_opciones']['grupo'], $html); 

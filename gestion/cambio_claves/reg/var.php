<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
  
 $datos= [
            "cambio_claves"=>[ "id"=>"$cambio_claves_id",  
 "usuario"=>"$cambio_claves_usuario",  
 "codigo"=>"$cambio_claves_codigo",  
 "fecha_solicitud"=>"$cambio_claves_fecha_solicitud",  
 "codigo_usado"=>"$cambio_claves_codigo_usado",  
                ]
        ];  $html = str_replace('%cambio_claves_id%',       $datos['cambio_claves']['id'], $html); 
  $html = str_replace('%cambio_claves_usuario%',       $datos['cambio_claves']['usuario'], $html); 
  $html = str_replace('%cambio_claves_codigo%',       $datos['cambio_claves']['codigo'], $html); 
  $html = str_replace('%cambio_claves_fecha_solicitud%',       $datos['cambio_claves']['fecha_solicitud'], $html); 
  $html = str_replace('%cambio_claves_codigo_usado%',       $datos['cambio_claves']['codigo_usado'], $html); 

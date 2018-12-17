<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
  
 $datos= [
            "_contenido"=>[ "id"=>"$_contenido_id",  
 "frase"=>"$_contenido_frase",  
 "contexto"=>"$_contenido_contexto",  
                ]
        ];  $html = str_replace('%_contenido_id%',       $datos['_contenido']['id'], $html); 
  $html = str_replace('%_contenido_frase%',       $datos['_contenido']['frase'], $html); 
  $html = str_replace('%_contenido_contexto%',       $datos['_contenido']['contexto'], $html); 

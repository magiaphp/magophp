<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
  
 $datos= [
            "_traducciones"=>[ "id"=>"$_traducciones_id",  
 "frase"=>"$_traducciones_frase",  
 "idioma"=>"$_traducciones_idioma",  
 "traduccion"=>"$_traducciones_traduccion",  
                ]
        ];  $html = str_replace('%_traducciones_id%',       $datos['_traducciones']['id'], $html); 
  $html = str_replace('%_traducciones_frase%',       $datos['_traducciones']['frase'], $html); 
  $html = str_replace('%_traducciones_idioma%',       $datos['_traducciones']['idioma'], $html); 
  $html = str_replace('%_traducciones_traduccion%',       $datos['_traducciones']['traduccion'], $html); 

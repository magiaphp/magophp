<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
  
 $datos= [
            "_menu"=>[ "id"=>"$_menu_id",  
 "ubicacion"=>"$_menu_ubicacion",  
 "padre"=>"$_menu_padre",  
 "label"=>"$_menu_label",  
 "url"=>"$_menu_url",  
 "icono"=>"$_menu_icono",  
 "orden"=>"$_menu_orden",  
                ]
        ];  $html = str_replace('%_menu_id%',       $datos['_menu']['id'], $html); 
  $html = str_replace('%_menu_ubicacion%',       $datos['_menu']['ubicacion'], $html); 
  $html = str_replace('%_menu_padre%',       $datos['_menu']['padre'], $html); 
  $html = str_replace('%_menu_label%',       $datos['_menu']['label'], $html); 
  $html = str_replace('%_menu_url%',       $datos['_menu']['url'], $html); 
  $html = str_replace('%_menu_icono%',       $datos['_menu']['icono'], $html); 
  $html = str_replace('%_menu_orden%',       $datos['_menu']['orden'], $html); 

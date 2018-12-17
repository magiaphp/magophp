<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
  
 $datos= [
            "t_usuarios"=>[ "id"=>"$t_usuarios_id",  
 "grupo"=>"$t_usuarios_grupo",  
 "usuario"=>"$t_usuarios_usuario",  
 "clave"=>"$t_usuarios_clave",  
 "estatus"=>"$t_usuarios_estatus",  
                ]
        ];  $html = str_replace('%t_usuarios_id%',       $datos['t_usuarios']['id'], $html); 
  $html = str_replace('%t_usuarios_grupo%',       $datos['t_usuarios']['grupo'], $html); 
  $html = str_replace('%t_usuarios_usuario%',       $datos['t_usuarios']['usuario'], $html); 
  $html = str_replace('%t_usuarios_clave%',       $datos['t_usuarios']['clave'], $html); 
  $html = str_replace('%t_usuarios_estatus%',       $datos['t_usuarios']['estatus'], $html); 

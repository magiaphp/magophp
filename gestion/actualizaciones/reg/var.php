<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
  
 $datos= [
            "actualizaciones"=>[ "id"=>"$actualizaciones_id",  
 "codigo"=>"$actualizaciones_codigo",  
 "requiere"=>"$actualizaciones_requiere",  
 "nombre"=>"$actualizaciones_nombre",  
 "descripcion"=>"$actualizaciones_descripcion",  
 "ejecutar"=>"$actualizaciones_ejecutar",  
 "estatus"=>"$actualizaciones_estatus",  
                ]
        ];  $html = str_replace('%actualizaciones_id%',       $datos['actualizaciones']['id'], $html); 
  $html = str_replace('%actualizaciones_codigo%',       $datos['actualizaciones']['codigo'], $html); 
  $html = str_replace('%actualizaciones_requiere%',       $datos['actualizaciones']['requiere'], $html); 
  $html = str_replace('%actualizaciones_nombre%',       $datos['actualizaciones']['nombre'], $html); 
  $html = str_replace('%actualizaciones_descripcion%',       $datos['actualizaciones']['descripcion'], $html); 
  $html = str_replace('%actualizaciones_ejecutar%',       $datos['actualizaciones']['ejecutar'], $html); 
  $html = str_replace('%actualizaciones_estatus%',       $datos['actualizaciones']['estatus'], $html); 

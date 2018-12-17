<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
  
 $datos= [
            "logs"=>[ "id"=>"$logs_id",  
 "fecha"=>"$logs_fecha",  
 "usuario"=>"$logs_usuario",  
 "grupo"=>"$logs_grupo",  
 "ip"=>"$logs_ip",  
 "mac"=>"$logs_mac",  
 "p"=>"$logs_p",  
 "c"=>"$logs_c",  
 "a"=>"$logs_a",  
 "comando"=>"$logs_comando",  
 "argumento"=>"$logs_argumento",  
 "sospechoso"=>"$logs_sospechoso",  
                ]
        ];  $html = str_replace('%logs_id%',       $datos['logs']['id'], $html); 
  $html = str_replace('%logs_fecha%',       $datos['logs']['fecha'], $html); 
  $html = str_replace('%logs_usuario%',       $datos['logs']['usuario'], $html); 
  $html = str_replace('%logs_grupo%',       $datos['logs']['grupo'], $html); 
  $html = str_replace('%logs_ip%',       $datos['logs']['ip'], $html); 
  $html = str_replace('%logs_mac%',       $datos['logs']['mac'], $html); 
  $html = str_replace('%logs_p%',       $datos['logs']['p'], $html); 
  $html = str_replace('%logs_c%',       $datos['logs']['c'], $html); 
  $html = str_replace('%logs_a%',       $datos['logs']['a'], $html); 
  $html = str_replace('%logs_comando%',       $datos['logs']['comando'], $html); 
  $html = str_replace('%logs_argumento%',       $datos['logs']['argumento'], $html); 
  $html = str_replace('%logs_sospechoso%',       $datos['logs']['sospechoso'], $html); 

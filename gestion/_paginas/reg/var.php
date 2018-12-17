<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
  
 $datos= [
            "_paginas"=>[ "id"=>"$_paginas_id",  
 "pagina"=>"$_paginas_pagina",  
                ]
        ];  $html = str_replace('%_paginas_id%',       $datos['_paginas']['id'], $html); 
  $html = str_replace('%_paginas_pagina%',       $datos['_paginas']['pagina'], $html); 

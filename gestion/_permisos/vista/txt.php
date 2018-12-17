<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $html = "
_permisos_id : %_permisos_id%
_permisos_grupo : %_permisos_grupo%
_permisos_pagina : %_permisos_pagina%
_permisos_permiso : %_permisos_permiso%
";

                include "./_permisos/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>
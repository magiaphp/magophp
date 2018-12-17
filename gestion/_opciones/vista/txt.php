<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $html = "
_opciones_id : %_opciones_id%
_opciones_opcion : %_opciones_opcion%
_opciones_valor : %_opciones_valor%
_opciones_grupo : %_opciones_grupo%
";

                include "./_opciones/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>
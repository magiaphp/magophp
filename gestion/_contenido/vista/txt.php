<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $html = "
_contenido_id : %_contenido_id%
_contenido_frase : %_contenido_frase%
_contenido_contexto : %_contenido_contexto%
";

                include "./_contenido/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>
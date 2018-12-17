<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $html = "
cambio_claves_id : %cambio_claves_id%
cambio_claves_usuario : %cambio_claves_usuario%
cambio_claves_codigo : %cambio_claves_codigo%
cambio_claves_fecha_solicitud : %cambio_claves_fecha_solicitud%
cambio_claves_codigo_usado : %cambio_claves_codigo_usado%
";

                include "./cambio_claves/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>
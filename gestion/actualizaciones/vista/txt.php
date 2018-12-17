<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $html = "
actualizaciones_id : %actualizaciones_id%
actualizaciones_codigo : %actualizaciones_codigo%
actualizaciones_requiere : %actualizaciones_requiere%
actualizaciones_nombre : %actualizaciones_nombre%
actualizaciones_descripcion : %actualizaciones_descripcion%
actualizaciones_ejecutar : %actualizaciones_ejecutar%
actualizaciones_estatus : %actualizaciones_estatus%
";

                include "./actualizaciones/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>
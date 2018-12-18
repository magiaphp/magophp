<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $html = "
_actualizaciones_id : %_actualizaciones_id%
_actualizaciones_version : %_actualizaciones_version%
_actualizaciones_requiere : %_actualizaciones_requiere%
_actualizaciones_nombre : %_actualizaciones_nombre%
_actualizaciones_descripcion : %_actualizaciones_descripcion%
_actualizaciones_ejecutar : %_actualizaciones_ejecutar%
_actualizaciones_estatus : %_actualizaciones_estatus%
";

                include "./_actualizaciones/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>
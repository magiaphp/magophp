<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $html = "
logs_id : %logs_id%
logs_fecha : %logs_fecha%
logs_usuario : %logs_usuario%
logs_grupo : %logs_grupo%
logs_ip : %logs_ip%
logs_mac : %logs_mac%
logs_p : %logs_p%
logs_c : %logs_c%
logs_a : %logs_a%
logs_comando : %logs_comando%
logs_argumento : %logs_argumento%
logs_sospechoso : %logs_sospechoso%
";

                include "./logs/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>
<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $html = "
_traducciones_id : %_traducciones_id%
_traducciones_frase : %_traducciones_frase%
_traducciones_idioma : %_traducciones_idioma%
_traducciones_traduccion : %_traducciones_traduccion%
";

                include "./_traducciones/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>
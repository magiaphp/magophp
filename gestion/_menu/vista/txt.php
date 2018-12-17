<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $html = "
_menu_id : %_menu_id%
_menu_ubicacion : %_menu_ubicacion%
_menu_padre : %_menu_padre%
_menu_label : %_menu_label%
_menu_url : %_menu_url%
_menu_icono : %_menu_icono%
_menu_orden : %_menu_orden%
";

                include "./_menu/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>
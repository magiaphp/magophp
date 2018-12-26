<?php
 $inicia = (isset($_REQUEST['pag']) && $_REQUEST['pag'] != 0 ) ? $_REQUEST['pag'] * $cfg_limite_items_en_tablas : 0;    
     include "./_traducciones/modelos/export_cvs.php"; 
     include "./_traducciones/vista/export_cvs.php"; 
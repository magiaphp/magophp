<?php 
 /**  
 magia_version: 0.0.8 
 **/
  
    $cambio_claves_id = (isset($_REQUEST['cambio_claves_id']))?mysql_real_escape_string($_REQUEST['cambio_claves_id']):null;   
    $cambio_claves_usuario = (isset($_REQUEST['cambio_claves_usuario']))?mysql_real_escape_string($_REQUEST['cambio_claves_usuario']):null;   
    $cambio_claves_codigo = (isset($_REQUEST['cambio_claves_codigo']))?mysql_real_escape_string($_REQUEST['cambio_claves_codigo']):null;   
   # $cambio_claves_fecha_solicitud = (isset($_REQUEST['cambio_claves_fecha_solicitud']))?mysql_real_escape_string($_REQUEST['cambio_claves_fecha_solicitud']):CURRENT_TIMESTAMP;   
    $cambio_claves_codigo_usado = (isset($_REQUEST['cambio_claves_codigo_usado']))?mysql_real_escape_string($_REQUEST['cambio_claves_codigo_usado']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_REQUEST as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }
<?php 
 /**  
 magia_version: 0.0.11 
 **/
  
    $_actualizaciones_id = (isset($_REQUEST['_actualizaciones_id']))?mysql_real_escape_string($_REQUEST['_actualizaciones_id']):null;   
    $_actualizaciones_version = (isset($_REQUEST['_actualizaciones_version']))?mysql_real_escape_string($_REQUEST['_actualizaciones_version']):null;   
    $_actualizaciones_requiere = (isset($_REQUEST['_actualizaciones_requiere']))?mysql_real_escape_string($_REQUEST['_actualizaciones_requiere']):null;   
    $_actualizaciones_nombre = (isset($_REQUEST['_actualizaciones_nombre']))?mysql_real_escape_string($_REQUEST['_actualizaciones_nombre']):null;   
    $_actualizaciones_descripcion = (isset($_REQUEST['_actualizaciones_descripcion']))?mysql_real_escape_string($_REQUEST['_actualizaciones_descripcion']):null;   
    $_actualizaciones_ejecutar = (isset($_REQUEST['_actualizaciones_ejecutar']))?mysql_real_escape_string($_REQUEST['_actualizaciones_ejecutar']):null;   
    $_actualizaciones_estatus = (isset($_REQUEST['_actualizaciones_estatus']))?mysql_real_escape_string($_REQUEST['_actualizaciones_estatus']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_REQUEST as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }
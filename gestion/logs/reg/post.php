<?php 
 /**  
 magia_version: 0.0.8 
 **/
  
  //$logs_id = mysql_real_escape_string($_POST['logs_id']); 
 #    $logs_fecha = (isset($_POST['logs_fecha']))?mysql_real_escape_string($_POST['logs_fecha']):CURRENT_TIMESTAMP;   
    $logs_usuario = (isset($_POST['logs_usuario']))?mysql_real_escape_string($_POST['logs_usuario']):null;   
    $logs_grupo = (isset($_POST['logs_grupo']))?mysql_real_escape_string($_POST['logs_grupo']):null;   
    $logs_ip = (isset($_POST['logs_ip']))?mysql_real_escape_string($_POST['logs_ip']):null;   
    $logs_mac = (isset($_POST['logs_mac']))?mysql_real_escape_string($_POST['logs_mac']):null;   
    $logs_p = (isset($_POST['logs_p']))?mysql_real_escape_string($_POST['logs_p']):null;   
    $logs_c = (isset($_POST['logs_c']))?mysql_real_escape_string($_POST['logs_c']):null;   
    $logs_a = (isset($_POST['logs_a']))?mysql_real_escape_string($_POST['logs_a']):null;   
    $logs_comando = (isset($_POST['logs_comando']))?mysql_real_escape_string($_POST['logs_comando']):null;   
    $logs_argumento = (isset($_POST['logs_argumento']))?mysql_real_escape_string($_POST['logs_argumento']):null;   
    $logs_sospechoso = (isset($_POST['logs_sospechoso']))?mysql_real_escape_string($_POST['logs_sospechoso']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_POST as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }
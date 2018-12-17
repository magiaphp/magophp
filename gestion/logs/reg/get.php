<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
  
  //$logs_id = mysql_real_escape_string($_GET['logs_id']); 
  #  $logs_fecha = (isset($_GET['logs_fecha']))?mysql_real_escape_string($_GET['logs_fecha']):CURRENT_TIMESTAMP;   
    $logs_usuario = (isset($_GET['logs_usuario']))?mysql_real_escape_string($_GET['logs_usuario']):null;   
    $logs_grupo = (isset($_GET['logs_grupo']))?mysql_real_escape_string($_GET['logs_grupo']):null;   
    $logs_ip = (isset($_GET['logs_ip']))?mysql_real_escape_string($_GET['logs_ip']):null;   
    $logs_mac = (isset($_GET['logs_mac']))?mysql_real_escape_string($_GET['logs_mac']):null;   
    $logs_p = (isset($_GET['logs_p']))?mysql_real_escape_string($_GET['logs_p']):null;   
    $logs_c = (isset($_GET['logs_c']))?mysql_real_escape_string($_GET['logs_c']):null;   
    $logs_a = (isset($_GET['logs_a']))?mysql_real_escape_string($_GET['logs_a']):null;   
    $logs_comando = (isset($_GET['logs_comando']))?mysql_real_escape_string($_GET['logs_comando']):null;   
    $logs_argumento = (isset($_GET['logs_argumento']))?mysql_real_escape_string($_GET['logs_argumento']):null;   
    $logs_sospechoso = (isset($_GET['logs_sospechoso']))?mysql_real_escape_string($_GET['logs_sospechoso']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_GET as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }
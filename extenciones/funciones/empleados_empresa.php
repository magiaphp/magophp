<?php 
function empleados_empresa_segun_id_empresa($empleados_empresa_id_empresa) {
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM empleados_empresa WHERE id_empresa = '$empleados_empresa_id_empresa' ", $conexion) or die("Error:" . mysql_error());
   
    
    while ($reg = mysql_fetch_array($sql)) {
        //include "../gestion/contactos/reg/reg.php";
        echo "<tr>";
        echo "<td>$reg[id]</td>"; 
        echo "<td>$reg[id_empresa]</td>"; 
        echo "<td>$reg[id_contacto]</td>"; 
        echo "<td>$reg[cargo]</td>"; 
        echo "<td>$reg[fecha_ingreso]</td>";         
        echo "<td>$reg[orden]</td>"; 
        echo "<td>$reg[estatus]</td>";              
        echo "</tr>";
       
    }
}
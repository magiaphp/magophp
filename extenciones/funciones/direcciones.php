<?php 
function direcciones_segun_id_contacto($contactos_id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM direcciones WHERE id_contacto = '$contactos_id' ", $conexion) or die("Error:" . mysql_error());
   
    
    while ($reg = mysql_fetch_array($sql)) {
        //include "../gestion/contactos/reg/reg.php";
        echo "<tr>";
        echo "<td>$contactos_id</td>"; 
        echo "<td>$reg[0]</td>"; 
        echo "<td>$reg[pais]</td>"; 
        echo "<td>$reg[provincia]</td>"; 
        echo "<td>$reg[ciudad]</td>"; 
        echo "</tr>";
       
    }
}
<?php 
function directorio_segun_id_contacto($contactos_id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM directorio WHERE id_contacto = '$contactos_id' ", $conexion) or die("Error:" . mysql_error());
   
    
    while ($reg = mysql_fetch_array($sql)) {
        //include "../gestion/contactos/reg/reg.php";
        echo "<tr>";
        echo "<td>$contactos_id</td>"; 
        echo "<td>$reg[0]</td>"; 
        echo "<td>$reg[tipo]</td>"; 
        echo "<td>$reg[dato]</td>"; 
        echo "<td>$reg[descripcion]</td>"; 
        echo "</tr>";
       
    }
}
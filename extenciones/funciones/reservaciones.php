<?php

/**
 * Reservaciones funciones del suario
 */
function reservaciones_hora_i_add($hora_i) {
    echo '
        <option value="25200">07h00 - 12h00</option>
        <option value="46800">13h00 - 23h00</option>
        ';
}

function reservaciones_segun_fecha($fecha) {
    global $conexion;

    $sql = mysql_query("SELECT * FROM reservaciones WHERE fecha_i = '$fecha' ORDER BY hora_i DESC ", $conexion) or error(__DIR__, __FILE__, __LINE__);

    $i = 1;
    echo '<table border class="table table-striped">';

    echo "<tr><td colspan=\"7\"><h3>" . fecha_larga($fecha) . "</h3></td></tr>";
    while ($reg = mysql_fetch_array($sql)) {
        echo "<tr>
        <td>$i</td>
        <td>$reg[id]</td>
        
        <td>" . parkings_campo("numero", $reg['id_parking']) . ", " . parkings_campo("direccion", $reg['id_parking']) . "</td>
        <td>$reg[fecha_i]</td>
        <td class=\"text-right\">" . horas_segun_segundos($reg['hora_i']) . " H</td>
        <td>$reg[placa]</td>
        <td><a href=\"index.php?p=reservaciones&c=ver&reservaciones_id=" . $reg['id'] . "\">" . _tr("Ver") . "</a></td>
        </tr>";

        $i++;
    }
    echo '</table>';
//    return json_decode($reg[0], true);
}

function reservaciones_verifica_reserva($id_parking, $placa, $fecha, $hora, $estatus) {
    global $conexion;

    $comando = "SELECT * FROM reservaciones WHERE (id_parking = '$id_parking' AND placa = '$placa' AND fecha_i = '$fecha' AND hora_i = '$hora' AND estatus = '$estatus' ) ";


    $sql = mysql_query("$comando", $conexion) or error(__DIR__, __FILE__, __LINE__);

    $total_items = mysql_num_rows(mysql_query("$comando ", $conexion));

    
}

/**
 * Cambia de estatus a una reserva
 * @param type $id_reserva
 * @param type $estatus
 */
function reservaciones_cambia_estatus($id_reserva, $estatus){
    
}

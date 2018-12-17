<?php

/**
  magia_version: 0.0.11
 * */
function tipo_parking_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM tipo_parking WHERE id = $id   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);



    if ($reg[$campo]) {
        return $reg[$campo];
    } else {
        return false;
    }
}

function tipo_parking_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion)
            or error(__DIR__, __FILE__, __LINE__);
    while ($tipo_parking = mysql_fetch_array($sql)) {
        //include "../gestion/tipo_parking/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $tipo_parking[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $tipo_parking[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$tipo_parking[$campo]\">$tipo_parking[$campo]</option> \n";
    }
}

function tipo_parking_add($selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM tipo_parking  ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    while ($tipo_parking = mysql_fetch_array($sql)) {

        include "../gestion/tipo_parking/reg/reg.php";

        echo "<option ";
        if ($selecionado == $tipo_parking[0]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $tipo_parking[0]) {
            echo " disabled ";
        } else {
            echo "";
        }
        //echo "value=\"$tipo_parking[0]\">$tipo_parking[0]</option>";
        echo "value=\"$tipo_parking[0]\">$tipo_parking_tipo</option> \n";
    }
}

/**/

function tipo_parking_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM tipo_parking   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}

function tipo_parking_campos_disponibles() {
    global $conexion;
    $data = array();
    $sql = mysql_query("SHOW COLUMNS FROM tipo_parking  ", $conexion) or error(__DIR__, __FILE__, __LINE__);

    while ($reg = mysql_fetch_array($sql)) {
        $data[$reg[0]] = $reg[0];
    }

    return $data;
}

/**
 * Son los campos que se debe mostrar en la tabla del index
 * @global type $conexion
 * @return type
 */
function tipo_parking_campos_a_mostrar() {
    global $conexion;
    $data = array();
    $sql = mysql_query("SELECT valor FROM _opciones WHERE opcion = 'tipo_parking_thead' ", $conexion) or error(__DIR__, __FILE__, __LINE__);

    $reg = mysql_fetch_array($sql);

    return json_decode($reg[0], true);
}

function tipo_parking_thead($ganchos = array()) {

    $campo_disponibles = tipo_parking_campos_disponibles();
    $tipo_parking_campos_a_mostrar = tipo_parking_campos_a_mostrar();
    echo "
     <thead>
        <tr> ";
    echo "<th>" . _tr("#") . "</th> "; // numero de linea
    foreach ($campo_disponibles as $value) {
        if (in_array($value, $tipo_parking_campos_a_mostrar)) {
            echo "<th>" . _tr($value) . "</th> ";
        }
    }


    if ($ganchos) {
        $i = 0;
        while ($i < count($ganchos)) {
            echo "<th>$ganchos[$i]</th>";
            $i++;
        }
    }




    echo "<th>" . _tr("Acción") . "</th> "; // accion             
    echo "    </tr>
    </thead>";
}

/**
 * 
 */
function tipo_parking_tfoot() {
    tipo_parking_thead();
}

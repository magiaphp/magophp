<?php

/**
  magia_version: 0.0.8
 * */
function cambio_claves_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM cambio_claves WHERE id = $id   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);



    if ($reg[$campo]) {
        return $reg[$campo];
    } else {
        return false;
    }
}

function cambio_claves_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion)
            or error(__DIR__, __FILE__, __LINE__);
    while ($cambio_claves = mysql_fetch_array($sql)) {
        //include "../gestion/cambio_claves/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $cambio_claves[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $cambio_claves[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$cambio_claves[$campo]\">$cambio_claves[$campo]</option> \n";
    }
}

function cambio_claves_add($selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM cambio_claves  ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    while ($cambio_claves = mysql_fetch_array($sql)) {

        include "../gestion/cambio_claves/reg/reg.php";

        echo "<option ";
        if ($selecionado == $cambio_claves[0]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $cambio_claves[0]) {
            echo " disabled ";
        } else {
            echo "";
        }
        //echo "value=\"$cambio_claves[0]\">$cambio_claves[0]</option>";
        echo "value=\"$cambio_claves[0]\">$cambio_claves_cambio_claves</option>";
    }
}

/**/

function cambio_claves_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM cambio_claves   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}

function cambio_claves_campos_disponibles() {
    global $conexion;
    $data = array();
    $sql = mysql_query("SHOW COLUMNS FROM cambio_claves  ", $conexion) or error(__DIR__, __FILE__, __LINE__);

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
function cambio_claves_campos_a_mostrar() {
    global $conexion;
    $data = array();
    $sql = mysql_query("SELECT valor FROM _opciones WHERE opcion = 'cambio_claves_thead' ", $conexion) or error(__DIR__, __FILE__, __LINE__);

    $reg = mysql_fetch_array($sql);

    return json_decode($reg[0], true);
}

function cambio_claves_thead() {
    $campo_disponibles = cambio_claves_campos_disponibles();
    $cambio_claves_campos_a_mostrar = cambio_claves_campos_a_mostrar();
    echo "
     <thead>
        <tr> ";
    echo "<th>" . _tr("#") . "</th> "; // numero de linea
    foreach ($campo_disponibles as $value) {
        if (in_array($value, $cambio_claves_campos_a_mostrar)) {
            echo "<th>" . _tr($value) . "</th> ";
        }
    }
    echo "<th>" . _tr("Acción") . "</th> "; // accion             
    echo "    </tr>
    </thead>";
}

/**
 * 
 */
function cambio_claves_tfoot() {
    cambio_claves_thead();
}

function cambio_claves_campo_segun_email($campo,$email) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM cambio_claves WHERE usuario = '$email' and codigo_usado = 0  ORDER BY fecha_solicitud DESC limit 0,1  ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);

    if ($reg[$campo]) {
        return $reg[$campo];
    } else {
        return false;
    }
}
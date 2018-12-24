<?php

/**
 * Regresa un $campo de la tabla segun su $id
 * @global type $conexion
 * @param type $campo Nombre del campo en la tabla
 * @param type $id identificador unico
 * @return boolean Regresa el valor que el $campo tiene
 * @package _actualizaciones
 */
function _actualizaciones_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query("SELECT $campo FROM _actualizaciones WHERE id = $id   ", $conexion) 
            or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);

    if ($reg[$campo]) {
        return $reg[$campo];
    } else {
        return false;
    }
}
/**
 * 
 * @global type $conexion
 * @param type $campo
 * @param type $label
 * @param type $selecionado
 * @param type $excluir
 * @package _actualizaciones
 * @todo Poner en array los items a excluir
 */
function _actualizaciones_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion)
            or error(__DIR__, __FILE__, __LINE__);
    while ($_actualizaciones = mysql_fetch_array($sql)) {
        //include "../gestion/_actualizaciones/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $_actualizaciones[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_actualizaciones[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$_actualizaciones[$campo]\">$_actualizaciones[$campo]</option> \n";
    }
}

function _actualizaciones_add($selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM _actualizaciones  ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    while ($_actualizaciones = mysql_fetch_array($sql)) {

        include "../gestion/_actualizaciones/reg/reg.php";

        echo "<option ";
        if ($selecionado == $_actualizaciones[0]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_actualizaciones[0]) {
            echo " disabled ";
        } else {
            echo "";
        }
        //echo "value=\"$_actualizaciones[0]\">$_actualizaciones[0]</option>";
        echo "value=\"$_actualizaciones[0]\">$_actualizaciones__actualizaciones</option>";
    }
}

/**/

function _actualizaciones_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM _actualizaciones   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}

function _actualizaciones_campos_disponibles() {
    global $conexion;
    $data = array();
    $sql = mysql_query("SHOW COLUMNS FROM _actualizaciones  ", $conexion) or error(__DIR__, __FILE__, __LINE__);

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
function _actualizaciones_campos_a_mostrar() {
    global $conexion;
    $data = array();
    $sql = mysql_query("SELECT valor FROM _opciones WHERE opcion = '_actualizaciones_thead' ", $conexion) or error(__DIR__, __FILE__, __LINE__);

    $reg = mysql_fetch_array($sql);

    return json_decode($reg[0], true);
}

function _actualizaciones_thead($ganchos = array()) {
    echo "
     <thead>
        <tr> ";
    echo "<th>" . _tr("#") . "</th> "; // numero de linea

    foreach (_grupo_campos_a_mostrar() as $key => $value) {
        if ($value == "si") {
            echo "<th>" . _tr($key) . "</th>";
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
function _actualizaciones_tfoot() {
    _actualizaciones_thead();
}

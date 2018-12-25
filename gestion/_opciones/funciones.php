<?php

/**
 * Regresa el valor del $campo segun su $id
 * @global type $conexion
 * @param type $campo Es el nombre del campo de la tabla la cual desamos optener su valor
 * @param type $id Identificador el cual pasamos para obtener el valor del $campo
 * @return boolean Regresa el valor que tiene el $campo o falso si no hay ningun valor
 * @package _opciones
 */
function _opciones_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM _opciones WHERE id = $id   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);

    if ($reg[$campo]) {
        return $reg[$campo];
    } else {
        return false;
    }
}
/**
 * Crea las opciones "<option>" de un <select> de la tabla _opciones
 * @global type $conexion
 * @param type $campo Nombre del campo del cual se desea hacer el <select>
 * @param type $label
 * @param type $selecionado Valor eleccionado por defecto
 * @param type $excluir Valor a excluir
 * @package _opciones
 * @todo Poner en array() los $seleccionados y $excluir
 * 
 */
function _opciones_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _opciones order by $campo   ", $conexion)
            or error(__DIR__, __FILE__, __LINE__);
    while ($_opciones = mysql_fetch_array($sql)) {
        //include "../gestion/_opciones/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $_opciones[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_opciones[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$_opciones[$campo]\">$_opciones[$campo]</option> \n";
    }
}
/**
 * 
 * @global type $conexion
 * @param type $selecionado
 * @param type $excluir
 */
function _opciones_add($selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM _opciones  ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    while ($_opciones = mysql_fetch_array($sql)) {

        include "../gestion/_opciones/reg/reg.php";

        echo "<option ";
        if ($selecionado == $_opciones[0]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_opciones[0]) {
            echo " disabled ";
        } else {
            echo "";
        }
        //echo "value=\"$_opciones[0]\">$_opciones[0]</option>";
        echo "value=\"$_opciones[0]\">$_opciones__opciones</option>";
    }
}
/**
 * 
 * @global type $conexion
 * @return boolean
 */
function _opciones_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM _opciones   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}
/**
 * 
 * @global type $conexion
 * @return type
 */
function _opciones_campos_disponibles() {
    global $conexion;
    $data = array();
    $sql = mysql_query("SHOW COLUMNS FROM _opciones  ", $conexion) or error(__DIR__, __FILE__, __LINE__);

    while ($reg = mysql_fetch_array($sql)) {
        $data[$reg[0]] = $reg[0];
    }

    return $data;
}

/**
 * Saca en un array los campos de
 * @global type $conexion
 * @return type
 */
function _opciones_campos_a_mostrar() {
    global $conexion;
    $data = array();
    $sql = mysql_query("SELECT valor FROM _opciones WHERE opcion = '_opciones_thead' ", $conexion) or error(__DIR__, __FILE__, __LINE__);

    $reg = mysql_fetch_array($sql);

    return json_decode($reg[0], true);
}
function _opciones_campos_a_mostrar_segun_tabla($tabla) {
    global $conexion;
        
    $valor = $tabla . "_thead";
    
    $data = array();
    $sql = mysql_query("SELECT valor FROM _opciones WHERE opcion = '$valor' ", $conexion) or error(__DIR__, __FILE__, __LINE__);

    $reg = mysql_fetch_array($sql);

    return json_decode($reg[0], true);
}
/**
 * 
 * @param type $ganchos
 */
function _opciones_thead($tabla, $ganchos = array()) {
    echo "
     <thead>
        <tr> ";
    echo "<th>" . _tr("#") . "</th> "; // numero de linea

    foreach (_opciones_campos_a_mostrar_segun_tabla($tabla) as $key => $value) {
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
function _opciones_tfoot($tabla) {
    _opciones_thead($tabla);
}
/**
 * Regresa el valor que tiene una opcion 
 * @global type $conexion
 * @param type $opcion La opcion de la cual deseamos tener su valor
 * @return boolean Regresa la opcion, o false en caso de no haber un valor
 * @package _opciones
 */
function _opciones_valor_segun_opcion($opcion) {
    global $conexion;

    $sql = mysql_query(
            "SELECT valor FROM _opciones WHERE opcion = '$opcion'   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}
/**
 * Nos entreta en un array el nombre de todos los campos de una tabla
 * @global type $conexion
 * @param type $tabla Nombre de la tabla que desamos tener la lista de campos
 * @return type Regresa un array() 
 * @package opciones
 */
function _opciones_campos_disponibles_segun_tabla($tabla) {
    global $conexion;
    $data = array();
    $sql = mysql_query("SHOW COLUMNS FROM $tabla  ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    
    while ($reg = mysql_fetch_array($sql)) {
        $data[$reg[0]] = $reg[0];
    }
    return $data;
}
/**
 * Saca el valor <b>si</b> o <b>no</b> de un campo del json que esta en la tabla _opciones
 * @param type $tabla Nombre de la tabla
 * @param type $tabla_campo El nombre del campo a verificar si se muestra o no 
 * @return string Regresa 'si' o 'no' como valores posibles

 * @example ../docs_ejemplos/_opciones_valor_json_segun_tabla_campo.html description
 * @link ../docs_ejemplos/_opciones_valor_json_segun_tabla_campo.txt description description
 * @ex
 */
function _opciones_valor_json_segun_tabla_campo($tabla, $tabla_campo) {

    /**
     * Se recoje los campos de la $tabla en un array 
     * que estan disponibles para ser vistos y se saca el valor [si o no]
     * y se manda
     */
    $campo_mostrar = _opciones_campos_a_mostrar_segun_tabla($tabla);
    
    
    if(isset($campo_mostrar[$tabla_campo])){
        return $campo_mostrar[$tabla_campo];
    }else{
        return "no" ;
    }
    
}

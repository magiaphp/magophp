<?php

/**
  magia_version: 0.0.8
 * */
function _menu_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM _menu WHERE id = $id   ", $conexion) or die("Error: _menu_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);



    if ($reg[$campo]) {
        return $reg[$campo];
    } else {
        return false;
    }
}

function _menu_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion)
            or die("Error:" . mysql_error());
    while ($_menu = mysql_fetch_array($sql)) {
        //include "../gestion/_menu/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $_menu[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_menu[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$_menu[$campo]\">$_menu[$campo]</option> \n";
    }
}

function _menu_add($selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM _menu  ", $conexion) or die("Error:" . mysql_error());
    while ($_menu = mysql_fetch_array($sql)) {

        include "../gestion/_menu/reg/reg.php";

        echo "<option ";
        if ($selecionado == $_menu[0]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_menu[0]) {
            echo " disabled ";
        } else {
            echo "";
        }
        //echo "value=\"$_menu[0]\">$_menu[0]</option>";
        echo "value=\"$_menu[0]\">$_menu__menu</option>";
    }
}

function _menu_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM _menu   ", $conexion) or die("Error: _menu_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}

function _menu_campos_disponibles() {
    global $conexion;
    $data = array();
    $sql = mysql_query("SHOW COLUMNS FROM _menu  ", $conexion) or error(__DIR__, __FILE__, __LINE__);

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
function _menu_campos_a_mostrar() {
    global $conexion;
    $data = array();
    $sql = mysql_query("SELECT valor FROM _opciones WHERE opcion = '_menu_thead' ", $conexion) or error(__DIR__, __FILE__, __LINE__);

    $reg = mysql_fetch_array($sql);

    return json_decode($reg[0], true);
    
    
    
    
    
    
}

function _menu_thead($ganchos = array()) {

    $campo_disponibles = _menu_campos_disponibles();
    $_menu_campos_a_mostrar = _menu_campos_a_mostrar();
    echo "
     <thead>
        <tr> ";
    echo "<th>" . _tr("#") . "</th> "; // numero de linea
    foreach ($campo_disponibles as $disponible) {
        
        
        
        
        if (in_array($disponible, $_menu_campos_a_mostrar)) {
            echo "<th>" . _tr($disponible) . "</th> ";
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
function _menu_tfoot() {
    _menu_thead();
}

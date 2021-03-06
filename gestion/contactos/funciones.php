<?php

/**
 * 
 * @global type $conexion
 * @param type $campo
 * @param type $id
 * @return boolean
 */
function contactos_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM contactos WHERE id = '$id'   ", $conexion) or die("Error: contactos_campo()" . mysql_error());
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
 */
function contactos_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion)
            or die("Error:" . mysql_error());
    while ($contactos = mysql_fetch_array($sql)) {
        //include "../gestion/contactos/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $contactos[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $contactos[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$contactos[$campo]\">$contactos[$campo]</option> \n";
    }
}
/**
 * 
 * @global type $conexion
 * @global type $_usuarios_usuario
 * @global type $_usuarios_grupo
 * @param type $selecionado
 * @param type $excluir
 */
function contactos_add($selecionado = "", $excluir = "") {
    global $conexion, $_usuarios_usuario, $_usuarios_grupo;

    if (permisos_tiene_permiso('ver', "contactos_ajenos", $_usuarios_grupo)) {
        $comando = "SELECT * FROM contactos ORDER BY estatus DESC, empresa";
    } else {
        $comando = "SELECT * FROM contactos WHERE id ='" . contactos_campo_segun_email('id', $_usuarios_usuario) . "' ORDER BY estatus DESC, empresa";
    }

    $sql = mysql_query($comando, $conexion);

    while ($contactos = mysql_fetch_array($sql)) {

        include "../gestion/contactos/reg/reg.php";

        echo "<option ";
        if ($selecionado == $contactos['id']) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $contactos[0] || $contactos['estatus'] == 0) {
            echo " disabled ";
        } else {
            echo "";
        }

        //echo "value=\"$contactos[0]\">$contactos[0]</option>";
        echo "value=\"$contactos[id]\">" . strtoupper($contactos['empresa']) . " - $contactos[contacto] ($contactos[email])</option>";
    }
}
/**
 * 
 * @global type $conexion
 * @param type $selecionado
 * @param type $excluir
 */
function contactos_sin_usuario_add($selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM contactos  ", $conexion) or die("Error:" . mysql_error());
    while ($contactos = mysql_fetch_array($sql)) {
        include "../gestion/contactos/reg/reg.php";

        if (!contactos_tiene_login($contactos['email']) && $contactos['email']) {
            echo "<option value=\"$contactos[email]\">$contactos[empresa] - $contactos[contacto] - $contactos[email]</option>";
        } // fi tiene login 
    }
}
/**
 * 
 * @global type $conexion
 * @return boolean
 */
function contactos_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM contactos   ", $conexion) or die("Error: contactos_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}

/**
 * Verifica si el $email del contacto esta presente en la tabla de _usuarios; si es asi me entrega su id
 * sino me entrega falso
 * @global type $conexion
 * @param type $campo
 * @param type $id 
 * @return boolean
 */
function contactos_tiene_login($email) {
    global $conexion;
    $sql = mysql_query(
            "SELECT id FROM _usuarios WHERE usuario = '$email'   ", $conexion)
            or die("Error: contactos_tiene_login()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}
/**
 * Regresa el valor del $campo del contacto con el $email dado
 * @global type $conexion
 * @param type $campo Valor que deseamos conocer 
 * @param type $email Email del contacto 
 * @return boolean Valor del $campo o false si no halla
 */
function contactos_campo_segun_email($campo, $email) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM contactos WHERE email = '$email'   ", $conexion)
            or die("Error: contactos_campo_segun_email()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[$campo]) {
        return $reg[$campo];
    } else {
        return false;
    }
}
/**
 * 
 * @param type $orden
 */
function contactos_tabla_index_titulo($orden) {

    $columnas_disponibles = array(
        "ciudad",
        "email",
        "idioma",
        "grupo",
        "acción"
    );

    if (strtoupper($orden) == "ASC") {
        $ad = "DESC";
        $icono = '<span class="glyphicon glyphicon-triangle-bottom"><span>';
    } else {
        $ad = "ASC";
        $icono = '<span class="glyphicon glyphicon-triangle-top"><span>';
    }

    echo "      
                <th><a href=\"index.php?p=contactos&c=index&ordenpor=empresa&orden=$ad\">" . _tr("Empresa") . "</a> $icono</th> 
                <th><a href=\"index.php?p=contactos&c=index&ordenpor=contacto&orden=$ad\">" . _tr("Contacto") . "</a> $icono</th>";

    // echo "<th><span class=\"glyphicon glyphicon-" . _menu_icono_segun_pagina('pedidos') . " \"></span></th>";

    foreach ($columnas_disponibles as $value) {

        echo '<th> ' . _tr(ucfirst($value)) . '</th> ';
    }
}
/**
 * Total de contactos segun el estatus que e pasa como parametro 
 * @global type $conexion
 * @param type $estatus Parametro del estatus 
 * @return boolean Da un numero superior a 0 o false
 */
function contactos_total_segun_estatus($estatus) {
    global $conexion;
    $sql = mysql_query(
            "SELECT COUNT(id) FROM contactos WHERE estatus = '$estatus'   ", $conexion) or die("Error: contactos_total_segun_estatus()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}

/**
 * Entrega el idioma del usuario, si no tiene entrega el idioma por defecto del sistema
 * @global type $config_idioma
 * @param type $email Email del contacto del cual queremos saber el idioma registrado
 * @return type Regresa el codigo del idioma de este contacto
 */
function contactos_idioma($email) {
    global $config_idioma;
    return (contactos_campo_segun_email('idioma', $email)) ? contactos_campo_segun_email('idioma', $email) : $config_idioma;
}

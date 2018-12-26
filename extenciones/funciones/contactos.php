<<<<<<< HEAD
<?php

/**
  magia_version: 0.0.8
 * */
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

function contactos_add($selecionado = "", $excluir = "") {
    global $conexion, $_usuarios_usuario, $_usuarios_grupo;

    /*// grupo segun usuario 
    // si ese grupo puede crear pedidos_otros 
    if (permisos_tiene_permiso('crear', 'pedidos_otros', $_usuarios_grupo)) {
        $sql = mysql_query("SELECT * FROM contactos ORDER BY estatus DESC, empresa ", $conexion);
    } else {
        $sql = mysql_query("SELECT * FROM contactos WHERE email = '$_usuarios_usuario' ", $conexion);
    }
    // sino 
*/
    
    
    if(permisos_tiene_permiso('ver', "contactos_ajenos", $_usuarios_grupo)){
        $comando = "SELECT * FROM contactos ORDER BY estatus DESC, empresa"; 
    }else{
        $comando = "SELECT * FROM contactos WHERE id ='". contactos_campo_segun_email('id', $_usuarios_usuario)."' ORDER BY estatus DESC, empresa"; 
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
 * Verifica si el email del contacto esta presente en la tabla de _usuarios; si es asi me entrega su id
 * @global type $conexion
 * @param type $email Email a verificar
 * @return boolean Entrega su id si lo halla, o falso si no lo halla
 * @package contactos
 * @example echo contactos_tiene_login('robincoello@hotmail.com')
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
 * Me entrega el valor que tiene el <b>$campo</b> deacuerdo al <b>$email</b> entregado
 * @global type $conexion
 * @param type $campo Cualquier campo de la tabla <i>contactos</i>
 * @param type $email Email del contacto que deseo buscar la informacion
 * @return boolean Entrega el <i>valor</i> del $campo 
 * @package contactos
 * @example <p>Esto me entregaria la nota que puse del contacto que tenga el $email</p>
 * <pre>contactos_campo_segun_email("notas", $email)</pre>
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
 * @global type $conexion
 * @return boolean
 */
function contactos_idioma($email) {
    global $config_idioma;
    return (contactos_campo_segun_email('idioma', $email)) ? contactos_campo_segun_email('idioma', $email) : $config_idioma;
}
=======
>>>>>>> des

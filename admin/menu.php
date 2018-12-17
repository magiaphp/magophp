<?php
/**
 * Crea un menu conlos items de ubicacion 'top'
 * @global type $conexion
 */
function _menu_top() {
    global $conexion;
    $sql = mysql_query(
            "SELECT distinct(padre) FROM _menu WHERE ubicacion = 'top'  ", $conexion) or die("Error:" . mysql_error());

    while ($reg = mysql_fetch_array($sql)) {                
        
        echo '<li class="dropdown">
          <a href="#" 
          class="dropdown-toggle" 
          data-toggle="dropdown" 
          role="button" 
          aria-haspopup="true" 
          aria-expanded="false">
          ' . _tr(ucfirst($reg['padre'])) . ' 
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            ';

        _menu_items_segun_padre_ubicacion($reg['padre'], 'top');

        echo '<!--<li role="separator" class="divider"></li>            
            
            
            <li><a href="#"></a></li>-->
          </ul>
        </li>';
    }
}

/**
 * Regresa los items segun su padre
 * @global type $conexion
 * @param type $padre
 * @param type $ubicacion
 */
function _menu_items_segun_padre_ubicacion($padre, $ubicacion) {
    global $conexion, $_usuarios_grupo;
    $sql = mysql_query(
            "SELECT * FROM _menu WHERE padre = '$padre' AND ubicacion = '$ubicacion'  ORDER BY orden  ", $conexion) or die("Error:" . mysql_error());

    while ($reg = mysql_fetch_array($sql)) {
        $icono = (!$reg['icono']) ? "folder-close" : "$reg[icono]";

        if(permisos_tiene_permiso('ver', $reg['label'],$_usuarios_grupo )){
        echo '
            <li><a href="' . $reg['url'] . '"> <span class="glyphicon glyphicon-' . $icono . '" aria-hidden="true"></span> ' . _tr(ucfirst($reg['label'])) . '</a></li>
          
        ';
        }
    }
}

/**
 * Crea el menu lateral 'segun ubicacion 'sidebar'
 * @global type $conexion
 * @param type $p
 */
function _menu_sidebar($p) {
    global $conexion;
    $sql = mysql_query(
            "SELECT distinct(padre), label, url, icono, orden  FROM _menu WHERE ubicacion = 'sidebar' ORDER BY orden ", $conexion) or die("Error:" . mysql_error());

    while ($reg = mysql_fetch_array($sql)) {

        $icono = (!$reg['icono']) ? "folder-close" : "$reg[icono]";


        echo '<li';
        if ($p == $reg['label']) {
            echo " class=\"active\" ";
        }
        echo '>
                    <a href="' . $reg['url'] . '">
                        <span class="glyphicon glyphicon-' . $icono . '"></span> 
                ' . _tr(ucfirst($reg['label'])) . '
                    </a>
                </li>';
    }
}

/**
 * Regresa el icono del menu segun el label 
 * @global type $conexion
 * @param type $label
 * @return type
 */
function _menu_icono_segun_pagina($label) {
    global $conexion;
    $sql = mysql_query(
            "SELECT icono  FROM _menu WHERE label = '$label'  ", $conexion) or die("Error:" . mysql_error());

    $reg = mysql_fetch_array($sql);

    return $reg[0];
}

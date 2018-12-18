<?php
/**
 * Obtiene 4 digitos del permiso que el grupo $g tiene en la pagina $g
 * @global type $conexion
 * @param type $p  Pagina 
 * @param type $g Grupo
 * @return type Regresa ek permiso que tiene este grupo $g en esta pagina $p 0000 - 1111
 */
function permisos_obtiene_permiso($p, $g) {
    global $conexion;
    $sql = mysql_query(
            "SELECT permiso  FROM _permisos WHERE grupo = '$g' and pagina = '$p'  ", $conexion);
    $reg = mysql_fetch_array($sql);
    return $reg[0];
}
/**
 * Regresa el true, false segun tiene o no tiene permiso para realizar esa accion 
 * @global type $r1 [Globales]
 * @global type $r2
 * @param string $accion [ver[buscar], crear, editar, borrar]
 * @param type $pagina Pagina donde nos encontramos
 * @param type $grupo Grupo del cual queremos obtener el permiso
 * @return boolean [true, false] segun si tiene o no permiso para realizar esta accion 
 */
function permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo) {
    global $r1, $r2;
    if ($accion == 'buscar') {
        $accion = 'ver';
    }
    $p = permisos_obtiene_permiso($pagina, $_usuarios_grupo);
    $ver = $p[0];
    $crear = $p[1];
    $editar = $p[2];
    $borrar = $p[3];

    switch ($accion) {
        case "ver":
            //return ($ver == 1)? true:false; 
            return ($ver) ? true : false;
            break;

        case "crear":
            return ($crear) ? true : false;
            break;

        case "editar":
            return ($editar) ? true : false;
            break;

        case "borrar":
            return ($borrar) ? true : false;
            break;

        default: // por defecto enviamos falso
            return false;
            break;
    }
}
/**
 * Muestra una caja si este grupo no tiene permiso para realizar esta accion  
 * @param type $accion Accion deseada
 * @param type $pagina Donde se desea realizar esta $accion
 * @param type $u_login El login del usuario que desea realizar esta acción
 */
function permisos_sin_permiso($accion, $pagina, $u_login) {

echo '<div class="list-group">
  <a href="#" class="list-group-item disabled">
    ' . _tr('Detalles') . '
  </a>
  <a href="#" class="list-group-item">' . _tr('Usuario') . ': ' . $u_login . '</a>
  <a href="#" class="list-group-item">' . _tr('Página') . ': ' . $pagina . '</a>
  <a href="#" class="list-group-item">' . _tr('Acción') . ': ' . $accion . '</a>
</div>';
}

/**
 * 
 * @param type $pagina
 * @param type $accion
 */
function permisos_plugin_controlador($pagina, $accion){
    
    
    echo "<h2>Pagina: $pagina, Accion: $accion</h2>"; 
    echo "<table border width=500>"; 
    echo "<theader>"; 
        echo "<tr>"; 
            echo "<th>Grupo</th>"; 
            echo "<th>Ver</th>"; 
            echo "<th>Crear</th>"; 
            echo "<th>Editar</th>"; 
            echo "<th>Borrar</th>"; 
        echo "</tr>"; 
        
        foreach (_grupos_array() as $key => $grupo) {            
            $v = (permisos_tiene_permiso("ver", $pagina, $grupo))?"Si":"-"; 
            $c = (permisos_tiene_permiso("crear", $pagina, $grupo))?"SI":"-"; 
            $e = (permisos_tiene_permiso("editar", $pagina, $grupo))?"SI":"-"; 
            $b = (permisos_tiene_permiso("borrar", $pagina, $grupo))?"SI":"-"; 
            echo "<tr><td>$grupo</td> <td>$v</td> <td>$c</td> <td>$e</td> <td>$b</td> </tr>"; 
        }
        
        

        
        
    echo "</theader>"; 
    echo "</table>"; 
    
}
<?php
if (_usuarios_campo_segun_email("estatus", $contactos_email)) {
    $t_usuarios_estatus_icono = '<span style="color:blue"><span class="glyphicon glyphicon-ok-circle"></span>';
} else {
    $t_usuarios_estatus_icono = '<span style="color:red"><span class="glyphicon glyphicon-ban-circle"></span>';
}



if (contactos_tiene_login($contactos_email)) {
    // $contactos_tiene_login = '<span style="color:blue"><span class="glyphicon glyphicon-ok-circle"></span>';
    $contactos_tiene_login = _tr("Si");
} else {
    //$contactos_tiene_login = '<span style="color:red"><span class="glyphicon glyphicon-ban-circle"></span>';
    $contactos_tiene_login = (permisos_tiene_permiso('crear', $p, $_usuarios_grupo)) ?
            "<a href=\"index.php?p=_usuarios&c=crear\">" . _tr('No, crear uno.') . "</a>" : "No";
}

$candado = (!$contactos_estatus) ? '<span class="glyphicon glyphicon-ban-circle"></span>' : '';


switch ($contactos_estatus) {
    case 0:
        $candado = '<span class="glyphicon glyphicon-ban-circle"></span>';
        break;
    case 1:
        $candado = '';
        break;
    case -1:
        $candado = '<span class="glyphicon glyphicon-trash"></span>';
        break;

    default:
        break;
}





echo ' 
<tr><td>'.$i.'</td>';

foreach (_opciones_campos_a_mostrar_segun_tabla("contactos") as $key => $value) {
    if ($value == 'si') {
        echo "<td>$contactos[$key]</td> ";
    }
}

//echo '<td><img src="../imagenes/usuario.jpg">' . $candado . ' ' . $contactos_empresa . '</td>'; 

 //echo '<td>' . pedidos_segun_email($contactos_email) . '</td> '; 
 
 echo '
 <td>' . ucfirst(_usuarios_campo_segun_email("grupo", $contactos_email)) . '</td> 
 <td>
    <a href=' . $_SERVER['PHP_SELF'] . '?p=contactos&c=ver&contactos_id=' . $contactos_id . '>'._tr('Ver').'</a> |  
    <a href=' . $_SERVER['PHP_SELF'] . '?p=contactos&c=editar&contactos_id=' . $contactos_id . '>'._tr('Editar').'</a>                        
</td>     

 </tr>';
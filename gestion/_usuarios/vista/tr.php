<?php

/**
  magia_version: 0.0.8
 * */
if ($t_usuarios_estatus) {
    $t_usuarios_estatus_icono = '<span style="color:blue"><span class="glyphicon glyphicon-ok-circle"></span>';
} else {
    $t_usuarios_estatus_icono = '<span style="color:red"><span class="glyphicon glyphicon-ban-circle"></span>';
}



echo ' <tr>
    <td>' . $i . '</td> 
 

 <td>' . contactos_campo_segun_email('empresa', $t_usuarios_usuario) . '</td> 
 <td>' . contactos_campo_segun_email('contacto', $t_usuarios_usuario) . '</td> 
 
 <td>' . $t_usuarios_usuario . '</td> 
<td>' . $t_usuarios_grupo . '</td>  
 <td>' . $t_usuarios_estatus_icono . '</span></td> 
 <td>
<a href=' . $_SERVER['PHP_SELF'] . '?p=_usuarios&c=ver&t_usuarios_id=' . $t_usuarios_id . '>' . _tr("Ver") . '</a> |  
<a href=' . $_SERVER['PHP_SELF'] . '?p=_usuarios&c=editar&t_usuarios_id=' . $t_usuarios_id . '>' . _tr("Editar") . '</a>  
                      
                </td></tr>';

<?php

/**
  magia_version: 0.0.8
 * */
echo ' <tr>
    <td>' . $i . '</td>';

foreach (_opciones_campos_a_mostrar_segun_tabla("_menu") as $key => $value) {
    if ($value == 'si') {
        echo "<td>$_menu[$key]</td> ";
    }
}

echo '
 <td><span class="glyphicon glyphicon-' . $_menu_icono . '" aria-hidden="true"></span> </td> 
 
 <td>
<a href=' . $_SERVER['PHP_SELF'] . '?p=_menu&c=ver&_menu_id=' . $_menu_id . '>Ver</a> |  
<a href=' . $_SERVER['PHP_SELF'] . '?p=_menu&c=editar&_menu_id=' . $_menu_id . '>Editar</a>  
                      
                </td></tr>';

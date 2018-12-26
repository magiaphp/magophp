<?php

echo '<td>' . $i . '</td> ';

foreach (_opciones_campos_a_mostrar_segun_tabla("_opciones") as $key => $value) {
    if ($value == 'si') {
        echo "<td>$_opciones[$key]</td> ";
    }
}

echo '<td>
<a href=' . $_SERVER['PHP_SELF'] . '?p=_opciones&c=ver&_opciones_id=' . $_opciones_id . '>' . _tr("Ver") . '</a> |  
<a href=' . $_SERVER['PHP_SELF'] . '?p=_opciones&c=editar&_opciones_id=' . $_opciones_id . '>' . _tr("Editar") . '</a>  
                      
                </td>';

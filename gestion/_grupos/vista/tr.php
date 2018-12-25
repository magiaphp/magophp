<?php

/**
  magia_version: 0.0.8
 * */
echo ' <tr>
 <td>' . $i . '</td> ';
 
foreach (_opciones_campos_a_mostrar_segun_tabla("_grupos") as $key => $value) {
    if ($value == 'si') {
        echo "<td>$_grupos[$key]</td> ";
    }
}
// Lo que se quiera agregar solo sepone la final 
echo ' <td>' . _usuarios_total_segun_grupo($_grupos_grupo) . '</td> ';


echo '<td>
<a href=' . $_SERVER['PHP_SELF'] . '?p=_grupos&c=ver&_grupos_id=' . $_grupos_id . '>Ver</a> |  
<a href=' . $_SERVER['PHP_SELF'] . '?p=_grupos&c=editar&_grupos_id=' . $_grupos_id . '>Editar</a>  
                      
                </td></tr>';

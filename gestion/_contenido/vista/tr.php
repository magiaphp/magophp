

<?php

echo ' <tr>
    <td>' . $i . '</td>';


foreach (_opciones_campos_a_mostrar_segun_tabla("_contenido") as $key => $value) {
    if ($value == 'si') {
        echo "<td>$_contenido[$key]</td> ";
    }
}


 
echo ' <td>
<a href=' . $_SERVER['PHP_SELF'] . '?p=_contenido&c=ver&_contenido_id=' . $_contenido_id . '>Ver</a> |  
<a href=' . $_SERVER['PHP_SELF'] . '?p=_contenido&c=editar&_contenido_id=' . $_contenido_id . '>Editar</a>  
                      
                </td></tr>';

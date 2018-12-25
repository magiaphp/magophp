<?php 
 /**  
 magia_version: 0.0.11 
 **/
   
 echo '<td>' . $i . '</td> ';
foreach (_opciones_campos_a_mostrar_segun_tabla("_actualizaciones") as $key => $value) {
    if ($value == 'si') {
        echo "<td>$_actualizaciones[$key]</td> ";
    }
}
echo '<td>
<a href='.$_SERVER['PHP_SELF'].'?p=_actualizaciones&c=ver&_actualizaciones_id='.$_actualizaciones_id.'>'._tr("Ver").'</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=_actualizaciones&c=editar&_actualizaciones_id='.$_actualizaciones_id.'>'._tr("Editar").'</a>  
                      
                </td>';  
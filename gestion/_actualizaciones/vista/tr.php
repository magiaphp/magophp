<?php 
 /**  
 magia_version: 0.0.11 
 **/
   
 echo '<td>' . $i . '</td> ';  
 foreach ($campo_disponibles as $campo) {
                            if (in_array($campo, _actualizaciones_campos_a_mostrar())) {
                                echo "<td>$_actualizaciones[$campo]</td> ";
                            }
                        }  
 echo '<td>
<a href='.$_SERVER['PHP_SELF'].'?p=_actualizaciones&c=ver&_actualizaciones_id='.$_actualizaciones_id.'>'._tr("Ver").'</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=_actualizaciones&c=editar&_actualizaciones_id='.$_actualizaciones_id.'>'._tr("Editar").'</a>  
                      
                </td>';  
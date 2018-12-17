<?php 
 /**  
 magia_version: 0.0.8 
 **/
   
 echo '<td>' . $i . '</td> ';  
 foreach ($campo_disponibles as $campo) {
                            if (in_array($campo, actualizaciones_campos_a_mostrar())) {
                                echo "<td>$actualizaciones[$campo]</td> ";
                            }
                        }  
 echo '<td>
<a href='.$_SERVER['PHP_SELF'].'?p=actualizaciones&c=ver&actualizaciones_id='.$actualizaciones_id.'>'._tr("Ver").'</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=actualizaciones&c=editar&actualizaciones_id='.$actualizaciones_id.'>'._tr("Editar").'</a>  
                      
                </td>';  
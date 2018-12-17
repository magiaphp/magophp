<?php 
 /**  
 magia_version: 0.0.8 
 **/
   
 echo '<td>' . $i . '</td> ';  
 foreach ($campo_disponibles as $campo) {
                            if (in_array($campo, cambio_claves_campos_a_mostrar())) {
                                echo "<td>$cambio_claves[$campo]</td> ";
                            }
                        }  
 echo '<td>
<a href='.$_SERVER['PHP_SELF'].'?p=cambio_claves&c=ver&cambio_claves_id='.$cambio_claves_id.'>'._tr("Ver").'</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=cambio_claves&c=editar&cambio_claves_id='.$cambio_claves_id.'>'._tr("Editar").'</a>  
                      
                </td>';  
<?php 
 /**  
 magia_version: 0.0.8 
 **/
   
    echo ' <tr>
    <td>'.$i.'</td> 
 <td>'.$_grupos_grupo.'</td> 
 <td>'._usuarios_total_segun_grupo($_grupos_grupo).'</td> 
 <td>
<a href='.$_SERVER['PHP_SELF'].'?p=_grupos&c=ver&_grupos_id='.$_grupos_id.'>Ver</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=_grupos&c=editar&_grupos_id='.$_grupos_id.'>Editar</a>  
                      
                </td></tr>';  
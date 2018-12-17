

<?php 

   
    echo ' <tr>
    <td>'.$i.'</td> 
 <td>'.$_contenido_id.'</td> 
 <td>'.$_contenido_frase.'</td> 
 <td>'.$_contenido_contexto.'</td> 
 
 <td>
<a href='.$_SERVER['PHP_SELF'].'?p=_contenido&c=ver&_contenido_id='.$_contenido_id.'>Ver</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=_contenido&c=editar&_contenido_id='.$_contenido_id.'>Editar</a>  
                      
                </td></tr>';  
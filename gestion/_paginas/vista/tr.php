<?php

$ventana = '
<button type="button" class="btn btn-defaut btn-xs" data-toggle="modal" data-target="#myModal">
  ?
</button>';




echo ' <tr>
    <td>' . $i . '</td> 
 <td>' . $_paginas_pagina . '</td> ';


foreach (_grupos_array() as $key => $grupo) {
    echo '<td> '. permisos_obtiene_permiso($_paginas_pagina, $grupo).'</td>';
}


echo'<td>
<a href=' . $_SERVER['PHP_SELF'] . '?p=_paginas&c=ver&_paginas_id=' . $_paginas_id . '>Ver</a> |  
<a href=' . $_SERVER['PHP_SELF'] . '?p=_paginas&c=editar&_paginas_id=' . $_paginas_id . '>Editar</a>  
                      
                </td></tr>';
?>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <?php 
        echo "\$_paginas_pagina: "; 
        echo "$_paginas_pagina <br>"; 
        echo "\$grupo "; 
        echo "$grupo"; 
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
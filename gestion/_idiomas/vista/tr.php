<?php

/**
  magia_version: 0.0.8
 * */
$total_traducido = number_format((_traducciones_total_segun_idioma($_idiomas_idioma) * 100) / _traducciones_total_segun_idioma('es_ES'), 0);
$total_traducido_p = number_format((_traducciones_total_segun_idioma($_idiomas_idioma) * 100) / _traducciones_total_segun_idioma('es_ES'), 2);

$porcentaje = '<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: ' . $total_traducido . '%;">
    ' . $total_traducido_p . '%
  </div>
</div>';

$_idiomas_activo = ($_idiomas_activo) ?
        '<span class="glyphicon glyphicon-ok"></span> <a href="?p=_idiomas&c=activar&a=activar&_idiomas_idioma=' . $_idiomas_idioma . '&_idiomas_activo=0">' . _tr("Desactivar") . '</a>' :
        '<span class="glyphicon glyphicon-remove"></span> <a href="?p=_idiomas&c=activar&a=activaar&_idiomas_idioma=' . $_idiomas_idioma . '&_idiomas_activo=1">' . _tr("Activar") . '</a>'
;


echo ' <tr>
    <td>' . $i . '</td> 
 <td>' . $_idiomas_idioma . '</td> 
 <td>' . $_idiomas_nombre . '</td> 
 <td>' . $_idiomas_orden . '</td> 
 <td>' . number_format(_traducciones_total_segun_idioma($_idiomas_idioma), 0) . '</td> 
 <td>' . $porcentaje . '</td> 
 <td>' . $_idiomas_activo . '</td> 
 <td>
<a href=' . $_SERVER['PHP_SELF'] . '?p=_idiomas&c=ver&_idiomas_id=' . $_idiomas_id . '>Ver</a> |  
<a href=' . $_SERVER['PHP_SELF'] . '?p=_idiomas&c=editar&_idiomas_id=' . $_idiomas_id . '>Editar</a>  
                      
                </td></tr>';

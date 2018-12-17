<?php
$idiomas_disponibles = _idiomas();

$f = "";
foreach ($idiomas_disponibles as $idioma) {
    $f .= '<form class="form-inline" action="index.php" method="post"> 
        <input type="hidden" name="p" value="_traducciones">
        <input type="hidden" name="c" value="crear">
        <input type="hidden" name="a" value="crear">
        <input type="hidden" name="_traducciones_frase" value="'.$_contenido_frase.'">
        <input type="hidden" name="_traducciones_idioma" value="'.$idioma.'">
        
  <div class="form-group">
    <label class="sr-only" for="">'.$idioma.'</label>
    <input type="text" class="form-control" id="" name="_traducciones_traduccion" placeholder="'.$_contenido_frase.'" value="'. _traducciones_segun_idioma_frase($idioma,$_contenido_frase).'">
  </div>            
  <button type="submit" class="btn btn-default">'.$idioma.'</button>
</form>';
}



?>




<?php 
 /**  
 magia_version: 0.0.8 
 **/
   
    echo ' <tr>
    
 <td>'.$_contenido_id.'</td> 
 <td>'.$_contenido_frase.'</td> 
 <td>'.$_contenido_contexto.'</td> 
 <td>'.$f.'</td> 
 <td>
<a href='.$_SERVER['PHP_SELF'].'?p=_contenido&c=ver&_contenido_id='.$_contenido_id.'>Ver</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=_contenido&c=editar&_contenido_id='.$_contenido_id.'>Editar</a>  
                      
                </td></tr>';  
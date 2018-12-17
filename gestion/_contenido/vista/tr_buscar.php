<?php /**
  magia_version: 0.0.8
 * */ ?>
<form method="get" action="index.php" >
    <input type="hidden" name="p" value="_contenido">
    <input type="hidden" name="c" value="buscar">       
    <tr> 
        <td></td> 
        <td><input class="form-control" type="text" name="_contenido_frase" value="" placeholder="<?php _t("Frase"); ?>"></td> 
        <td><input class="form-control" type="text" name="_contenido_contexto" value="" placeholder="<?php _t("Contexto"); ?>"></td> 
        <td><input class="btn btn-info" type="submit" value="<?php _t("Buscar"); ?>" >

        </td>        
    </tr>
</form> 
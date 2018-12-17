<?php /**
  magia_version: 0.0.8
 * */ ?>
<form method="get" action="index.php" >
    <input type="hidden" name="p" value="_opciones">
    <input type="hidden" name="c" value="buscar">       
    <tr> 
        <td></td> 
        <td></td> 
        <td><input class="form-control" type="text" name="_opciones_opcion" value="" placeholder="<?php _t("Opcion"); ?>"></td> 
        <td><input class="form-control" type="text" name="_opciones_valor" value="" placeholder="<?php _t("Valor"); ?>"></td> 
        <td><input class="form-control" type="text" name="_opciones_grupo" value="" placeholder="<?php _t("Grupo"); ?>"></td> 
        <td><input class="btn btn-info" type="submit" value="<?php _t("Buscar"); ?>" >

        </td>        
    </tr>
</form> 
<?php /**
  magia_version: 0.0.8
 * */ ?>

<form method="post" action="index.php" >
    <input type="hidden" name="p" value="_opciones">
    <input type="hidden" name="c" value="crear">    
    <input type="hidden" name="a" value="crear">    
    <tr> 
        <td></td>
        <td></td>
        <td><input class="form-control" type="text" name="_opciones_opcion" value="" placeholder="New <?php _t("Opcion"); ?>"></td> 
        <td><input class="form-control" type="text" name="_opciones_valor" value="" placeholder="New <?php _t("Valor"); ?>"></td> 
        <td><input class="form-control" type="text" name="_opciones_grupo" value="" placeholder="<?php _t("Grupo"); ?>"></td> 
        <td><input class="btn btn-danger" type="submit" value="<?php _t("Nuevo"); ?>" ></td>        
    </tr>
</form> 
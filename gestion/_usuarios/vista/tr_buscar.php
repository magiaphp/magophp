<?php /**
  magia_version: 0.0.8
 * */ ?>
<form method="get" action="index.php" >
    <input type="hidden" name="p" value="_usuarios">
    <input type="hidden" name="c" value="buscar">       
    <tr> 
        <td></td> 
        <td></td> 
        <td></td> 
        <td><input class="form-control" type="text" name="_usuarios_usuario" value="" placeholder="<?php _t("Usuario"); ?>"></td> 
        <td><input class="form-control" type="text" name="_usuarios_grupo" value="" placeholder="<?php _t("Grupo"); ?>"></td> 
        <?php 
        /*
        <td><input class="form-control" type="text" name="_usuarios_clave" value="" placeholder="<?php _t("Clave"); ?>"></td> 
        <td><input class="form-control" type="text" name="_usuarios_estatus" value="" placeholder="<?php _t("Estatus"); ?>"></td> 
        */
        ?>
        <td><input class="btn btn-info" type="submit" value="<?php _t("Buscar"); ?>" >

        </td>        
    </tr>
</form> 
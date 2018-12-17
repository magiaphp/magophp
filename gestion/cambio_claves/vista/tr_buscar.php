<?php /**
  magia_version: 0.0.8
 * */ ?>
<form method="get" action="index.php" >
    <input type="hidden" name="p" value="cambio_claves">
    <input type="hidden" name="c" value="buscar">       
    <tr> 
        <td></td> 
        <td></td> 
        <td><input class="form-control" type="text" name="cambio_claves_usuario" value="" placeholder="<?php _t("Usuario"); ?>"></td> 
        <td><input class="form-control" type="text" name="cambio_claves_codigo" value="" placeholder="<?php _t("Codigo"); ?>"></td> 
        <td><input class="form-control" type="text" name="cambio_claves_fecha_solicitud" value="" placeholder="<?php _t("Fecha_solicitud"); ?>"></td> 
        <td><input class="form-control" type="text" name="cambio_claves_codigo_usado" value="" placeholder="<?php _t("Codigo_usado"); ?>"></td> 
        <td><input class="btn btn-info" type="submit" value="<?php _t("Buscar"); ?>" >

        </td>        
    </tr>
</form> 
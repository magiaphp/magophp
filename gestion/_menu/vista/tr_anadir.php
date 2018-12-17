<?php /**
  magia_version: 0.0.8
 * */ ?>

<form method="post" action="index.php" >
    <input type="hidden" name="p" value="_menu">
    <input type="hidden" name="c" value="crear">    
    <input type="hidden" name="a" value="crear">    
    <tr> 
        <td></td> 
        <td><input class="form-control" type="text" name="_menu_ubicacion" value="" placeholder="<?php _t("Ubicacion"); ?>"></td> 
        <td><input class="form-control" type="text" name="_menu_padre" value="" placeholder="<?php _t("Padre"); ?>"></td> 
        <td><input class="form-control" type="text" name="_menu_label" value="" placeholder="<?php _t("Label"); ?>"></td> 
        <td><input class="form-control" type="text" name="_menu_url" value="" placeholder="<?php _t("Url"); ?>"></td> 
        <td><input class="form-control" type="text" name="_menu_icono" value="" placeholder="<?php _t("Icono"); ?>"></td> 
        <td><input class="form-control" type="text" name="_menu_orden" value="" placeholder="<?php _t("Orden"); ?>"></td> 
        <td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" ></td>        
    </tr>
</form> 
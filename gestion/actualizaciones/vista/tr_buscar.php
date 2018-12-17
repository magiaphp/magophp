<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<form method="get" action="index.php" >
                <input type="hidden" name="p" value="actualizaciones">
                <input type="hidden" name="c" value="buscar">       
                <tr> <td><input class="form-control" type="text" name="actualizaciones_codigo" value="" placeholder="<?php _t("Codigo"); ?>"></td> 
 <td><input class="form-control" type="text" name="actualizaciones_requiere" value="" placeholder="<?php _t("Requiere"); ?>"></td> 
 <td><input class="form-control" type="text" name="actualizaciones_nombre" value="" placeholder="<?php _t("Nombre"); ?>"></td> 
 <td><input class="form-control" type="text" name="actualizaciones_descripcion" value="" placeholder="<?php _t("Descripcion"); ?>"></td> 
 <td><input class="form-control" type="text" name="actualizaciones_ejecutar" value="" placeholder="<?php _t("Ejecutar"); ?>"></td> 
 <td><input class="form-control" type="text" name="actualizaciones_estatus" value="" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-info" type="submit" value="<?php _t("Buscar"); ?>" >
        
        </td>        
    </tr>
</form> 
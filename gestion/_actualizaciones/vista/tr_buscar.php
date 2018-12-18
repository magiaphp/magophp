<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<form method="get" action="index.php" >
                <input type="hidden" name="p" value="_actualizaciones">
                <input type="hidden" name="c" value="buscar">       
                <tr> <td><input class="form-control" type="text" name="_actualizaciones_version" value="" placeholder="<?php _t("Version"); ?>"></td> 
 <td><input class="form-control" type="text" name="_actualizaciones_requiere" value="" placeholder="<?php _t("Requiere"); ?>"></td> 
 <td><input class="form-control" type="text" name="_actualizaciones_nombre" value="" placeholder="<?php _t("Nombre"); ?>"></td> 
 <td><input class="form-control" type="text" name="_actualizaciones_descripcion" value="" placeholder="<?php _t("Descripcion"); ?>"></td> 
 <td><input class="form-control" type="text" name="_actualizaciones_ejecutar" value="" placeholder="<?php _t("Ejecutar"); ?>"></td> 
 <td><input class="form-control" type="text" name="_actualizaciones_estatus" value="" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-info" type="submit" value="<?php _t("Buscar"); ?>" >
        
        </td>        
    </tr>
</form> 
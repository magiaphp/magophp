<?php /**
  magia_version: 0.0.8
 * */ ?>
<form method="get" action="index.php" >
    <input type="hidden" name="p" value="_grupos">
    <input type="hidden" name="c" value="buscar">       
    <tr> 
        <td></td> 
        <td><input class="form-control" type="text" name="_grupos_grupo" value="" placeholder="<?php _t("Grupo"); ?>"></td> 
        <td><input class="btn btn-info" type="submit" value="<?php _t("Buscar"); ?>" >
            <td></td> 
        </td>        
    </tr>
</form> 
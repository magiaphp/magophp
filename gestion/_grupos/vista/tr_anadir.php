<?php /**
  magia_version: 0.0.8
 * */ ?>

<form method="post" action="index.php" >
    <input type="hidden" name="p" value="_grupos">
    <input type="hidden" name="c" value="crear">    
    <input type="hidden" name="a" value="crear">    
    <tr> 
        <td></td> 
        <td><input class="form-control" type="text" name="_grupos_grupo" value="" placeholder="<?php _t("Grupo"); ?>"></td> 
        <td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" ></td>        
        <td></td> 
    </tr>
</form> 
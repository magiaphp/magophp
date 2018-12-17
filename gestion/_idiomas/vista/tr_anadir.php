<?php /**
  magia_version: 0.0.8
 * */ ?>

<form method="post" action="index.php" >
    <input type="hidden" name="p" value="_idiomas">
    <input type="hidden" name="c" value="crear">    
    <input type="hidden" name="a" value="crear">    
    <tr> 
        <td></td> 
        <td><input class="form-control" type="text" name="_idiomas_idioma" value="" placeholder="<?php _t("Idioma"); ?>"></td> 
        <td><input class="form-control" type="text" name="_idiomas_nombre" value="" placeholder="<?php _t("Nombre"); ?>"></td> 
        <td><input class="form-control" type="text" name="_idiomas_orden" value="" placeholder="<?php _t("Orden"); ?>"></td> 
        <td></td> 
        <td></td> 
        <td></td> 
        <td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" ></td>        
    </tr>
</form> 
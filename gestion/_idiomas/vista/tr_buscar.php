<?php /**
  magia_version: 0.0.8
 * */ ?>
<form method="get" action="index.php" >
    <input type="hidden" name="p" value="_idiomas">
    <input type="hidden" name="c" value="buscar">       
    <tr> 
        <td></td> 
        <td><input class="form-control" type="text" name="_idiomas_idioma" value="" placeholder="<?php _t("Idioma"); ?>"></td> 
        <td><input class="form-control" type="text" name="_idiomas_nombre" value="" placeholder="<?php _t("Nombre"); ?>"></td> 
        <td><input class="form-control" type="text" name="_idiomas_orden" value="" placeholder="<?php _t("Orden"); ?>"></td> 
        <td></td> 
        <td></td> 
        <td></td> 
        <td><input class="btn btn-info" type="submit" value="<?php _t("Buscar"); ?>" >

        </td>        
    </tr>
</form> 
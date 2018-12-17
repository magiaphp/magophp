<form method="get" action="index.php" >
    <input type="hidden" name="p" value="_traducciones">
    <input type="hidden" name="c" value="buscar">       
    <tr> 
        <td><input class="form-control" type="text" name="_traducciones_frase" value="" placeholder="<?php _t("Frase"); ?>"></td> 
        <td>
            <select class="form-control" name="_traducciones_idioma">
                <option value="todas"><?php _t('Todos'); ?></option>
                <?php _idiomas_add(); ?>
            </select>

        </td> 
        <td><input class="form-control" type="text" name="_traducciones_traduccion" value="" placeholder="<?php _t("Traducción"); ?>"></td> 
        <td><input class="btn btn-info" type="submit" value="<?php _t("Buscar"); ?>" >
        </td>        
    </tr>
</form> 
<?php /**
  magia_version: 0.0.8
 * */ ?>

<form method="post" action="index.php" >
    <input type="hidden" name="p" value="_traducciones">
    <input type="hidden" name="c" value="crear">    
    <input type="hidden" name="a" value="crear">    
    <tr> 
        <td>
             <select class="form-control" name="_traducciones_frase"  >                
                <?php _contenido_add(); ?>
            </select>
            
        <td>
            <select class="form-control" name="_traducciones_idioma">
                <option value="todas"><?php _t('Todos'); ?></option>
                <?php _idiomas_add(); ?>
            </select>

        </td>  
        <td><input class="form-control" type="text" name="_traducciones_traduccion" value="" placeholder="<?php _t("Traduccion"); ?>"></td> 
        <td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" ></td>        
    </tr>
</form> 
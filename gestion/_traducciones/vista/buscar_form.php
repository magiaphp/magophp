<?php /**
  magia_version: 0.0.8
 * */ ?>
<h2>

    <span class="glyphicon glyphicon-search"></span>

    <?php _t("Buscar"); ?> 

</h2> 

<form class="" action="index.php" method="get"> 
    <input type="hidden" name="p" value="_traducciones"> 
    <input type="hidden" name="c" value="buscar"> 
    <div class="form-group"> 
        <label for="_traducciones_frase" class="col-sm-2 control-label"><?php _t("Frase"); ?></label> 
        <input type="text" class="form-control" name="_traducciones_frase" id="_traducciones_frase" placeholder="<?php _t("Frase"); ?> "> 
    </div> 


    <div class="form-group"> 
        <label for="_traducciones_idioma" class="col-sm-2 control-label"><?php _t("Idioma"); ?></label> 
        <select class="form-control" name="_traducciones_idioma">
            <option value="todas"><?php _t('Todos'); ?></option>
            <?php _idiomas_add(); ?>
        </select>
    </div> 


    <div class="form-group"> 
        <label for="_traducciones_traduccion" class="col-sm-2 control-label"><?php _t("Traduccion"); ?></label> 
        <input type="text" class="form-control" name="_traducciones_traduccion" id="_traducciones_traduccion" placeholder="<?php _t("Traduccion"); ?> "> 
    </div> 


    <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
</form> 

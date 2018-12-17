<?php /**
  magia_version: 0.0.8
 * */ ?>
<h1> 
    <span class="<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php _t("Detalles"); ?> 
</h1> 
<form class="form-horizontal" method="" action=""> 
    <input type="hidden" name="p" value="_traducciones"> 
    <input type="hidden" name="c" value="editar"> 
    <input type="hidden" name="_traducciones_id" value="<?php echo $_traducciones_id; ?>"> 
    
    
    <div class="form-group"> 
        <label for="_traducciones_id" class="col-sm-2 control-label"><?php _t("Id"); ?></label> 
        <div class="col-sm-10"> 
            <p><?php echo $_traducciones_id; ?></p>
        </div> 
    </div> 
    
    <div class="form-group"> 
        <label for="_traducciones_frase" class="col-sm-2 control-label"><?php _t("Frase"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="_traducciones_frase" id="_traducciones_frase" placeholder="<?php _t("Frase"); ?>" value="<?php echo $_traducciones_frase; ?>"  disabled > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="_traducciones_idioma" class="col-sm-2 control-label"><?php _t("Idioma"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="_traducciones_idioma" id="_traducciones_idioma" placeholder="<?php _t("Idioma"); ?>" value="<?php echo $_traducciones_idioma; ?>"  disabled > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="_traducciones_traduccion" class="col-sm-2 control-label"><?php _t("Traduccion"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="_traducciones_traduccion" id="_traducciones_traduccion" placeholder="<?php _t("Traduccion"); ?>" value="<?php echo $_traducciones_traduccion; ?>"  disabled > 
        </div> 
    </div> 


    <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-10"> 
            <button type="submit" class="btn btn-primary"><?php _t("Editar"); ?></button> 
        </div> 
    </div>     
</form> 


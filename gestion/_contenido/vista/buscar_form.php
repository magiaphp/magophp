<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<h2>

<span class="glyphicon glyphicon-search"></span>

<?php _t("Buscar"); ?> 

</h2> 

<form class="" action="index.php" method="get"> 
<input type="hidden" name="p" value="_contenido"> 
<input type="hidden" name="c" value="buscar"> 
     <div class="form-group"> 
     <label for="_contenido_frase" class="col-sm-2 control-label"><?php _t("Frase");?></label> 
       <input type="text" class="form-control" name="_contenido_frase" id="_contenido_frase" placeholder="<?php _t("Frase"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="_contenido_contexto" class="col-sm-2 control-label"><?php _t("Contexto");?></label> 
       <input type="text" class="form-control" name="_contenido_contexto" id="_contenido_contexto" placeholder="<?php _t("Contexto"); ?> "> 
   </div> 


       <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
 </form> 

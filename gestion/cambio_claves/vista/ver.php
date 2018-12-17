<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<h1> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Detalles"); ?> 
</h1> 
     <form class="form-horizontal" method="" action=""> 
     <input type="hidden" name="p" value="cambio_claves"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="cambio_claves_id" value="<?php echo $cambio_claves_id; ?>"> 
 <div class="form-group"> 
     <label for="cambio_claves_usuario" class="col-sm-2 control-label"><?php _t("Usuario"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="cambio_claves_usuario" id="cambio_claves_usuario" placeholder="<?php _t("Usuario"); ?>" value="<?php echo $cambio_claves_usuario; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="cambio_claves_codigo" class="col-sm-2 control-label"><?php _t("Codigo"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="cambio_claves_codigo" id="cambio_claves_codigo" placeholder="<?php _t("Codigo"); ?>" value="<?php echo $cambio_claves_codigo; ?>"  disabled > 
     </div> 
   </div> 


   <script>
            $( function() {
              $( "#cambio_claves_fecha_solicitud" ).datepicker();
            } );
            </script>
 <div class="form-group"> 
     <label for="cambio_claves_fecha_solicitud" class="col-sm-2 control-label"><?php _t("Fecha solicitud"); ?></label> 
     <div class="col-sm-3"> 
     <div class="input-group"> 
       <input type="text" class="form-control" name="cambio_claves_fecha_solicitud" id="cambio_claves_fecha_solicitud" placeholder="<?php _t("aaaa-mm-dd"); ?>" value="<?php echo $cambio_claves_fecha_solicitud; ?>"  disabled > 
     <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div> 
     </div> 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="cambio_claves_codigo_usado" class="col-sm-2 control-label"><?php _t("Codigo usado"); ?></label> 
     <div class="col-sm-10"> 
     <div class="radio">
        <label>
            <input disabled type="radio" name="cambio_claves_codigo_usado" value="1" <?php echo "$cambio_claves_codigo_usado_1"; ?>  >
            <?php _t("Activo"); ?> 
        </label>
     </div>
     <div class="radio">
        <label>
            <input disabled type="radio" name="cambio_claves_codigo_usado" value="0"  <?php echo "$cambio_claves_codigo_usado_0"; ?>  >
            <?php _t("Bloqueado"); ?>  
        </label>
     </div>
   </div> 
   </div> 


   <div class="form-group"> 
 <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Editar"); ?></button> 
     </div> 
   </div>     
 </form> 
 <a href="index.php?p=cambio_claves&c=txt&cambio_claves_id=<?php echo $cambio_claves_id; ?>">Formato texto</a> 

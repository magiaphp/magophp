<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<h2>

<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Nuevo"); ?></h2> 

</h2> 

<form class="form-horizontal" action="index.php" method="post"> 
<input type="hidden" name="p" value="cambio_claves"> 
<input type="hidden" name="c" value="crear"> 
<input type="hidden" name="a" value="crear"> 

 <div class="form-group"> 
     <label for="cambio_claves_usuario" class="col-sm-2 control-label"><?php _t("Usuario"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="cambio_claves_usuario" id="cambio_claves_usuario" placeholder="<?php _t("Usuario"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="cambio_claves_codigo" class="col-sm-2 control-label"><?php _t("Codigo"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="cambio_claves_codigo" id="cambio_claves_codigo" placeholder="<?php _t("Codigo"); ?>" value=""   > 
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
       <input type="text" class="form-control" name="cambio_claves_fecha_solicitud" id="cambio_claves_fecha_solicitud" placeholder="<?php _t("aaaa-mm-dd"); ?>" value=""   > 
     <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div> 
     </div> 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="cambio_claves_codigo_usado" class="col-sm-2 control-label"><?php _t("Codigo usado"); ?></label> 
     <div class="col-sm-10"> 
     <div class="radio">
        <label>
            <input  type="radio" name="cambio_claves_codigo_usado" value="1" >
            <?php _t("Activo"); ?> 
        </label>
     </div>
     <div class="radio">
        <label>
            <input  type="radio" name="cambio_claves_codigo_usado" value="0"  checked >
            <?php _t("Bloqueado"); ?>  
        </label>
     </div>
   </div> 
   </div> 


 <div class="form-group"> 
     <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Registrar"); ?></button> 
     </div> 
   </div> 
 </form> 

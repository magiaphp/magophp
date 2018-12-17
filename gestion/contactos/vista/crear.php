<?php /**
  magia_version: 0.0.8
 * https://webdesign.tutsplus.com/tutorials/auto-formatting-input-value--cms-26745
 * */ ?>
<h2>

    <span class="<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php _t("Nuevo contacto"); ?></h2> 

</h2> 



<form class="form-horizontal" action="index.php" method="post"> 
    <input type="hidden" name="p" value="contactos"> 
    <input type="hidden" name="c" value="crear"> 
    <input type="hidden" name="a" value="crear"> 
    <input type="hidden" name="contactos_es_contacto" value="null"> 
    <input type="hidden" name="contactos_estrellas" value="null"> 
    <input type="hidden" name="contactos_provincia" value="null"> 
    <input type="hidden" name="contactos_tipo" value="null"> 
    <input type="hidden" name="contactos_tipo_documento" value="null"> 
    <input type="hidden" name="contactos_fax" value="null"> 



    <div class="form-group"> 
        <label for="contactos_idioma" class="col-sm-2 control-label"><?php _t("Idioma"); ?></label> 
        <div class="col-sm-10"> 
            <select name="contactos_idioma" class="form-control">
                <?php _idiomas_add(); ?>
            </select>
        </div> 
    </div> 


    


    <div class="form-group"> 
        <label for="contactos_ruc_prefijo" class="col-sm-2 control-label"><?php _t("Ruc prefijo"); ?></label> 
        <div class="col-sm-10"> 
            <input 
                type="text" 
                class="form-control" 
                name="contactos_ruc_prefijo" 
                id="contactos_ruc_prefijo" 
                placeholder="<?php _t("BE"); ?>" value="BE"   > 
        </div> 
    </div> 

    <div class="form-group"> 
        <label for="contactos_numero_documento" class="col-sm-2 control-label"><?php _t("TVA"); ?></label> 
        <div class="col-sm-10"> 
            <input 
                type="text" 
                class="form-control" 
                name="contactos_numero_documento" 
                id="contactos_numero_documento" 
                placeholder="<?php _t("123.123.123"); ?>" value=""   > 
        </div> 
    </div> 












    <div class="form-group"> 
        <label for="contactos_empresa" class="col-sm-2 control-label"><?php _t("Empresa"); ?></label> 
        <div class="col-sm-10"> 
            <input 
                type="text" 
                class="form-control" 
                name="contactos_empresa" 
                id="contactos_empresa" 
                placeholder="<?php _t("Empresa SPRL"); ?>" value=""   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="contactos_saludo" class="col-sm-2 control-label"><?php _t("Saludo"); ?></label> 
        <div class="col-sm-10"> 
            <input 
                type="text" 
                class="form-control" 
                name="contactos_saludo" 
                id="contactos_saludo" 
                placeholder="<?php _t("Sr. Sra. Srta. Dr. Dra. ..."); ?>" value="M."   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="contactos_contacto" class="col-sm-2 control-label"><?php _t("Contacto"); ?></label> 
        <div class="col-sm-10"> 
            <input 
                type="text" 
                class="form-control" 
                name="contactos_contacto" 
                id="contactos_contacto" 
                placeholder="<?php _t("Nombres y apellidos"); ?>" value=""   > 
        </div> 
    </div> 







    <hr>

    <div class="form-group"> 
        <label for="contactos_direccion" class="col-sm-2 control-label"><?php _t("Dirección"); ?></label> 
        <div class="col-sm-10"> 
            <input 
                type="text" 
                class="form-control" 
                name="contactos_direccion" 
                id="contactos_direccion" placeholder="<?php _t("Av. Louise 265"); ?>" value=""   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="contactos_cpostal" class="col-sm-2 control-label"><?php _t("Código postal"); ?></label> 
        <div class="col-sm-10"> 
            <input 
                type="text" 
                class="form-control" 
                name="contactos_cpostal" 
                id="contactos_cpostal" 
                placeholder="<?php _t("1000"); ?>" value=""   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="contactos_ciudad" class="col-sm-2 control-label"><?php _t("Ciudad"); ?></label> 
        <div class="col-sm-10"> 
            <input 
                type="text" 
                class="form-control" 
                name="contactos_ciudad" 
                id="contactos_ciudad" 
                placeholder="<?php _t("Bruxelles"); ?>" value=""   > 
        </div> 
    </div> 

    <?php /*
      <div class="form-group">
      <label for="contactos_provincia" class="col-sm-2 control-label"><?php _t("Provincia"); ?></label>
      <div class="col-sm-10">
      <input type="text" class="form-control" name="contactos_provincia" id="contactos_provincia" placeholder="<?php _t("Provincia"); ?>" value=""   >
      </div>
      </div>
     */ ?>

    <div class="form-group"> 
        <label for="contactos_pais" class="col-sm-2 control-label"><?php _t("País"); ?></label> 
        <div class="col-sm-10"> 


            <input 
                type="text" 
                class="form-control" 
                name="contactos_pais" 
                id="contactos_pais" 
                placeholder="<?php _t("Belgique"); ?>" value="Belgique"   > 

        </div> 
    </div> 

    <hr>

    <div class="form-group"> 
        <label for="contactos_tel" class="col-sm-2 control-label"><?php _t("Tel"); ?></label> 
        <div class="col-sm-10"> 
            <input 
                type="text" 
                class="form-control" 
                name="contactos_tel" 
                id="contactos_tel" 
                placeholder="<?php _t("+322123456"); ?>" value=""   > 
        </div> 
    </div> 


    



    <div class="form-group"> 
        <label for="contactos_notas" class="col-sm-2 control-label"><?php _t("Notas"); ?></label> 
        <div class="col-sm-10"> 
            <textarea  
                class="form-control" 
                name="contactos_notas" 
                id="contactos_notas" 
                placeholder="<?php _t("Notas"); ?>"></textarea> 
        </div> 
    </div> 

    <hr>

        <div class="form-group"> 
        <label for="contactos_email" class="col-sm-2 control-label"><?php _t("Email"); ?></label> 
        <div class="col-sm-10"> 
            <input 
                type="email" 
                class="form-control" 
                name="contactos_email" 
                id="contactos_email" 
                placeholder="<?php _t("Usado para ingresar al sistema"); ?>" value=""   
                required=""
                > 

        </div> 
    </div> 

    <div class="form-group"> 
        <label for="contactos_grupo" class="col-sm-2 control-label"><?php _t("Grupo"); ?></label> 
        <div class="col-sm-10"> 
            <select class="form-control" name="contactos_grupo" >
                <?php _grupos_add("", "root"); ?>
            </select>
        </div>         
    </div> 







    <div class="form-group"> 
        <label for="contactos_clave" class="col-sm-2 control-label"><?php _t("Clave"); ?></label> 
        <div class="col-sm-10"> 
            <input 
                type="text" 
                class="form-control" 
                name="contactos_clave" 
                id="contactos_clave" 
                placeholder="<?php _t("Clave"); ?>" value="<?php echo genera_clave(); ?>"   > 
        </div> 
    </div> 





    <?php /*
      <div class="form-group">
      <label for="contactos_tipo" class="col-sm-2 control-label"><?php _t("Tipo"); ?></label>
      <div class="col-sm-10">
      <input type="text" class="form-control" name="contactos_tipo" id="contactos_tipo" placeholder="<?php _t("Tipo"); ?>" value=""   >
      </div>
      </div>


      <script>
      $(function () {
      $("#contactos_fecha_registro").datepicker();
      });
      </script>

      <div class="form-group">
      <label for="contactos_fecha_registro" class="col-sm-2 control-label"><?php _t("Fecha registro"); ?></label>
      <div class="col-sm-3">
      <div class="input-group">
      <input
      type="text"
      class="form-control"
      name="contactos_fecha_registro"
      id="contactos_fecha_registro"
      placeholder="<?php echo date("Y-m-d"); ?>" value="" readonly=""  >
      <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>
      </div>
      </div>
      </div>


      <div class="form-group">
      <label for="contactos_es_contacto" class="col-sm-2 control-label"><?php _t("Es contacto"); ?></label>
      <div class="col-sm-10">
      <input type="text" class="form-control" name="contactos_es_contacto" id="contactos_es_contacto" placeholder="<?php _t("Es contacto"); ?>" value=""   >
      </div>
      </div>


      <div class="form-group">
      <label for="contactos_estrellas" class="col-sm-2 control-label"><?php _t("Estrellas"); ?></label>
      <div class="col-sm-10">
      <input type="text" class="form-control" name="contactos_estrellas" id="contactos_estrellas" placeholder="<?php _t("Estrellas"); ?>" value=""   >
      </div>
      </div>
   */ ?>

      <div class="form-group">
      <label for="contactos_estatus" class="col-sm-2 control-label"><?php _t("Estatus"); ?></label>
      <div class="col-sm-10">
      <div class="radio">
      <label>
      <input  type="radio" name="contactos_estatus" value="1" checked>
      <?php _t("Activo"); ?>
      </label>
      </div>
      <div class="radio">
      <label>
      <input  type="radio" name="contactos_estatus" value="0"  >
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

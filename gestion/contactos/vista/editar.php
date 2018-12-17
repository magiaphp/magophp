<?php /**
  magia_version: 0.0.8
 * */ ?>
<h2>

    <span class="<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php _t("Editar contactos"); ?></h2> 

</h2> 


<form class="form-horizontal" method="post" action="index.php"> 
    <input type="hidden" name="p" value="contactos"> 
    <input type="hidden" name="c" value="editar"> 
    <input type="hidden" name="a" value="editar"> 
    <input type="hidden" name="contactos_id" value="<?php echo $contactos_id; ?>"> 
    <input type="hidden" name="contactos_tipo" value="<?php echo $contactos_tipo; ?>"> 
    <input type="hidden" name="contactos_es_contacto" value="<?php echo $contactos_es_contacto; ?>"> 
    <input type="hidden" name="contactos_estrellas" value="<?php echo $contactos_estrellas; ?>"> 
    <input type="hidden" name="contactos_provincia" value="<?php echo $contactos_provincia; ?>"> 
    <input type="hidden" name="contactos_tipo_documento" value="<?php echo $contactos_tipo_documento; ?>"> 
    <input type="hidden" name="contactos_fax" value="<?php echo $contactos_fax; ?>"> 



    <div class="form-group"> 
        <label for="contactos_idioma" class="col-sm-2 control-label"><?php _t("Idioma"); ?></label> 
        <div class="col-sm-10"> 
            <select name="contactos_idioma" class="form-control">
                <?php _idiomas_add($contactos_idioma); ?>
            </select>
        </div> 
    </div> 





    <div class="form-group"> 
        <label for="contactos_ruc_prefijo" class="col-sm-2 control-label"><?php _t("Ruc prefijo"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="contactos_ruc_prefijo" id="contactos_ruc_prefijo" placeholder="<?php _t("Ruc prefijo"); ?>" value="<?php echo $contactos_ruc_prefijo; ?>"   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="contactos_numero_documento" class="col-sm-2 control-label"><?php _t("Numero documento"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="contactos_numero_documento" id="contactos_numero_documento" placeholder="<?php _t("Numero documento"); ?>" value="<?php echo $contactos_numero_documento; ?>"   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="contactos_empresa" class="col-sm-2 control-label"><?php _t("Empresa"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="contactos_empresa" id="contactos_empresa" placeholder="<?php _t("Empresa"); ?>" value="<?php echo $contactos_empresa; ?>"   > 
        </div> 
    </div> 

    <div class="form-group"> 
        <label for="contactos_saludo" class="col-sm-2 control-label"><?php _t("Saludo"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="contactos_saludo" id="contactos_saludo" placeholder="<?php _t("Saludo"); ?>" value="<?php echo $contactos_saludo; ?>"   > 
        </div> 
    </div> 

    <div class="form-group"> 
        <label for="contactos_contacto" class="col-sm-2 control-label"><?php _t("Contacto"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="contactos_contacto" id="contactos_contacto" placeholder="<?php _t("Contacto"); ?>" value="<?php echo $contactos_contacto; ?>"   > 
        </div> 
    </div> 




    <hr>

    <div class="form-group"> 
        <label for="contactos_direccion" class="col-sm-2 control-label"><?php _t("Direccion"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="contactos_direccion" id="contactos_direccion" placeholder="<?php _t("Direccion"); ?>" value="<?php echo $contactos_direccion; ?>"   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="contactos_cpostal" class="col-sm-2 control-label"><?php _t("Cpostal"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="contactos_cpostal" id="contactos_cpostal" placeholder="<?php _t("Cpostal"); ?>" value="<?php echo $contactos_cpostal; ?>"   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="contactos_ciudad" class="col-sm-2 control-label"><?php _t("Ciudad"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="contactos_ciudad" id="contactos_ciudad" placeholder="<?php _t("Ciudad"); ?>" value="<?php echo $contactos_ciudad; ?>"   > 
        </div> 
    </div> 


    <?php
    /*    <div class="form-group"> 
      <label for="contactos_provincia" class="col-sm-2 control-label"><?php _t("Provincia"); ?></label>
      <div class="col-sm-10">
      <input type="text" class="form-control" name="contactos_provincia" id="contactos_provincia" placeholder="<?php _t("Provincia"); ?>" value="<?php echo $contactos_provincia; ?>"   >
      </div>
      </div>
     */
    ?>

    <div class="form-group"> 
        <label for="contactos_pais" class="col-sm-2 control-label"><?php _t("Pais"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="contactos_pais" id="contactos_pais" placeholder="<?php _t("Pais"); ?>" value="<?php echo $contactos_pais; ?>"   > 
        </div> 
    </div> 

    <hr>
    <div class="form-group"> 
        <label for="contactos_tel" class="col-sm-2 control-label"><?php _t("Tel"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="contactos_tel" id="contactos_tel" placeholder="<?php _t("Tel"); ?>" value="<?php echo $contactos_tel; ?>"   > 
        </div> 
    </div> 







    <div class="form-group"> 
        <label for="contactos_notas" class="col-sm-2 control-label"><?php _t("Notas"); ?></label> 
        <div class="col-sm-10"> 
            <textarea  class="form-control" name="contactos_notas" id="contactos_notas" placeholder="<?php _t("Notas"); ?>"><?php echo $contactos_notas; ?></textarea> 
        </div> 
    </div> 

    <?php
    /*

      <div class="form-group">
      <label for="contactos_tipo" class="col-sm-2 control-label"><?php _t("Tipo"); ?></label>
      <div class="col-sm-10">
      <input type="text" class="form-control" name="contactos_tipo" id="contactos_tipo" placeholder="<?php _t("Tipo"); ?>" value="<?php echo $contactos_tipo; ?>"   >
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
      <input type="text" class="form-control" name="contactos_fecha_registro" id="contactos_fecha_registro" placeholder="<?php _t("aaaa-mm-dd"); ?>" value="<?php echo $contactos_fecha_registro; ?>"   >
      <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>
      </div>
      </div>
      </div>

      <div class="form-group">
      <label for="contactos_es_contacto" class="col-sm-2 control-label"><?php _t("Es contacto"); ?></label>
      <div class="col-sm-10">
      <input type="text" class="form-control" name="contactos_es_contacto" id="contactos_es_contacto" placeholder="<?php _t("Es contacto"); ?>" value="<?php echo $contactos_es_contacto; ?>"   >
      </div>
      </div>


      <div class="form-group">
      <label for="contactos_estrellas" class="col-sm-2 control-label"><?php _t("Estrellas"); ?></label>
      <div class="col-sm-10">
      <input type="text"
      class="form-control"
      name="contactos_estrellas"
      id="contactos_estrellas"
      placeholder="<?php _t("Estrellas"); ?>"
      value="<?php echo $contactos_estrellas; ?>"   >
      </div>
      </div>
     */
    ?>
    <hr>     
    <?php
    /*
     * Si existe pedidos con un email, este ya no puede ser cambiado
     */
    ?>
    <div class="form-group"> 
        <label for="contactos_email" class="col-sm-2 control-label"><?php _t("Email"); ?></label> 
        <div class="col-sm-10"> 
            <input 
                type="email" 
                class="form-control" 
                name="contactos_email" 
                id="contactos_email" 
                placeholder="<?php _t("Email"); ?>" 
                value="<?php echo $contactos_email; ?>"                  
                required=""
                > 
        </div> 
    </div> 

    <div class="form-group"> 
        <label for="contactos_grupo" class="col-sm-2 control-label"><?php _t("Grupo"); ?></label> 
        <div class="col-sm-10"> 
            <select class="form-control" name="contactos_grupo" >
                <?php _grupos_add(_usuarios_campo_segun_email('grupo', $contactos_email)); ?>
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
                placeholder="<?php _t("Clave"); ?>" value=""   > 
        </div> 
    </div> 



    <div class="form-group"> 
        <label for="contactos_estatus" class="col-sm-2 control-label"><?php _t("Estatus"); ?></label> 
        <div class="col-sm-10"> 
            <div class="radio">
                <label>
                    <input  type="radio" name="contactos_estatus" value="1" <?php echo "$contactos_estatus_1"; ?>  >
                    <?php
                    _t("Activo");
                    echo ", ";
                    _t('Un email sera enviado al usuario');
                    ?> 
                </label>
            </div>
            <div class="radio">
                <label>
                    <input  type="radio" name="contactos_estatus" value="0"  <?php echo "$contactos_estatus_0"; ?>  >
                    <?php
                    _t("Bloqueado");
                    echo ", ";
                    _t('Un email sera enviado al usuario');
                    ?>  
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


<?php if (permisos_tiene_permiso('borrar', $pagina, $_usuarios_grupo)) { ?>

    <h2><?php _t("Atención"); ?></h2>
    <p><?php _t("Ud esta va a borrar definitivamente este registro, desea hacerlo?"); ?></p>
    <a class="btn btn-danger" href="index.php?p=contactos&c=borrar&contactos_email=<?php echo $contactos_email; ?>">
    <?php _t("Si,borrar"); ?>
    </a>

<?php } ?>

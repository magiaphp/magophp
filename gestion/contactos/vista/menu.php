<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<h1><?php _t("Buscar"); ?></h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="contactos">
    <input  type="hidden" name="c" value="buscar">
                    <div class="form-group">
                      <label for="Tipo_documento"><?php _t("Tipo_documento"); ?></label>
                      <input type="text" class="form-control" name="contactos_tipo_documento" id="contactos_tipo_documento" placeholder="<?php _t("Tipo_documento"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Ruc_prefijo"><?php _t("Ruc_prefijo"); ?></label>
                      <input type="text" class="form-control" name="contactos_ruc_prefijo" id="contactos_ruc_prefijo" placeholder="<?php _t("Ruc_prefijo"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Numero_documento"><?php _t("Numero_documento"); ?></label>
                      <input type="text" class="form-control" name="contactos_numero_documento" id="contactos_numero_documento" placeholder="<?php _t("Numero_documento"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Empresa"><?php _t("Empresa"); ?></label>
                      <input type="text" class="form-control" name="contactos_empresa" id="contactos_empresa" placeholder="<?php _t("Empresa"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Contacto"><?php _t("Contacto"); ?></label>
                      <input type="text" class="form-control" name="contactos_contacto" id="contactos_contacto" placeholder="<?php _t("Contacto"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Saludo"><?php _t("Saludo"); ?></label>
                      <input type="text" class="form-control" name="contactos_saludo" id="contactos_saludo" placeholder="<?php _t("Saludo"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Direccion"><?php _t("Direccion"); ?></label>
                      <input type="text" class="form-control" name="contactos_direccion" id="contactos_direccion" placeholder="<?php _t("Direccion"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Cpostal"><?php _t("Cpostal"); ?></label>
                      <input type="text" class="form-control" name="contactos_cpostal" id="contactos_cpostal" placeholder="<?php _t("Cpostal"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Ciudad"><?php _t("Ciudad"); ?></label>
                      <input type="text" class="form-control" name="contactos_ciudad" id="contactos_ciudad" placeholder="<?php _t("Ciudad"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Provincia"><?php _t("Provincia"); ?></label>
                      <input type="text" class="form-control" name="contactos_provincia" id="contactos_provincia" placeholder="<?php _t("Provincia"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Pais"><?php _t("Pais"); ?></label>
                      <input type="text" class="form-control" name="contactos_pais" id="contactos_pais" placeholder="<?php _t("Pais"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Tel"><?php _t("Tel"); ?></label>
                      <input type="text" class="form-control" name="contactos_tel" id="contactos_tel" placeholder="<?php _t("Tel"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Fax"><?php _t("Fax"); ?></label>
                      <input type="text" class="form-control" name="contactos_fax" id="contactos_fax" placeholder="<?php _t("Fax"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Email"><?php _t("Email"); ?></label>
                      <input type="text" class="form-control" name="contactos_email" id="contactos_email" placeholder="<?php _t("Email"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Notas"><?php _t("Notas"); ?></label>
                      <input type="text" class="form-control" name="contactos_notas" id="contactos_notas" placeholder="<?php _t("Notas"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Tipo"><?php _t("Tipo"); ?></label>
                      <input type="text" class="form-control" name="contactos_tipo" id="contactos_tipo" placeholder="<?php _t("Tipo"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Fecha_registro"><?php _t("Fecha_registro"); ?></label>
                      <input type="text" class="form-control" name="contactos_fecha_registro" id="contactos_fecha_registro" placeholder="<?php _t("Fecha_registro"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Es_contacto"><?php _t("Es_contacto"); ?></label>
                      <input type="text" class="form-control" name="contactos_es_contacto" id="contactos_es_contacto" placeholder="<?php _t("Es_contacto"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Estrellas"><?php _t("Estrellas"); ?></label>
                      <input type="text" class="form-control" name="contactos_estrellas" id="contactos_estrellas" placeholder="<?php _t("Estrellas"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Estatus"><?php _t("Estatus"); ?></label>
                      <input type="text" class="form-control" name="contactos_estatus" id="contactos_estatus" placeholder="<?php _t("Estatus"); ?>">
                    </div>
                         
  <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>
<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
   
$borrar = (permisos_tiene_permiso("borrar", "contactos", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=contactos&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?>
<form method="post" action="index.php" >
            <input type="hidden" name="p" value="contactos">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="contactos_id" value="<?php echo $contactos_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="contactos_tipo_documento" value="<?php echo $contactos_tipo_documento; ?>" placeholder="<?php _t("Tipo_documento"); ?>"></td> 
 <td><input class="form-control" type="text" name="contactos_ruc_prefijo" value="<?php echo $contactos_ruc_prefijo; ?>" placeholder="<?php _t("Ruc_prefijo"); ?>"></td> 
 <td><input class="form-control" type="text" name="contactos_numero_documento" value="<?php echo $contactos_numero_documento; ?>" placeholder="<?php _t("Numero_documento"); ?>"></td> 
 <td><input class="form-control" type="text" name="contactos_empresa" value="<?php echo $contactos_empresa; ?>" placeholder="<?php _t("Empresa"); ?>"></td> 
 <td><input class="form-control" type="text" name="contactos_contacto" value="<?php echo $contactos_contacto; ?>" placeholder="<?php _t("Contacto"); ?>"></td> 
 <td><input class="form-control" type="text" name="contactos_saludo" value="<?php echo $contactos_saludo; ?>" placeholder="<?php _t("Saludo"); ?>"></td> 
 <td><input class="form-control" type="text" name="contactos_direccion" value="<?php echo $contactos_direccion; ?>" placeholder="<?php _t("Direccion"); ?>"></td> 
 <td><input class="form-control" type="text" name="contactos_cpostal" value="<?php echo $contactos_cpostal; ?>" placeholder="<?php _t("Cpostal"); ?>"></td> 
 <td><input class="form-control" type="text" name="contactos_ciudad" value="<?php echo $contactos_ciudad; ?>" placeholder="<?php _t("Ciudad"); ?>"></td> 
 <td><input class="form-control" type="text" name="contactos_provincia" value="<?php echo $contactos_provincia; ?>" placeholder="<?php _t("Provincia"); ?>"></td> 
 <td><input class="form-control" type="text" name="contactos_pais" value="<?php echo $contactos_pais; ?>" placeholder="<?php _t("Pais"); ?>"></td> 
 <td><input class="form-control" type="text" name="contactos_tel" value="<?php echo $contactos_tel; ?>" placeholder="<?php _t("Tel"); ?>"></td> 
 <td><input class="form-control" type="text" name="contactos_fax" value="<?php echo $contactos_fax; ?>" placeholder="<?php _t("Fax"); ?>"></td> 
 <td><input class="form-control" type="text" name="contactos_email" value="<?php echo $contactos_email; ?>" placeholder="<?php _t("Email"); ?>"></td> 
 <td><input class="form-control" type="text" name="contactos_notas" value="<?php echo $contactos_notas; ?>" placeholder="<?php _t("Notas"); ?>"></td> 
 <td><input class="form-control" type="text" name="contactos_tipo" value="<?php echo $contactos_tipo; ?>" placeholder="<?php _t("Tipo"); ?>"></td> 
 <td><input class="form-control" type="text" name="contactos_fecha_registro" value="<?php echo $contactos_fecha_registro; ?>" placeholder="<?php _t("Fecha_registro"); ?>"></td> 
 <td><input class="form-control" type="text" name="contactos_es_contacto" value="<?php echo $contactos_es_contacto; ?>" placeholder="<?php _t("Es_contacto"); ?>"></td> 
 <td><input class="form-control" type="text" name="contactos_estrellas" value="<?php echo $contactos_estrellas; ?>" placeholder="<?php _t("Estrellas"); ?>"></td> 
 <td><input class="form-control" type="text" name="contactos_estatus" value="<?php echo $contactos_estatus; ?>" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 
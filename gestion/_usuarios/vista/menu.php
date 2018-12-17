<?php /**
  magia_version: 0.0.8
 * */ ?>
<h1><?php _t("Buscar"); ?></h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="_usuarios">
    <input  type="hidden" name="c" value="buscar">
    <div class="form-group">
        <label for="Grupo"><?php _t("Grupo"); ?></label>
        <input type="text" class="form-control" name="t_usuarios_grupo" id="t_usuarios_grupo" placeholder="<?php _t("Grupo"); ?>">
    </div>

    <div class="form-group">
        <label for="Usuario"><?php _t("Usuario"); ?></label>
        <input type="text" class="form-control" name="t_usuarios_usuario" id="t_usuarios_usuario" placeholder="<?php _t("Usuario"); ?>">
    </div>

    <div class="form-group">
        <label for="Clave"><?php _t("Clave"); ?></label>
        <input type="text" class="form-control" name="t_usuarios_clave" id="t_usuarios_clave" placeholder="<?php _t("Clave"); ?>">
    </div>

    <div class="form-group">
        <label for="Estatus"><?php _t("Estatus"); ?></label>
        <input type="text" class="form-control" name="t_usuarios_estatus" id="t_usuarios_estatus" placeholder="<?php _t("Estatus"); ?>">
    </div>

    <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>
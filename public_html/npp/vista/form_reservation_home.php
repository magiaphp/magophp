
<form class="form-horizontal" action="index.php" method="get">
    <input type="hidden" name="p" value="home">
    <input type="hidden" name="c" value="checkDispo">

    <div class="form-group row">
        <label for="fi" class="col-sm-2 control-label"><?php _t("Fecha de inicio"); ?></label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="fi"  name="fi" placeholder="aaa-mm-dd" value="">
        </div>
    </div>


    <div class="form-group row">
        <label for="ff" class="col-sm-2 control-label"><?php _t("Fecha de fin"); ?></label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="ff" name="ff"placeholder="aa-mm-dd" value="">
        </div>
    </div>

    <div class="form-group row">
        <label for="hi" class="col-sm-2 control-label"><?php _t("Horario"); ?></label>
        <div class="col-sm-10">
            <select class="form-control" name="hi">
                <option value="25200">07h00 - 12h00</option>
                <option value="46800">13h00 - 24h00</option>
            </select>
        </div>
    </div>




    <div class="form-group row">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default"><?php _t("Verificar disponibilidad"); ?></button>
        </div>
    </div>
</form>     




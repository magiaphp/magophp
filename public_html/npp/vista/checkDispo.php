<?php include "header.php"; ?>


<?php /*
  <p>Fecha incio: <?php echo $_GET['fi'] ?></p>
  <p>Fecha fin: <?php echo $_GET['ff'] ?></p>
  <p>Fecha hora i: <?php echo $_GET['hi'] ?></p>
  <p></p>
 */ ?>

<div class="row"><hr>
    <div class="col-lg-9"><hr>
        <form class="form-inline">
            <div class="form-group">
                <label class="sr-only" for="fi"><?php _t("Fecha de inicio"); ?></label>
                <input type="date" class="form-control"  name="fi" id="fi" placeholder="" value="<?php echo $fi; ?>">
            </div>
            <div class="form-group">
                <label class="sr-only" for="ff"><?php _t("Fecha de fin"); ?></label>
                <input type="date" class="form-control"  name="ff" id="ff" placeholder="" value="<?php echo $ff; ?>">
            </div>
            
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Remember me
                </label>
            </div>
            
            <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
        </form>

    </div>
</div>

<hr>

<div class="row">


    <div class="col-sm-6">
        <?php
        $i = 1;
        while ($parkings = mysql_fetch_array($sql)) {
            include "gestion/parkings/reg/reg.php";

            include "public_html/npp/vista/checkDispoItem.php";

            $i++;
        }
        ?>

    </div>

    <div class="col-sm-6">
        <div class="jumbotron">
            <h1>Google Map here!</h1>
            <p>...</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
        </div>
    </div>





    <?php /*
      <div class="col-sm-6">
      <div class="card">
      <div class="card-body">
      <h5 class="card-title">13h00 - 24h00</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
      </div>
      </div>
     */ ?>

</div>






<?php include "footer.php"; ?>
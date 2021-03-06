<?php /**
  magia_version: 0.0.8
 * */ ?>
<div>

    <ul class="nav nav-tabs" role="tablist">
        
        <li role="presentation" class="active">        
            <a href="#inicio" aria-controls="inicio" role="tab" data-toggle="tab">
                <span class="glyphicon glyphicon-list-alt"></span>
                <?php _t('Detalles'); ?>

            </a>
        </li>
        
        <li role="presentation">
            <a href="#susAutos" aria-controls="susAutos" role="tab" data-toggle="tab">
                <span class="glyphicon glyphicon-search"></span>
                <?php _t('Sus autos'); ?>
            </a>
        </li>
        
        <li role="presentation">
            <a href="#buscar" aria-controls="buscar" role="tab" data-toggle="tab">
                <span class="glyphicon glyphicon-search"></span>
                <?php _t('Buscar'); ?>
            </a>
        </li>
        
        
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="inicio">
            <?php include "detalles.php"; ?>
        </div>
        
        <div role="tabpanel" class="tab-pane" id="buscar">
            <?php include "buscar_form.php"; ?>        
        </div>        
        
        
        <div role="tabpanel" class="tab-pane" id="susAutos">
            <?php include "susAutos.php"; ?>        
        </div>        
        
        
    </div>
</div>


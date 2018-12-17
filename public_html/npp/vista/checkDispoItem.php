
    
  <div class="col-sm-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?php echo $hi; ?></h5>
        <p class="card-text"><?php echo  tipo_parking_campo("tipo", $parkings_id_tipo) ;  ?></p>
        <p class="card-text"><?php echo "direccion: $parkings_direccion en la ciudad de $parkings_ciudad";  ?></p>
        <p class="card-text"><?php echo "Pais: $parkings_pais";  ?></p>
        <p class="card-text"><b><?php echo "Precio 20 EUROS ";  ?></b></p>
        
        <a href="index.php?p=home&c=confirmation&id_parking=<?php echo "$parkings_id&fi=$fi&ff=$ff&hi=$hi"; ?>" class="btn btn-primary"><?php echo $i; ?> Check</a>
      </div>
    </div>
  </div>
    

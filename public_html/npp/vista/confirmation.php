<?php
include "header.php";
?>





                        <form class="form-horizontal" action="payReservation.php">


                            <div class="form-group">
                                <label for="fecha_inicio" class="col-sm-2 control-label"><?php _t("Fecha de inicio"); ?></label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="fecha_inicio" placeholder="dd/mm/aaaa">
                                </div>
                            </div>



                            <div class="form-group">
                                <label for="fecha_fin" class="col-sm-2 control-label"><?php _t("Fecha de fin"); ?></label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="fecha_inicio" placeholder="dd/mm/aaaa">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="hora_i" class="col-sm-2 control-label"><?php _t("Hora"); ?></label>
                                <div class="col-sm-10">
                                    <select name="hora_i" class="form-control">
                                        <option value="1">07h00 - 12h00</option>
                                        <option value="2">13h00 - 23h59</option>
                                    </select>
                                    
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="placa" class="col-sm-2 control-label"><?php _t("Placa"); ?></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="placa" placeholder="1-ABC-254">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label"><?php _t("Email"); ?></label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" placeholder="info@npp.be">
                                </div>
                            </div>




                            



                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default"><?php _t("Continuar"); ?></button>
                                </div>
                            </div>



                        </form>








































<?php
include "footer.php";
?>
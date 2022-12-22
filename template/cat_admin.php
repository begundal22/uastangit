<br><br>
             <div class="row">
             		<?php foreach( $jmlbarang as $row ) :?>
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                     	<div class="thumbnail" style="background-color: light; border: 1px solid light; padding: 10px; box-shadow: 5px 10px 8px #CFCFCF; ">
                            <div class="col-in row">
                                <div class="col-md-12 col-sm-12 col-xs-12"> <i class="linea-icon linea-basic" data-icon="&#xe01b;"></i>
                                    <h5 class="text-center text-muted vb">Total Dana Sayuran</h5>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <h3 class="counter text-center m-t-15 text-danger fs" style="margin-top: -5px;">Rp.<?= number_format($row["harga"]) ;?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>


                    <?php foreach( $jmlbarang1 as $row ) :?>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                     	<div class="thumbnail" style="background-color: light; border: 1px solid light; padding: 10px; box-shadow: 5px 10px 8px #CFCFCF; ">
                            <div class="col-in row">
                                <div class="col-md-12 col-sm-12 col-xs-12"> <i class="linea-icon linea-basic" data-icon="&#xe01b;"></i>
                                    <h5 class="text-center text-muted vb">Total Dana Buah-Buahan</h5>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <h3 class="counter text-center m-t-15 text-danger fs" style="margin-top: -5px;">Rp.<?= number_format($row["harga"]) ;?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>


                    <?php foreach( $jmlbarang2 as $row ) :?>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                     	<div class="thumbnail" style="background-color: light; border: 1px solid light; padding: 10px; box-shadow: 5px 10px 8px #CFCFCF; ">
                            <div class="col-in row">
                                <div class="col-md-12 col-sm-12 col-xs-12"> <i class="linea-icon linea-basic" data-icon="&#xe01b;"></i>
                                    <h5 class="text-center text-muted vb">Total Dana Rempah-Rempah</h5>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <h3 class="counter text-center m-t-15 text-danger fs" style="margin-top: -5px;">Rp.<?= number_format($row["harga"]) ;?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>


                </div>
                <!-- /.row -->        
                <br><br>
					</div>
				</div>
				<!-- /.row -->

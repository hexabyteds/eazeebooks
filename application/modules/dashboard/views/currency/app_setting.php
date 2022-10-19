     <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('app_setting') ?></h4>
                        </div>
                    </div>

          <table  id="" class="table table-responsive">
            <tr><td> <img src="<?php echo base_url('my-assets/image/qr/'.$qr_image) ?>" class="img-responsive center-block appsettingqr" alt="">
                <span class="appsettingqrtxt">Localhost Server QR Code</span>
            </td>
                <td> <img src="<?php echo base_url('my-assets/image/qr/'.$server_image) ?>" class="img-responsive center-block appsettingqr" alt=""><span class="appsettingqrtxt">Online Server QR Code</span>
                </td>
                <td> <img src="<?php echo base_url('my-assets/image/qr/'.$hotspotqrimg) ?>" class="img-responsive center-block appsettingqr" alt=""><span class="appsettingqrtxt">Hotspot Ip/Url QR Code</span>
                </td>
            </tr>

    </table>
                 
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-8">
                           <?php echo form_open_multipart('dashboard/setting/update_app_setting', array('class' => 'form-vertical', 'id' => 'app_settings')) ?>

                        <div class="form-group row">
                            <label for="local_server_url" class="col-sm-4 col-form-label"><?php echo display('local_server_url') ?> <i class="text-danger"></i></label>
                            <div class="col-sm-8">
                                <input type="text" name="localurl" class="form-control" placeholder="<?php echo display('local_server_url') ?>" value="<?php echo  $localhserver?>">
                                <span class="text-danger">http://localhost/saleserp</span>
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="local_server_url" class="col-sm-4 col-form-label"><?php echo display('online_server_url') ?> <i class="text-danger"></i></label>
                            <div class="col-sm-8">
                                <input type="hidden" name="id" value="<?php echo  $id;?>">
                                <input type="text" name="onlineurl" class="form-control" placeholder="<?php echo display('online_server_url') ?>" value="<?php echo  $onlineserver?>">
                                <span  class="text-danger">http://bdtask.com/saleserp</span>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="local_server_url" class="col-sm-4 col-form-label"><?php echo display('connet_url') ?> <i class="text-danger"></i></label>
                            <div class="col-sm-8">
                                <input type="text" name="hotspoturl" class="form-control" placeholder="<?php echo display('connet_url') ?>" value="<?php echo  $hotspot?>">
                                <span  class="text-danger">http://192.168.1.154/saleserp</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="add-customer" class="btn btn-success btn-large" name="add-customer" value="<?php echo display('generate_qr') ?>" tabindex="13"/>
                            </div>
                        </div>
                        <?php echo form_close() ?>
                    </div>
 <div class="col-sm-4 playstorelink">
                <a href="https://play.google.com/store/apps/details?id=com.bdtask.pos" target="blank"><h3><b>Check our Sales ERP App Demo From </b> <br>
                <p class="text-center">Google Playstore</p></h3></a>
                <h1 class="text-center"><a href="#" class="text-center"><i class="fa fa-android"></i></a></h1>
                
            </div>
                </div>

            </div>

        </div>
            </div>
        </div>
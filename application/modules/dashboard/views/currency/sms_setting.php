 <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('sms_configure') ?> </h4>
                        </div>
                    </div>
                  <?php echo form_open_multipart('dashboard/setting/update_sms_configure', array('class' => 'form-vertical','id' => 'sms_configuration'))?>
                    <div class="panel-body">

                        <div class="form-group row">
                            <label for="api_key" class="col-sm-3 col-form-label"><?php echo 'Nexmo '.display('api_key') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="api_key" value="<?php echo $configdata[0]['api_key'];?>" id="api_key" type="text" tabindex="1">
                                <input type="hidden" value="<?php echo $configdata[0]['id'];?>" name="id">
                            </div>
                            <div class="col-sm-3">
                                <a href="https://dashboard.nexmo.com/sign-up" target="blank">Nexmo Registration?</a>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="api_secret" class="col-sm-3 col-form-label"><?php echo 'Nexmo '.display('api_secret') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="api_secret" value="<?php echo $configdata[0]['api_secret'];?>" id="api_secret" type="text" tabindex="2">
                            </div>
                        </div>

                     

                        <div class="form-group row">
                            <label for="from" class="col-sm-3 col-form-label"><?php echo 'Sender Number'; ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="from" value="<?php echo $configdata[0]['from'];?>" id="from" type="text" tabindex="3">
                            </div>
                        </div>
                   <div class="form-group row">
                     <label for="invoice" class="col-sm-3 col-form-label"><?php echo display('invoice'); ?> <i class="text-danger"></i></label>
                      <div class="switch col-sm-6">
                                <input type="radio" name="isinvoice" id="isinvoice1" value="1"  <?php if ($configdata[0]['isinvoice'] == '1') echo 'checked="checked"'; ?>  <?php if (empty($configdata[0]['isinvoice'] == '1')){echo 'checked="checked"';}else{echo ' ';}  ?>/>
                                <label for="isinvoice1" id="yes">
                                <strong><?php echo 'Yes'; ?></strong></label>
                                <input type="radio" name="isinvoice" id="isinvoice0" value="0" <?php if ($configdata[0]['isinvoice'] == '0') echo 'checked="checked"'; ?>/>
                                <label for="isinvoice0" id="no">
                                <strong><?php echo 'No'; ?></strong></label>
                            </div>
                   </div>

     

                   <div class="form-group row">
                     <label for="service" class="col-sm-3 col-form-label"><?php echo display('service'); ?> <i class="text-danger"></i></label>
                      <div class="switch col-sm-6">
                                <input type="radio" name="isservice" id="isservice1" value="1"  <?php if ($configdata[0]['isservice'] == '1') echo 'checked="checked"'; ?>  <?php if (empty($configdata[0]['isservice'] == '1')){echo 'checked="checked"';}else{echo ' ';}  ?>/>
                                <label for="isservice1" id="yes">
                                <strong><?php echo 'Yes'; ?></strong></label>
                                <input type="radio" name="isservice" id="isservice0" value="0" <?php if ($configdata[0]['isservice'] == '0') echo 'checked="checked"'; ?>/>
                                <label for="isservice0" id="no">
                                <strong><?php echo 'No'; ?></strong></label>
                            </div>
                   </div>

                    <div class="form-group row">
                     <label for="customer_receive" class="col-sm-3 col-form-label"><?php echo display('customer_receive'); ?> <i class="text-danger"></i></label>
                      <div class="switch col-sm-6">
                                <input type="radio" name="isreceive" id="isreceive1" value="1"  <?php if ($configdata[0]['isreceive'] == '1') echo 'checked="checked"'; ?>  <?php if (empty($configdata[0]['isreceive'] == '1')){echo 'checked="checked"';}else{echo ' ';}  ?>/>
                                <label for="isreceive1" id="yes">
                                <strong><?php echo 'Yes'; ?></strong></label>
                                <input type="radio" name="isreceive" id="isreceive0" value="0" <?php if ($configdata[0]['isreceive'] == '0') echo 'checked="checked"'; ?>/>
                                <label for="isreceive0" id="no">
                                <strong><?php echo 'No'; ?></strong></label>
                            </div>
                   </div>

                   
                        <?php
                        if($this->permission1->method('configure','update')->access()){ ?>
                         <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="sms" class="btn btn-primary btn-large" name="save_changes" value="<?php echo display('save_changes') ?>" tabindex="13"/>
                            </div>
                         </div>
                        <?php } ?>

                    </div>
                    <?php echo form_close()?>
                </div>
            </div>
        </div>
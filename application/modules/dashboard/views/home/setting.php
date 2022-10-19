        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('update_setting');
                             ?> </h4>
                        </div>
                    </div>
                    <?php echo form_open_multipart('dashboard/setting/bdtask_create_settings', array('class' => 'form-vertical', 'id' => 'insert_setting')) ?>
                    <div class="panel-body">

                        <div class="form-group row">
                            <label for="logo" class="col-sm-3 col-form-label"><?php echo display('logo') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="logo" id="logo" type="file" tabindex="1">
                                <input type="hidden" name="id" value="<?php echo $sdata->setting_id?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="logo" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-6">
                                <img src="<?php echo $sdata->logo?>" class="img img-responsive" height="100" width="100">
                                <input name ="old_logo" type="hidden" value="<?php echo $sdata->logo?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="invoice_logo" class="col-sm-3 col-form-label"><?php echo display('invoice_logo') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="invoice_logo" id="invoice_logo" type="file" tabindex="2">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="invoice_logo" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-6">
                                <img src="<?php echo $sdata->invoice_logo ?>" class="img img-responsive" height="100" width="100">
                                <input name ="old_invoice_logo" type="hidden" value="<?php echo $sdata->invoice_logo?>">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="favicon" class="col-sm-3 col-form-label"><?php echo display('favicon') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="favicon" id="favicon" type="file" tabindex="3">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="favicon" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-6">
                                <img src="<?php echo $sdata->favicon?>" class="img img-responsive" height="100" width="100">
                                <input name ="old_favicon" type="hidden" value="<?php echo $sdata->favicon?>" tabindex="4">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="currency" class="col-sm-3 col-form-label"><?php echo display('currency') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" name="currency" id="currency" tabindex="5">
                                    <?php foreach($currency_list as $clist){?>
                         <option value="<?php echo $clist->icon?>" <?php if ($sdata->currency == $clist->icon) {
                        echo "selected";
                    } ?>><?php echo $clist->currency_name.' '.$clist->icon;?></option>
                                    <?php }?>
                                   </select>
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="time_zone" class="col-sm-3 col-form-label"><?php echo display('timezone') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                  <?php echo form_dropdown('timezone', $timezonelist,$sdata->timezone , array('class'=>'form-control')); ?>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="currency_position" class="col-sm-3 col-form-label"><?php echo display('currency_position') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" name="currency_position" id="currency_position" tabindex="6">
                                    <option value=""><?php echo display('select_one') ?></option>
                                    <option value="0" <?php if ($sdata->currency_position == 0) {
                                    echo "selected";
                                } ?>><?php echo display('left') ?></option>
                                    <option value="1" <?php if ($sdata->currency_position == 1) {
                                    echo "selected";
                                } ?>><?php echo display('right') ?></option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="footer_text" class="col-sm-3 col-form-label"><?php echo display('footer_text') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="footer_text" id="footer_text" type="text" placeholder="Foter Text" value="<?php echo $sdata->footer_text?>" tabindex="7">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="language" class="col-sm-3 col-form-label"><?php echo display('language') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                        <?php
                        echo form_dropdown('language', $languageList, $sdata->language, 'class="form-control" id="language" tabindex="8"');
                        ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lrt" class="col-sm-3 col-form-label"><?php echo display('ltr_or_rtr') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" name="rtr" id="lrt" tabindex="9">
                                    <option value=""><?php echo display('select_one') ?></option>
                                    <option value="0" <?php if ($sdata->rtr == 0) {
    echo "selected";
} ?>><?php echo display('ltr') ?></option>
                                    <option value="1" <?php if ($sdata->rtr == 1) {
    echo "selected";
} ?>><?php echo display('rtr') ?></option>
                                </select>
                            </div>
                        </div>

     

                        <div class="form-group row">
                            <label for="discount_type" class="col-sm-3 col-form-label"><?php echo display('discount_type') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" name="discount_type" id="discount_type" tabindex="10">
                                    <option value=""><?php echo display('select_one') ?></option>
                                    <option value="1" <?php if ($sdata->discount_type == 1) {
                        echo "selected";
                    } ?>><?php echo display('discount_percentage') ?> %</option>
                                    <option value="2" <?php if ($sdata->discount_type == 2) {
                        echo "selected";
                    } ?>><?php echo display('discount') ?></option>
                                    <option value="3" <?php if ($sdata->discount_type == 3) {
                        echo "selected";
                    } ?>><?php echo display('fixed_dis') ?></option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit"  id="add-setting" class="btn btn-success btn-large" name="add-setting" value="<?php echo display('save_changes') ?>" tabindex="13"/>
                            </div>
                        </div>
                    </div>
<?php echo form_close() ?>
                </div>
            </div>
        </div>
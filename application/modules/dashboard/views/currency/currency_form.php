        <div class="row">
            <div class="col-sm-12">
               
        <?php if($this->permission1->method('add_currency','read')->access()){?>
                  <a href="<?php echo base_url('currency_list')?>" class="btn btn-info m-b-5 m-r-2"><i class="ti-list"> </i> <?php echo display('currency_list')?> </a>      <?php }?>           
              
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo $title; ?> </h4>
                        </div>
                    </div>
                   <?php echo form_open('currency_form/'.$currency_data->id,array('class' => 'form-vertical','id' => 'currency_entry' ))?>
                    <div class="panel-body">

                    	<div class="form-group row">
                            <input type="hidden" name="id" value="<?php echo (!empty($currency_data->id)?$currency_data->id:'')?>">
                            <label for="name" class="col-sm-3 col-form-label"><?php echo display('currency_name') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="currency_name" id="currency_name" required="" placeholder="<?php echo display('currency_name') ?>" value="<?php echo (!empty($currency_data->currency_name)?$currency_data->currency_name:'')?>"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="currency_icon" class="col-sm-3 col-form-label"><?php echo display('currency_icon') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="currency_icon" id="cur_icon" required="" placeholder="<?php echo display('currency_icon') ?>" value="<?php echo (!empty($currency_data->icon)?$currency_data->icon:'')?>"/>
                            </div>
                        </div>

                       

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="reset" class="btn btn-danger" value="<?php echo display('reset') ?>" />
                                <input type="submit" id="add-currency" class="btn btn-success" name="add-currency" value="<?php echo display('save') ?>"/>
                            </div>
                        </div>
                    </div>
                    <?php echo form_close()?>
                </div>
            </div>
        </div>
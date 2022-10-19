

        <div class="row">
            <div class="col-sm-12">
               
                <?php if($this->permission1->method('manage_ofln_person','read')->access()){ ?>
                  <a href="<?php echo base_url('manage_office_loan_person')?>" class="btn btn-info m-b-5 m-r-2"><i class="ti-align-justify"> </i> <?php echo display('manage_person')?> </a>
              <?php }?>
              
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('add_person') ?> </h4>
                        </div>
                    </div>
                   <?php echo form_open_multipart('hrm/loan/submit_office_loan_person',array('class' => 'form-vertical','id' => 'inflow_entry' ))?>
                    <div class="panel-body">

                    	<div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label"><?php echo display('name') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="name" id="name" required="" placeholder="<?php echo display('name') ?>" tabindex="1"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-sm-3 col-form-label"><?php echo display('phone') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" name="phone" id="phone" placeholder="<?php echo display('phone') ?>" tabindex="2" data-validation="number" data-validation-allowing="negative,number" input name="color" data-validation="number" datavalidation-ignore="$" required="required" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-sm-3 col-form-label"><?php echo display('address') ?> <i class="text-danger"></i></label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="address" id="address" placeholder="<?php echo display('address') ?>" tabindex="3"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="reset" class="btn btn-danger" value="<?php echo display('reset') ?>" tabindex="4"/>
                                <input type="submit" id="add-deposit" class="btn btn-success" name="add-deposit" value="<?php echo display('save') ?>" tabindex="5"/>
                            </div>
                        </div>
                    </div>
                    <?php echo form_close()?>
                </div>
            </div>
        </div>



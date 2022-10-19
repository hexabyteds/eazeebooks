
        <div class="row">
            <div class="col-sm-12">
                
            <?php if($this->permission1->method('bank_transaction','create')->access()){ ?>
                  <a href="<?php echo base_url('bank_transaction')?>" class="btn btn-info m-b-5 m-r-2"><i class="ti-align-justify"> </i> <?php echo display('bank_transaction')?> </a>
                <?php }?>
                <?php if($this->permission1->method('bank_list','read')->access()){ ?>
                  <a href="<?php echo base_url('bank_list')?>" class="btn btn-success m-b-5 m-r-2"><i class="ti-align-justify"> </i>  <?php echo display('manage_bank')?> </a>
                   <?php }?>

               
            </div>
        </div>

        <!-- New bank -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('add_new_bank') ?> </h4>
                        </div>
                    </div>
                   <?php echo form_open_multipart('bank_form/'.$bank->id,array('class' => 'form-vertical','id' => 'validate' ))?>
                    <div class="panel-body">

                    	<div class="form-group row">
                            <label for="bank_name" class="col-sm-3 col-form-label"><?php echo display('bank_name') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="bank_name" id="bank_name" required="" placeholder="<?php echo display('bank_name') ?>" value="<?php echo $bank->bank_name?>" tabindex="1"/>
                                <input type="hidden" name="bank_id" value="<?php echo $bank->id?>">
                                 <input type="hidden" name="old_name" value="<?php echo $bank->bank_name?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ac_name" class="col-sm-3 col-form-label"><?php echo display('ac_name') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="ac_name" id="ac_name" required="" placeholder="<?php echo display('ac_name') ?>" value="<?php echo $bank->ac_name?>" tabindex="2"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ac_no" class="col-sm-3 col-form-label"><?php echo display('ac_no') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="ac_no" id="ac_no" required="" placeholder="<?php echo display('ac_no') ?>" tabindex="3" value="<?php echo $bank->ac_number?>"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="branch" class="col-sm-3 col-form-label"><?php echo display('branch') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="branch" id="branch" required="" placeholder="<?php echo display('branch') ?>" tabindex="4" value="<?php echo $bank->branch?>"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="signature_pic" class="col-sm-3 col-form-label"><?php echo display('signature_pic') ?></label>
                            <div class="col-sm-6">
                                <input type="file" class="form-control" name="signature_pic" id="signature_pic" placeholder="<?php echo display('signature_pic') ?>" tabindex="5"/>
                                <input type="hidden" name="old_pic" value="<?php echo $bank->signature_pic?>">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="reset" class="btn btn-danger" value="<?php echo display('reset') ?>" tabindex="5"/>
                                <input type="submit" id="add-deposit" class="btn btn-success" name="add-deposit" value="<?php echo display('save') ?>" tabindex="6"/>
                            </div>
                        </div>
                    </div>
                    <?php echo form_close()?>
                </div>
            </div>
        </div>
 